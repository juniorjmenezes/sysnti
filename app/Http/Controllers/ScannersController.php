<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\Equipamentos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class ScannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $horizontais = Equipamentos::all()->where('tipo_scanner', 'HORIZONTAL');
        $ult_horizontal = Equipamentos::all()->where('tipo_scanner', 'HORIZONTAL')->last();
        $portateis = Equipamentos::all()->where('tipo_scanner', 'PORTÁTIL');
        $ult_portatil = Equipamentos::all()->where('tipo_scanner', 'PORTÁTIL')->last();
        $verticais = Equipamentos::all()->where('tipo_scanner', 'VERTICAL');
        $ult_vertical = Equipamentos::all()->where('tipo_scanner', 'VERTICAL')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('scanners', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'horizontais', 'ult_horizontal', 'portateis', 'ult_portatil','verticais', 'ult_vertical', 'secretarias', 'setores', 'users'));
    }

    public function horizontais()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_scanner = Equipamentos::all()->where('tipo_equipamento', 'SCANNER')->last();
        //
        $horizontais = Equipamentos::all()->where('tipo_projetor', 'AVULSO');
        $portateis = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $ult_portatil = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO')->last();
        $verticais = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $ult_vertical = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO')->last();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('horizontais', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_scanner', 'horizontais', 'portateis', 'ult_portatil','verticais', 'ult_vertical', 'secretarias', 'setores', 'users'));
    }

    public function portateis()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_scanner = Equipamentos::all()->where('tipo_equipamento', 'SCANNER')->last();
        //
        $horizontais = Equipamentos::all()->where('tipo_projetor', 'AVULSO');
        $ult_horizontal = Equipamentos::all()->where('tipo_projetor', 'AVULSO')->last();
        $portateis = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $verticais = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $ult_vertical = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO')->last();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('portateis', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_scanner', 'horizontais', 'portateis', 'verticais', 'ult_vertical', 'secretarias', 'setores', 'users'));
    }

    public function verticais()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_scanner = Equipamentos::all()->where('tipo_equipamento', 'SCANNER')->last();
        //
        $horizontais = Equipamentos::all()->where('tipo_projetor', 'AVULSO');
        $ult_horizontal = Equipamentos::all()->where('tipo_projetor', 'AVULSO')->last();
        $portateis = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $ult_portatil = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO')->last();
        $verticais = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('verticais', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_scanner', 'horizontais', 'portateis', 'ult_portatil','verticais', 'secretarias', 'setores', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('detalhes-scanner');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
