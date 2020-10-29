<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\Equipamentos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class ComputadoresController extends Controller
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
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $ult_desktop = Equipamentos::all()->where('tipo_computador', 'DESKTOP')->last();
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $ult_notebook = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK')->last();
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        $ult_servidor = Equipamentos::all()->where('tipo_computador', 'SERVIDOR')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('computadores', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'desktops', 'ult_desktop', 'notebooks', 'ult_notebook','servidores', 'ult_servidor', 'secretarias', 'setores', 'users'));
    }

    public function desktops()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_computador = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->last();
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $ult_notebook = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK')->last();
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        $ult_servidor = Equipamentos::all()->where('tipo_computador', 'SERVIDOR')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('desktops', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_computador', 'desktops', 'notebooks', 'ult_notebook','servidores', 'ult_servidor', 'secretarias', 'setores', 'users'));
    }

    public function notebooks()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_computador = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->last();
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $ult_desktop = Equipamentos::all()->where('tipo_computador', 'DESKTOP')->last();
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        $ult_servidor = Equipamentos::all()->where('tipo_computador', 'SERVIDOR')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('notebooks', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_computador', 'desktops', 'ult_desktop', 'notebooks', 'servidores', 'ult_servidor', 'secretarias', 'setores', 'users'));
    }

    public function servidores()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_computador = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->last();
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $ult_desktop = Equipamentos::all()->where('tipo_computador', 'DESKTOP')->last();
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $ult_notebook = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK')->last();
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('servidores', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_computador', 'desktops', 'ult_desktop', 'notebooks', 'ult_notebook','servidores', 'secretarias', 'setores', 'users'));
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
        return view ('detalhes-computador');
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
