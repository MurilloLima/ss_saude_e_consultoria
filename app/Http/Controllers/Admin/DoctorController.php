<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\User;

class DoctorController extends Controller
{
    private $doctor;

    public function __construct(Doctor $doctor)
    {
        $this->doctor =  $doctor;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->doctor->orderby('created_at', 'desc')->paginate(30);
        return view('panel.admin.pages.doctor.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $this->doctor->create([
            'user_id' => $user->id,
            'cpf' => $request->cpf,
            'crm' => $request->crm,
            'rg' => $request->rg,
            'estado_civil' => $request->estado_civil,
            'nacionalidade' => $request->nacionalidade,
            'naturalidade' => $request->naturalidade,
            'banco' => $request->banco,
            'agencia' => $request->agencia,
            'conta' => $request->conta,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'local_servico' => $request->local_servico,
            'servico_prestado' => $request->servico_prestado,
            'servico_cnpj' => $request->servico_cnpj,
            'servico_endereco' => $request->servico_endereco,
            'servico_telefone' => $request->servico_telefone,
            'servico_email' => $request->servico_email,
        ]);
        return redirect()->back()->with('success', 'Cadastrado com sucesso!');
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
        $data = $this->doctor->find($id);
        return view('panel.admin.pages.doctor.edit', compact('data'));
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
        $data = $this->doctor->find($id);
        $data->user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $data->update([
            'cpf' => $request->cpf,
            'crm' => $request->crm,
            'rg' => $request->rg,
            'estado_civil' => $request->estado_civil,
            'nacionalidade' => $request->nacionalidade,
            'naturalidade' => $request->naturalidade,
            'banco' => $request->banco,
            'agencia' => $request->agencia,
            'conta' => $request->conta,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'local_servico' => $request->local_servico,
            'servico_prestado' => $request->servico_prestado,
            'servico_cnpj' => $request->servico_cnpj,
            'servico_endereco' => $request->servico_endereco,
            'servico_telefone' => $request->servico_telefone,
            'servico_email' => $request->servico_email,
        ]);
        return redirect()->back()->with('success', 'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->doctor->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
