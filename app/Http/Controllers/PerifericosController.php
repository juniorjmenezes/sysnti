<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DateTime;
//Models
use App\Models\Equipamentos;
use App\Models\Perifericos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class PerifericosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('perifericos', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function autotransformadores()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('autotransformadores', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function estabilizadores()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('estabilizadores', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function nobreaks()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('nobreaks', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function modulos_isoladores()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('modulos-isoladores', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function monitores()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('monitores', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }
    public function webcams()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('webcams', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function ativos()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $p_ativos = Perifericos::distinct()->select('tipo_periferico')->where('status', 'ATIVO')->get();
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('perifericos-ativos', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'p_ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function inserviveis()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $p_inserviveis = Perifericos::distinct()->select('tipo_periferico')->where('status', 'INSERVÍVEL')->get();
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('perifericos-inserviveis', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'p_inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function manutencao()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $p_manutencao = Perifericos::distinct()->select('tipo_periferico')->where('status', 'MANUTENÇÃO')->get();
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('perifericos-manutencao', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'p_manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function remanejados()
    {
        $perifericos = Perifericos::all();
        //
        $autotransformadores = Perifericos::all()->where('tipo_periferico', 'AUTOTRANSFORMADOR');
        $estabilizadores = Perifericos::all()->where('tipo_periferico', 'ESTABILIZADOR');
        $nobreaks = Perifericos::all()->where('tipo_periferico', 'NO-BREAK');
        $modulos_isoladores = Perifericos::all()->where('tipo_periferico', 'MÓDULO ISOLADOR');
        $monitores = Perifericos::all()->where('tipo_periferico', 'MONITOR');
        $webcams = Perifericos::all()->where('tipo_periferico', 'WEBCAM');
        //
        $ativos = Perifericos::all()->where('status', 'ATIVO');
        $inserviveis = Perifericos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Perifericos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Perifericos::all()->where('status', 'REMANEJADO');
        $p_remanejados = Perifericos::distinct()->select('tipo_periferico')->where('status', 'REMANEJADOS')->get();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('perifericos-remanejados', compact('perifericos', 'autotransformadores', 'estabilizadores', 'nobreaks', 'modulos_isoladores', 'monitores', 'webcams', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'p_remanejados', 'secretarias', 'setores', 'users'));
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
        $this->validate($request, [
            'id_secretaria'=>'required',
            'id_setor'=>'required',
            'status'=>'required',
            'tipo_periferico'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
        ]);

        $requestData = $request->all();

        $data = $requestData['data_cadastro'];
        if($data)
        {
            $requestData['data_cadastro'] = DateTime::createFromFormat('d/m/Y', $data)->format('Y-m-d');
        }

        Perifericos::create($requestData);

        return redirect ('adicionar-periferico')->with('mensagem', 'PERIFÉRICO CADASTRADO COM SUCESSO!');
    }

    public function perifericos(Request $request)
    {

        $id = $request->input('id_periferico');

        $this->validate($request, [
            'id_equipamento'=>'required',
        ]);

        $requestData = $request->all();
        $periferico = Perifericos::findOrFail($id);
        $periferico->update($requestData);

        return redirect()->back()->with('mensagem', 'Periférico adicionado com sucesso!');
    }

    public function api(Request $request)
    {
        $search = $request->search;

        if($search == ''){
            $perifericos = Perifericos::orderby('id','asc')->select('id','patrimonio', 'tipo_periferico')->get();
        }else{
            $perifericos = Perifericos::orderby('id','asc')->select('id','patrimonio', 'tipo_periferico')->where('patrimonio', 'like', '%' .$search . '%')->get();
        }

        return $perifericos->map(function ($item) {
            return [
            'id' => $item->id,
            'label' => $item->patrimonio,
            'desc' => $item->tipo_periferico
            ];
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
