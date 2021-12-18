<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" class="form-control cpf" name="cpf" value="{{$data->cpf ?? old('cpf')}}" placeholder="000.000.000-00">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label for="">SÓCIO(A) PRESTADOR(A) DO SERVIÇO</label>
            <input type="text" class="form-control" name="socio" value="{{$data->socio ?? old('socio')}}"
                placeholder="Nome">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">CNPJ</label>
            <input type="text" class="form-control cnpj" name="cnpj" value="{{$data->cnpj ?? old('cnpj')}}"
                placeholder="00.000.000/0000-00">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label for="">EMPRESA</label>
            <input type="text" class="form-control" name="empresa" value="{{$data->empresa ?? old('empresa')}}"
                placeholder="Empresa">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">CPF/CNPJ</label>
            <input type="text" class="form-control" name="cpf_cnpj" value="{{$data->cpf_cnpj ?? old('cpf_cnpj')}}" placeholder="">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label for="">TOMADOR DO SERVIÇO</label>
            <input type="text" class="form-control" name="tomador" value="{{$data->tomador ?? old('tomador')}}"
                placeholder="Nome">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">DESCRIÇÃO DOS DESCONTOS</label>
            <input type="text" class="form-control percent" name="taxa_desconto"
                value="{{$data->taxa_desconto ?? old('taxa_desconto')}}" placeholder="Taxa 0%">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">PAGAMENTO STATUS</label>
            <input type="text" class="form-control" name="pagamento_statu"
                value="{{$data->pagamento_statu ?? old('pagamento_statu')}}">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">PAGAMENTO DATA</label>
            <input type="date" class="form-control" name="pagamento_date"
                value="{{$data->pagamento_date ?? old('pagamento_date')}}">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">PAGAMENTO PREVISÃO</label>
            <input type="date" class="form-control" name="pagamento_previsao"
                value="{{$data->pagamento_previsao ?? old('pagamento_previsao')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">VALOR BRUTO DA NOTA FISCAL</label>
            <input type="text" class="form-control money" name="valor_bruto"
                value="{{$data->valor_bruto ?? old('valor_bruto')}}" placeholder="R$">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">SALDO</label>
            <input type="text" class="form-control money" name="saldo" value="{{$data->saldo ?? old('saldo')}}" placeholder="R$">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">DATA EMISSÃO</label>
            <input type="date" class="form-control" name="date_emissao"
                value="{{$data->date_emissao ?? old('date_emissao')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">OBSERVAÇÃO</label>
            <textarea class="form-control" name="descricao" placeholder="Obeservação"></textarea>
        </div>
    </div>
</div>