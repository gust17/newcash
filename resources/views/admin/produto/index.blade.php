@extends('admin.padrao')

@section('content')
    <a href="{{url('admin/produto/create')}}" class="btn btn-success">Adicionar Produto</a>
    <br>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome Produto</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($produtos as $produto)

                        <tr>
                            <td>{{$produto->name}}</td>
                            <td>R${{$produto->valor}}</td>
                            <td>
                                <button>Visualizar</button>
                                <a href="{{url('admin/produto/'.$produto->id.'/edit')}}">Editar</a>
                                <a href="{{url('admin/produto/addimg',$produto->id)}}">Add Img</a>
                            </td>
                        </tr>

                    @empty


                    @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
