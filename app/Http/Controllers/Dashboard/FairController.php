<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Fair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FairController extends Controller
{
    public function index() {
        $id = Auth::id();
        $fair = Fair::where('id', $id)
                    ->first();
        return view('dashboard.fair.index', compact('fair'));
    }

    public function create() {
        return view('dashboard.fair.create');
    }
}
