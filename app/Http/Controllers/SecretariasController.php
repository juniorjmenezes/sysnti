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

class SecretariasController extends Controller
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
        $ativos = Equipamentos::all()->where('status', 'ATIVO');
        $inserviveis = Equipamentos::all()->where('status', 'INSERVÍVEL');
        $manutencao = Equipamentos::all()->where('status', 'MANUTENÇÃO');
        $remanejados = Equipamentos::all()->where('status', 'REMANEJADO');
        //
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('adicionar-secretaria', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
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
            'nome'=>'required',
        ]);

        $requestData = $request->all();

        Secretarias::create($requestData);

        return redirect ('adicionar-secretaria')->with('mensagem', 'SECRETARIA CADASTRADA COM SUCESSO!');
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
