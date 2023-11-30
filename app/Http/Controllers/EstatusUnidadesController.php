<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\EstatusUnidades;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EstatusUnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Unidades/Index', [ 
            'estatusUnidades'=> EstatusUnidades::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Unidades/Create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate(
        ['marca' => 'required',
        'autobus'=> 'required',
        'ubicacion'=> 'required',
        'estatus'=> 'required',
        'descripcion'=> 'required',
        'diasfr'=> 'required',
        'descripcionfalla'=> 'required'
        ]);
        $data['diasfr']=Carbon::now();
        EstatusUnidades::create($data);
        return redirect()->route('unidades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EstatusUnidades $estatusUnidad)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EstatusUnidades $estatusUnidades, $vra)
    {
        return Inertia::render('Unidades/Show', [
            'estatusUnidades'=>EstatusUnidades::where('id', $vra)->get(),
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EstatusUnidades $estatusUnidades, $vra)
    {
        //
        $data = $request->validate(
            ['marca' => 'required',
            'autobus'=> 'required',
            'ubicacion'=> 'required',
            'estatus'=> 'required',
            'descripcion'=> 'required',
            'diasfr'=> 'required',
            'descripcionfalla'=> 'required'
            ]);
            if($data['estatus'] == 'Disponible'){
                $data['diasfr']= 0;
            }
            if($data['estatus'] == 'Taller'){
                $data['diasfr']= Carbon::now();;
            }
            EstatusUnidades::where('id', $vra)->update([
            'marca' => $data['marca'],
            'autobus'=>$data['autobus'],
            'ubicacion'=> $data['ubicacion'],
            'estatus'=> $data['estatus'],
            'descripcion'=> $data['descripcion'],
            'diasfr'=> $data['diasfr'],
            'descripcionfalla'=> $data['descripcionfalla'],
            ]);
            return redirect()->route('unidades.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstatusUnidades $estatusUnidades)
    {
        //
    }
}