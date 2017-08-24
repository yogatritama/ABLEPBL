<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Validator;
use App\Mahasiswa;
use App\Tutor;

class AuthController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string'
        ]);
        if($validator->fails()) {
            return redirect()->route('index')->withInput()->with('status', 'Unregistered');
        }
        if(Mahasiswa::where('email', $request->email)->first() != null) {
            if (Auth::guard('mahasiswa')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('index');
            } else {
                return redirect()->route('index')->withInput()->with('status', 'Unauthorized');
            }
        } else if(Tutor::where('email', $request->email)->first() != null) {
            if (Auth::guard('tutor')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('tutor.index');
            } else {
                return redirect()->route('index')->withInput()->with('status', 'Unauthorized');
            }
        } else {
            return redirect()->route('index')->withInput()->with('status', 'Unregistered');
        }
    }

    public function logout() {
        if(Auth::guard('tutor')->check()) {
            Auth::guard('tutor')->logout();
        } else if(Auth::guard('mahasiswa')->check()) {
            Auth::guard('mahasiswa')->logout();
        }
        return redirect()->route('index');
    }

    public function registerTutor(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string',
            'institution' => 'nullable|max:255|string'
        ]);
        if($validator->fails()) {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
        $countEmail = Tutor::where('email', $request->email)->count();
        if($countEmail > 0) {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
        $countEmail = Mahasiswa::where('email', $request->email)->count();
        if($countEmail > 0) {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
        if($request->institution != null) {
            $user = Tutor::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => str_random(10),
                'role' => 1,
                'institution' => $request->institution
            ]);
        } else {
            $user = Tutor::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => str_random(10),
                'role' => 1
            ]);
        }
        if($user != null) {
            return redirect()->route('index')->with('status', 'Success');
        } else {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
    }

    public function registerMahasiswa(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'password' => 'required|max:255|string',
            'institution' => 'nullable|max:255|string',
            'tutor' => 'nullable|max:255|string'
        ]);
        if($validator->fails()) {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
        $countEmail = Tutor::where('email', $request->email)->count();
        if($countEmail > 0) {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
        $countEmail = Mahasiswa::where('email', $request->email)->count();
        if($countEmail > 0) {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
        if($request->institution != null && $request->tutor != null) {
            $user = Mahasiswa::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => str_random(10),
                'role' => 2,
                'institution' => $request->institution,
                'tutor' => $request->tutor
            ]);
        } else if($request->institution != null) {
            $user = Mahasiswa::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => str_random(10),
                'role' => 2,
                'institution' => $request->institution
            ]);
        } else if($request->tutor != null) {
            $user = Mahasiswa::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => str_random(10),
                'role' => 2,
                'tutor' => $request->tutor
            ]);
        } else {
            $user = Mahasiswa::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => str_random(10),
                'role' => 2
            ]);
        }
        if($user != null) {
            return redirect()->route('index')->with('status', 'Success');
        } else {
            return redirect()->route('index')->withInput()->with('status', 'Failed');
        }
    }
}
