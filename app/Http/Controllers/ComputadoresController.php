<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\Equipamentos;
use App\Models\Perifericos;
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
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('computadores', compact('computadores', 'desktops', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'notebooks', 'servidores', 'secretarias', 'setores', 'users'));
    }

    public function desktops()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('desktops', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'desktops', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'notebooks', 'servidores', 'secretarias', 'setores', 'users'));
    }

    public function notebooks()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
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

        return view('notebooks', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_computador', 'desktops',  'ativos', 'inserviveis', 'manutencao', 'remanejados', 'ult_desktop', 'notebooks', 'servidores', 'ult_servidor', 'secretarias', 'setores', 'users'));
    }

    public function servidores()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ativos = Equipamentos::all()->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('status', 'REMANEJADO');
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

        return view('servidores', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_computador', 'desktops', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'ult_desktop', 'notebooks', 'ult_notebook','servidores', 'secretarias', 'setores', 'users'));
    }

    public function ativos()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $p_ativos = Equipamentos::distinct()->select('tipo_computador')->where('status', 'ATIVO')->get();
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('computadores-ativos', compact('computadores', 'desktops',  'notebooks', 'servidores', 'ativos', 'p_ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function inserviveis()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $p_inserviveis = Equipamentos::distinct()->select('tipo_computador')->where('status', 'INSERVÍVEL')->get();
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('computadores-inserviveis', compact('computadores', 'desktops',  'notebooks', 'servidores', 'ativos', 'inserviveis', 'p_inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function manutencao()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $p_manutencao = Equipamentos::distinct()->select('tipo_computador')->where('status', 'MANUTENÇÃO')->get();
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('computadores-em-manutencao', compact('computadores', 'desktops',  'notebooks', 'servidores', 'ativos', 'inserviveis', 'manutencao', 'p_manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function remanejados()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        //
        $desktops = Equipamentos::all()->where('tipo_computador', 'DESKTOP');
        $notebooks = Equipamentos::all()->where('tipo_computador', 'NOTEBOOK');
        $servidores = Equipamentos::all()->where('tipo_computador', 'SERVIDOR');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR')->where('status', 'REMANEJADO');
        $p_remanejados = Equipamentos::distinct()->select('tipo_computador')->where('status', 'REMANEJADO')->get();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('computadores-remanejados', compact('computadores', 'desktops',  'notebooks', 'servidores', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'p_remanejados', 'secretarias', 'setores', 'users'));
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
    public function show($id)
    {
        $computador = Equipamentos::findOrFail($id);
        //
        $perifericos = Perifericos::all();
        $perifericos_computador = Perifericos::all()->where('id_equipamento', $id);
        //
        return view ('detalhes-computador', compact('computador', 'perifericos', 'perifericos_computador'));
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
