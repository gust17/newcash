@extends('admin.padrao')
@section('content')
    <a class="btn btn-warning" href="{{url('admin/produtos')}}">Voltar</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('admin/produto')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Valor</label>
                            <input type="number" name="valor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nivel</label>
                            <input type="number" name="nivel" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
