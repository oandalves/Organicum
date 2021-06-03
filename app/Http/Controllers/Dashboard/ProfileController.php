<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $id = Auth::id();
        $user = User::where('id', $id)
                    ->first();
        return view('dashboard.profile.index', compact('user'));
    }
}
