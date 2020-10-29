<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\Equipamentos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class ProjetoresController extends Controller
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
        $avulsos = Equipamentos::all()->where('tipo_projetor', 'AVULSO');
        $ult_avulso = Equipamentos::all()->where('tipo_projetor', 'AVULSO')->last();
        $integrados = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $ult_integrado = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('projetores', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'avulsos', 'ult_avulso', 'integrados', 'ult_integrado', 'secretarias', 'setores', 'users'));
    }

    public function avulsos()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_projetor = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR')->last();
        //
        $avulsos = Equipamentos::all()->where('tipo_projetor', 'AVULSO');
        $integrados = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $ult_integrado = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('avulsos', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'avulsos', 'integrados', 'ult_integrado', 'secretarias', 'setores', 'users'));
    }

    public function integrados()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_projetor = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR')->last();
        //
        $avulsos = Equipamentos::all()->where('tipo_projetor', 'AVULSO');
        $ult_avulso = Equipamentos::all()->where('tipo_projetor', 'AVULSO')->last();
        $integrados = Equipamentos::all()->where('tipo_projetor', 'INTEGRADO');
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('integrados', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_projetor', 'avulsos', 'ult_avulso', 'integrados', 'secretarias', 'setores', 'users'));
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
        return view('detalhes-projetor');
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
