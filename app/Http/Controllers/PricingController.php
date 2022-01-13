<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Models;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PricingController extends Controller
{

    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    private $models;
    private $maintenance;

    public function __construct()
    {
        $this->models = Models::with('price')->get();

        $this->maintenance = Maintenance::get();
    }

    public function index()
    {
        return view('pricing')
            ->with('models', $this->models)
            ->with('maintenance', $this->maintenance);
    }

    public function pdf()
    {
        $pdf = App::make('dompdf.wrapper');

        $pdf->loadView('pricing', [
            'models' => $this->models,
            'maintenance' => $this->maintenance,
            'pdf' => true
        ]);

        return $pdf->download('int-service.pdf');
    }
}
