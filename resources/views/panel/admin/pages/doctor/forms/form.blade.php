<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" class="form-control" name="email" value="{{$data->user->email ?? old('email')}}"
                placeholder="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Confirmar Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" class="form-control cpf" name="cpf" value="{{$data->cpf ?? old('cpf')}}"
                placeholder="000.000.000-00">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label for="">NOME COMPLETO</label>
            <input type="text" class="form-control" name="name" value="{{$data->user->name ?? old('name')}}"
                placeholder="Nome">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">CRM</label>
            <input type="text" class="form-control" name="crm" value="{{$data->crm ?? old('crm')}}" placeholder="00">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label for="">RG</label>
            <input type="text" class="form-control" name="rg" value="{{$data->rg ?? old('rg')}}" placeholder="Empresa">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">ESTADO CIVIL</label>
            {!! Form::select('estado_civil', [
            'Solteiro'=>'Solteiro',
            'Casado'=>'Casado',
            'Separado'=>'Separado',
            'Divorciado'=>'Divorciado',
            'Viúvo'=>'Viúvo',
            'Amasiado'=>'Amasiado'
            ], $data->estado_civil ?? old('estado_civil'), ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">NACIONALIDADE</label>
            <input type="text" class="form-control" name="nacionalidade"
                value="{{$data->nacionalidade ?? old('nacionalidade')}}" placeholder="">
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="">NATURALIDADE</label>
            <input type="text" class="form-control" name="naturalidade"
                value="{{$data->naturalidade ?? old('naturalidade')}}" placeholder="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="">ENDERECO</label>
            <input type="text" class="form-control" name="endereco" value="{{$data->endereco ?? old('endereco')}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">TELEFONE</label>
            <input type="text" class="form-control phone_with_ddd" name="telefone"
                value="{{$data->telefone ?? old('telefone')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">BANCO</label>
            <input type="text" class="form-control" name="banco" value="{{$data->banco ?? old('banco')}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">AGÊNCIA</label>
            <input type="text" class="form-control" name="agencia" value="{{$data->agencia ?? old('agencia')}}">
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="">CONTA</label>
            <input type="text" class="form-control" name="conta" value="{{$data->conta ?? old('conta')}}">
        </div>
    </div>
</div>
<h5>LOCAL PRESTAÇÃO DE SERVIÇO</h5>
<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="">NOME HOSPITAL</label>
            <input type="text" class="form-control" name="local_servico"
                value="{{$data->local_servico ?? old('local_servico')}}">
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <label for="">SERVIÇO PRESTADO</label>
            <input type="text" class="form-control" name="servico_prestado"
                value="{{$data->servico_prestado ?? old('servico_prestado')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">CNPJ</label>
            <input type="text" class="form-control" name="servico_cnpj"
                value="{{$data->servico_cnpj ?? old('servico_cnpj')}}">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">ENDEREÇO</label>
            <input type="text" class="form-control" name="servico_endereco"
                value="{{$data->servico_endereco ?? old('servico_endereco')}}">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">TELEFONE</label>
            <input type="text" class="form-control" name="servico_telefone"
                value="{{$data->servico_telefone ?? old('servico_telefone')}}">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="">E-MAIL</label>
            <input type="text" class="form-control" name="servico_email"
                value="{{$data->servico_email ?? old('servico_email')}}">
        </div>
    </div>
</div>