<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\Equipamentos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class ImpressorasController extends Controller
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
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $ult_jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA')->last();
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $ult_laser = Equipamentos::all()->where('tipo_impressora', 'LASER')->last();
        $outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL');
        $ult_outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('impressoras', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'jato_tinta', 'ult_jato_tinta', 'laser', 'ult_laser','outras_impressoras', 'ult_outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function jato_tinta()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_impressora = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->last();
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $ult_jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA')->last();
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $ult_laser = Equipamentos::all()->where('tipo_impressora', 'LASER')->last();
        $outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL');
        $ult_outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('jato-de-tinta', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_impressora', 'jato_tinta', 'laser', 'ult_laser','outras_impressoras', 'ult_outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function laser()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_impressora = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->last();
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $ult_jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA')->last();
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $ult_laser = Equipamentos::all()->where('tipo_impressora', 'LASER')->last();
        $outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL');
        $ult_outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('laser', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_impressora', 'jato_tinta', 'ult_jato_tinta', 'laser', 'outras_impressoras', 'ult_outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function outras_impressoras()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_impressora = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->last();
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $ult_jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA')->last();
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $ult_laser = Equipamentos::all()->where('tipo_impressora', 'LASER')->last();
        $outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL');
        $ult_outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('outras-impressoras', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_impressora', 'jato_tinta', 'ult_jato_tinta', 'laser', 'ult_laser','outras_impressoras', 'secretarias', 'setores', 'users'));
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
        return view('detalhes-impressora');
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
