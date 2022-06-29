@extends('cliente.padrao')

@section('content')
    <div class="pcoded-content">
        <div class="card">
            <div class="card-header">
                <h5>TODAS AS FATURAS</h5>
            </div>
            <div class="card-body table-border-style">


                <div class="table-responsive dt-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>PLANO</th>
                            <th>VALOR</th>
                            <th>DATA DE CRIAÇÃO</th>
                            <th>AÇÃO</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($faturas as $fatura)
                            <tr>
                                <td>{{ $fatura->id}}</td>
                                <td class="text-uppercase">{{ $fatura->produto->name}}</td>
                                <td>R${{ number_format($fatura->valor, 2, ',', '.')}}</td>
                                <td>{{ date('d/m/Y H:i:s', strtotime($fatura->created_at))}}</td>
                                <td>

                                    <a href="{{url('faturas/pagar',$fatura->id)}}" class="btn btn-success"><i
                                            data-feather="dollar-sign"></i> FAZER PAGAMENTO
                                    </a>
                                    <a href="{{url('faturas/deletar',$fatura->id)}}" class="btn btn-danger"><i
                                            data-feather="x-circle"></i> EXCLUIR
                                    </a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
