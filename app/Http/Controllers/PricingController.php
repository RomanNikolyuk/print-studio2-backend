<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Models;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $models = Models::with('price')->get();

        $maintenance = Maintenance::get();

        return view('pricing')
            ->with(compact('models'))
            ->with(compact('maintenance'));
    }
}
