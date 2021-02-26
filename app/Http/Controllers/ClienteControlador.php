<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nomeCliente' => 'required|min:3|max:20|unique:clientes',
            'idadeCliente' => 'required',
            'enderecoCliente' => 'required|min:10',
            'emailCliente'=>'required|email'
        ];

        $mensagens = [
            'required' => 'O campo :attribute é obrigatório',
            'nomeCliente.min' => 'Nome tem que ser mais de 3 caracteres',
            'nomeCliente.max' => 'Nome tem que ser menos de 20 caracteres',
            'nomeCliente.unique' => 'Já existe um cliente com este nome',
            'emailCliente.email' => 'O email tem que ser válido'
        ];

        $request->validate($regras, $mensagens);

        /*
        $request->validate([
            'nomeCliente' => 'required|min:3|max:20|unique:clientes',
            'idadeCliente' => 'required',
            'enderecoCliente' => 'required|min:10',
            'emailCliente'=>'required|email'
        ]);
        */

        $cliente = new Cliente;
        $cliente -> nomeCliente = $request->input('nomeCliente');
        $cliente -> idadeCliente = $request->input('idadeCliente');
        $cliente -> enderecoCliente = $request->input('enderecoCliente');
        $cliente -> emailCliente = $request->input('emailCliente');
        $cliente->save();
        return redirect('clientes');
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
