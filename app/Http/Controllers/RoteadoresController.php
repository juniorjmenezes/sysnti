<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Models
use App\Models\Equipamentos;
use App\Models\Secretarias;
use App\Models\Setores;
use App\Models\User;

class RoteadoresController extends Controller
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
        $com_fio = Equipamentos::all()->where('tipo_roteador', 'COM FIO');
        $ult_com_fio = Equipamentos::all()->where('tipo_roteador', 'COM FIO')->last();
        $sem_fio = Equipamentos::all()->where('tipo_roteador', 'SEM FIO');
        $ult_sem_fio = Equipamentos::all()->where('tipo_roteador', 'SEM FIO')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('roteadores', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'com_fio', 'ult_com_fio', 'sem_fio', 'ult_sem_fio', 'secretarias', 'setores', 'users'));
    }

    public function com_fio()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_roteador = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR')->last();
        //
        $com_fio = Equipamentos::all()->where('tipo_roteador', 'COM FIO');
        $ult_com_fio = Equipamentos::all()->where('tipo_roteador', 'COM FIO')->last();
        $sem_fio = Equipamentos::all()->where('tipo_roteador', 'SEM FIO');
        $ult_sem_fio = Equipamentos::all()->where('tipo_roteador', 'SEM FIO')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('com-fio', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_roteador','com_fio', 'sem_fio', 'ult_sem_fio', 'secretarias', 'setores', 'users'));
    }

    public function sem_fio()
    {
        $computadores = Equipamentos::all()->where('tipo_equipamento', 'COMPUTADOR');
        $impressoras = Equipamentos::all()->where('tipo_equipamento', 'IMPRESSORA');
        $projetores = Equipamentos::all()->where('tipo_equipamento', 'PROJETOR');
        $roteadores = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR');
        $scanners = Equipamentos::all()->where('tipo_equipamento', 'SCANNER');
        //
        $ult_roteador = Equipamentos::all()->where('tipo_equipamento', 'ROTEADOR')->last();
        //
        $com_fio = Equipamentos::all()->where('tipo_roteador', 'COM FIO');
        $ult_com_fio = Equipamentos::all()->where('tipo_roteador', 'COM FIO')->last();
        $sem_fio = Equipamentos::all()->where('tipo_roteador', 'SEM FIO');
        $ult_sem_fio = Equipamentos::all()->where('tipo_roteador', 'SEM FIO')->last();
        $secretarias = Secretarias::all()->sortBy('nome');
        $setores = Setores::all()->sortBy('nome');
        $users = User::all()->sortBy('id');

        return view('sem-fio', compact('computadores', 'impressoras', 'projetores', 'roteadores', 'scanners', 'ult_roteador','com_fio', 'ult_com_fio', 'sem_fio','secretarias', 'setores', 'users'));
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
        return view('detalhes-roteador');
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
