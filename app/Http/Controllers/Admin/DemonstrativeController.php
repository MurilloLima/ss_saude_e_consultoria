<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Models\Demonstrative;
use App\Models\Helps\Formated;
use Barryvdh\DomPDF\Facade as PDF;

class DemonstrativeController extends Controller
{
    private $demonstrative;
    private $formated;
    public function __construct(Demonstrative $demonstrative, Formated $formated)
    {
        $this->demonstrative = $demonstrative;
        $this->formated = $formated;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->demonstrative->orderby('created_at', 'desc')->paginate(30);
        return view('panel.admin.pages.demonstrative.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.demonstrative.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->demonstrative->create([
            'socio' => $request->socio,
            'cpf' => $request->cpf,
            'cnpj' => $request->cnpj,
            'empresa' => $request->empresa,
            'cpf_cnpj' => $request->cpf_cnpj,
            'tomador' => $request->tomador,
            'taxa_desconto' => $this->formated->limpar_texto($request->taxa_desconto),
            'pagamento_statu' => $request->pagamento_statu,
            'pagamento_date' => $request->pagamento_date,
            'pagamento_previsao' => $request->pagamento_previsao,
            'valor_bruto' => $this->formated->moneyFormated($request->valor_bruto),
            'saldo' => $this->formated->moneyFormated($request->saldo),
            'descricao' => $request->descricao,
            'date_emissao' => $request->date_emissao,
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
        $data = $this->demonstrative->find($id);
        return view('panel.admin.pages.demonstrative.edit', compact('data'));
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
        $data = $this->demonstrative->find($id);
        $data->update([
            'socio' => $request->socio,
            'cpf' => $request->cpf,
            'cnpj' => $request->cnpj,
            'empresa' => $request->empresa,
            'cpf_cnpj' => $request->cpf_cnpj,
            'tomador' => $request->tomador,
            'taxa_desconto' => $this->formated->limpar_texto($request->taxa_desconto),
            'pagamento_statu' => $request->pagamento_statu,
            'pagamento_date' => $request->pagamento_date,
            'pagamento_previsao' => $request->pagamento_previsao,
            'valor_bruto' => $this->formated->moneyFormated($request->valor_bruto),
            'saldo' => $this->formated->moneyFormated($request->saldo),
            'descricao' => $request->descricao,
            'date_emissao' => $request->date_emissao,
        ]);
        return redirect()->back()->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->demonstrative->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }

    public function report()
    {
        return view('panel.admin.pages.demonstrative.report');
    }

    public function search(ReportRequest $request)
    {
        $date_start = date('Y-m-d', strtotime($request->get('date_start')));
        $date_end = date('Y-m-d', strtotime($request->get('date_end')));
        $data = $this->demonstrative->whereBetween('date_emissao', [$date_start, $date_end])->orderby('date_emissao', 'asc')->get();
        //Print
        $pdf = PDF::loadView('panel.admin.pages.demonstrative.search', compact('data', 'date_start', 'date_end'));
        return $pdf->stream();
    }
}
