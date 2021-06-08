<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Fair;
use App\Models\Marketer;
use App\Models\Product;
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

    public function marketers($id) {
        $marketers = Marketer::where('fair_id', $id)->where('status', 1)->get();
        return view('dashboard.fair.marketers', compact('marketers'));
    }

    public function accept($id) {
        $marketers = Marketer::where('fair_id', $id)->where('status', 0)->get();
        return view('dashboard.fair.accept', compact('marketers'));
    }

    public function receive($id) {
        $marketers = Marketer::where('id', $id)->where('status', 0)
        ->update(['status' => '1']);
        if ($marketers == 1) {
            return redirect()->route('dashboard');
        }
        return view('dashboard');
    }

    public function products($id) {
        $products = Product::where('marketer_id', $id)->get();
        return view('dashboard.fair.products', compact('products'));
    }
}