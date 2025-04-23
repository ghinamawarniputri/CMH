<?php

namespace App\Http\Controllers\Filament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Filament\Facades\Filament;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Filament::auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
