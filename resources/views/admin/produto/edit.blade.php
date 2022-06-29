@extends('admin.padrao')
@section('content')
    <a class="btn btn-warning" href="{{url('admin/produtos')}}">Voltar</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('admin/produto/update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" value="{{$produto->name}}" name="name" class="form-control">
                        </div>
                        <input type="hidden" name="id" value="{{$produto->id}}">
                        <div class="form-group">
                            <label for="">Valor</label>
                            <input type="number" value="{{$produto->valor}}" name="valor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nivel</label>
                            <input type="number" value="{{$produto->nivel}}" name="nivel" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
