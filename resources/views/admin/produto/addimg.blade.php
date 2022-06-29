@extends('admin.padrao')

@section('content')

    <a class="btn btn-warning" href="{{url('admin/produtos')}}">Voltar</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if(isset($produto->img))

                        <img class="img-fluid" src="{{url('storage/produtos',$produto->img)}}" alt="">
                    @endif

                    <form method="post" action="{{ url('api/file-upload/produto') }}"
                          enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Selecione o arquivo</label>
                                <input type="file" name="img" id="file"/>

                                <input type="hidden" name="produto_id" value="{{ $produto->id }}">
                            </div>


                        </div>

                        <div class="col-md-4">
                            <input type="submit" name="upload" value="Upload"
                                   class="btn btn-success"/>
                        </div>
                        <div class="col-md-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 0%">
                                    0%
                                </div>
                            </div>
                            <small id="file-help" class="form-text text-muted" tabindex="0">
                                <strong>Imagem da foto</strong> <br>
                                Tamanho máximo de cada anexo: 5MB.
                            </small>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(document).ready(function () {

            $('form').ajaxForm({
                beforeSend: function () {
                    $('#success').empty();
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    $('.progress-bar').text(percentComplete + '%');
                    $('.progress-bar').css('width', percentComplete + '%');
                },
                success: function (data) {
                    if (data.errors) {
                        $('.progress-bar').text('0%');
                        $('.progress-bar').css('width', '0%');
                        $('#success').html('<span class="text-danger"><b>' + data.errors +
                            '</b></span>');
                    }
                    if (data.success) {
                        $('.progress-bar').text('Uploaded');
                        $('.progress-bar').css('width', '100%');
                        $('#success').html('<span class="text-success"><b>' + data.success +
                            '</b></span><br /><br />');
                        $('#success').append(data.image);

                        location.reload();
                    }
                }
            });

        });
    </script>
@endsection
