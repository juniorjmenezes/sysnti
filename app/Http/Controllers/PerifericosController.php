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

        return view('adicionar-periferico', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ativos', 'inserviveis', 'manutencao', 'remanejados', 'secretarias', 'setores', 'users'));
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
