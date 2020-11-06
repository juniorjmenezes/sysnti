<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DateTime;
//Models
use App\Models\Equipamentos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __invoke()
    {
        return view('index');
    }

    public function index()
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
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('adicionar-equipamento', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
    }

    public function ativos()
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
        $ult_inservivel = Equipamentos::all()->where('status', 'INSERVÍVEL')->last();
        $ult_manutencao = Equipamentos::all()->where('status', 'MANUTENÇÃO')->last();
        $ult_remanejado = Equipamentos::all()->where('status', 'REMANEJADO')->last();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('ativos', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'ult_inservivel', 'ult_manutencao', 'ult_remanejado', 'secretarias', 'setores', 'users'));
    }

    public function inserviveis()
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
        $ult_ativo = Equipamentos::all()->where('status', 'ATIVO')->last();
        $ult_manutencao = Equipamentos::all()->where('status', 'MANUTENÇÃO')->last();
        $ult_remanejado = Equipamentos::all()->where('status', 'REMANEJADO')->last();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('inserviveis', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'ult_ativo', 'ult_manutencao', 'ult_remanejado', 'secretarias', 'setores', 'users'));
    }

    public function manutencao()
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
        $ult_ativo = Equipamentos::all()->where('status', 'ATIVO')->last();
        $ult_inservivel = Equipamentos::all()->where('status', 'INSERVÍVEL')->last();
        $ult_remanejado = Equipamentos::all()->where('status', 'REMANEJADO')->last();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('manutencao', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'ult_ativo', 'ult_inservivel', 'ult_remanejado', 'secretarias', 'setores', 'users'));
    }

    public function remanejados()
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
        $ult_ativo = Equipamentos::all()->where('status', 'ATIVO')->last();
        $ult_inservivel = Equipamentos::all()->where('status', 'INSERVÍVEL')->last();
        $ult_remanejado = Equipamentos::all()->where('status', 'REMANEJADO')->last();
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('remanejados', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'ult_ativo', 'ult_inservivel', 'ult_remanejado', 'secretarias', 'setores', 'users'));
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
            'tipo_equipamento'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
        ]);

        $requestData = $request->all();

        $data = $requestData['data_cadastro'];
        if($data)
        {
            $requestData['data_cadastro'] = DateTime::createFromFormat('d/m/Y', $data)->format('Y-m-d');
        }

        Equipamentos::create($requestData);

        return redirect ('adicionar-equipamento')->with('mensagem', 'EQUIPAMENTO CADASTRADO COM SUCESSO!');
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
