<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Marketer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketerController extends Controller
{
    public function index() {
        $id = Auth::id();
        $marketer = Marketer::where('id', $id)
                    ->first();
        return view('dashboard.marketer.index', compact('marketer'));
    }

    public function create() {
        return view('dashboard.marketer.create');
    }
}
