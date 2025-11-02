<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Mostrar formulario de registro
    public function showRegister()
    {
        return view('auth.register');
    }

    // Procesar login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'correo' => ['required', 'email'],
            'contrasena' => ['required'],
        ]);

        if (Auth::attempt(['email' => $credentials['correo'], 'password' => $credentials['contrasena']])) {
            $request->session()->regenerate();
            return redirect()->intended(route('principal'));
        }

        return back()->withErrors([
            'correo' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('correo');
    }

    // Procesar registro
    public function register(Request $request)
    {
        $data = $request->validate([
            'primer_nombre'   => ['required', 'string', 'max:100'],
            'segundo_nombre'  => ['nullable', 'string', 'max:100'],
            'apellidos'       => ['required', 'string', 'max:150'],
            'correo'          => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'contrasena'      => ['required', 'string', 'min:6', 'confirmed'],
            'telefono'        => ['nullable', 'string', 'max:30'],
        ]);

        $user = User::create([
            'name' => trim($data['primer_nombre'] . ' ' . ($data['segundo_nombre'] ?? '') . ' ' . $data['apellidos']),
            'email' => $data['correo'],
            'password' => Hash::make($data['contrasena']),
            'telefono' => $data['telefono'] ?? null,
        ]);

        Auth::login($user);

        return redirect()->route('principal')->with('success', 'Registro exitoso. Bienvenido/a!');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('principal');
    }
}
