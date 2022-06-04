<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login - NFT</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- font css -->

    <link rel="stylesheet" href="assets/cliente/default/assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="assets/cliente/default/assets/fonts/feather.css">
    <link rel="stylesheet" href="assets/cliente/default/assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/cliente/default/assets/css/style.css">
    <link rel="stylesheet" href="assets/cliente/default/assets/css/customizer.css">


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper auth-v3" style="background-image:url(assets/bg-login.jpg);background-size:cover;">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-stretch text-center">
                <div class="col-md-6"
                    style="display: flex !important; justify-content:center !important; align-items:center !important">

                    <div style="">
                        <div class=""
                            style="display: flex !important; justify-content:center !important; align-items:center !important">

                            <img src="assets/NFTCASH-BRANCO.png" alt="" class="img-fluid p-4 m-4">
                        </div>
                        <div class="text-center"
                            style="display: flex !important; justify-content:center !important; align-items:center !important">
                            <!-- <h4 class="mb-3 text-white f-w-600">welcome</h4> -->
                            <p class="text-white text-center mb-4">testex</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                    </div>
                                    <input type="text" name="email" value="{{ old('login') }}" class="form-control"
                                        placeholder="Digite seu email" required>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Digite sua senha" required>
                                </div>
                                <div class="form-group text-left my-2">
                                    <div class="float-right">
                                        <a href="{{ route('password.request') }}" class="text-primary"><span>Esqueceu
                                                sua senha</span></a>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />



                            <div class="text-right">
                                <button type="submit" name="submit" value="Fazer Login"
                                    class="btn btn-primary mt-2 btn-block">Login</button>
                                <a href="{{ route('register') }}"
                                    class="btn btn-light-primary mt-2 btn-block">Register</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/cliente/default/assets/js/vendor-all.min.js"></script>
<script src="assets/cliente/default/assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/cliente/default/assets/js/plugins/feather.min.js"></script>
<script src="assets/cliente/default/assets/js/pcoded.min.js"></script>


</body>

</html>
