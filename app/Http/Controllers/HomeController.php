<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Correios;
use App\Models\Study;

class HomeController extends Controller
{
    /**
     * @var \App\Models\Study
     */
    protected $study;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Study $study)
    {
        $this->middleware('auth');
        $this->study = $study;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd(\Correios::cep('89062086'));
        //dd($this->study->estudosEmAndamento());

        $estudosEmAtraso    = $this->study->estudosEmAtraso();
        $estudosEmAndamento = $this->study->estudosEmAndamento();
        $estudosConcluidos  = $this->study->estudosConcluidos();
        return view('home', compact('estudosEmAtraso', 'estudosEmAndamento', 'estudosConcluidos'));
    }
}
