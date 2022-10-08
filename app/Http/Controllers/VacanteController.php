<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',Vacante::class);
        return view('vacantes.index');
    }

    /**0
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Vacante::class);
        return view('vacantes.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Vacante $vacante)
    {
        return view('vacantes.show',compact('vacante'));
    }

    public function edit(Vacante $vacante)
    {
        $this->authorize('update',$vacante);
        return view('vacantes.edit',compact('vacante'));
    }

}
