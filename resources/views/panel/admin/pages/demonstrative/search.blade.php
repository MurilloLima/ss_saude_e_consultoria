<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .table {
            width: 100%;
        }

        .table tr th {
            background-color: #EEE;
        }

        .table tr td {
            text-align: center;
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header border-0">
                    <span>Demonstrativo: <strong>{{date('d/m/Y', strtotime($date_start))}}</strong> à
                        <strong>{{date('d/m/Y', strtotime($date_end))}}</strong></span> <br>
                    {{-- <span class="card-title">Total: {{count($data)}}</span> --}}
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>DATA EMISSAO</th>
                                <th>CNPJ</th>
                                <th>EMPRESA</th>
                                <th>TOMADOR DO SERVIÇO</th>
                                <th>VALOR BRUTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <td>{{date('d/m/Y', strtotime($item->date_emissao))}}</td>
                                <td>{{$item->cnpj}}</td>
                                <td>{{$item->empresa}}</td>
                                <td>{{$item->tomador}}</td>
                                <td style="text-align: right;">{{number_format($item->valor_bruto, 2, ',', '.')}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum registro encontrado.</td>
                            </tr>
                            @endforelse
                            
                            <tr>
                                <th style="text-align: right;" colspan="5">TOTAL:
                                    {{number_format($data->sum('valor_bruto'), 2, ',', '.')}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>