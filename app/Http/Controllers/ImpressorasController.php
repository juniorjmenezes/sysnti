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
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::where('tipo_impressora', 'DUPLICADOR')->orWhere('tipo_impressora', 'MATRICIAL')->get();        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('impressoras', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function jato_tinta()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::where('tipo_impressora', 'DUPLICADOR')->orWhere('tipo_impressora', 'MATRICIAL')->get();        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('jato-de-tinta', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function laser()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::where('tipo_impressora', 'DUPLICADOR')->orWhere('tipo_impressora', 'MATRICIAL')->get();        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('laser', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function outras_impressoras()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::where('tipo_impressora', 'DUPLICADOR')->orWhere('tipo_impressora', 'MATRICIAL')->get();
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('outras-impressoras', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function ativos()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::where('tipo_impressora', 'DUPLICADOR')->orWhere('tipo_impressora', 'MATRICIAL')->get();        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $p_ativos = Equipamentos::distinct()->select('tipo_impressora')->where('status', 'ATIVO')->get();
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('impressoras-ativas', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'p_ativos', 'inserviveis', 'manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function inserviveis()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::where('tipo_impressora', 'DUPLICADOR')->orWhere('tipo_impressora', 'MATRICIAL')->get();        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $p_inserviveis = Equipamentos::distinct()->select('tipo_impressora')->where('status', 'INSERVÍVEL')->get();
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('impressoras-inserviveis', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'p_inserviveis', 'manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function manutencao()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $p_manutencao = Equipamentos::distinct()->select('tipo_impressora')->where('status', 'MANUTENÇÃO')->get();
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('impressoras-em-manutencao', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'manutencao', 'p_manutencao', 'remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
    }

    public function remanejados()
    {
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        //
        $jato_tinta = Equipamentos::all()->where('tipo_impressora', 'JATO DE TINTA');
        $laser = Equipamentos::all()->where('tipo_impressora', 'LASER');
        $outras_impressoras = Equipamentos::all()->where('tipo_impressora', 'DUPLICADOR', 'MATRICIAL');
        //
        $ativos = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA')->where('status', 'REMANEJADO');
        $p_remanejados = Equipamentos::distinct()->select('tipo_impressora')->where('status', 'REMANEJADO')->get();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('impressoras-remanejadas', compact('impressoras', 'jato_tinta', 'laser', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'p_remanejados', 'outras_impressoras', 'secretarias', 'setores', 'users'));
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
