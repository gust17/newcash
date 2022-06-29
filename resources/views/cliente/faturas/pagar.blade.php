@extends('cliente.padrao')

@section('content')
    <div class="pcoded-content">
        <div class="card">
            <div class="card-header">
                <h5>fazer pagamento da minha fatura</h5>
            </div>
            <div class="card-body table-border-style">


                <a class="btn btn-primary m-t-5" data-toggle="collapse" href="#pix" role="button" aria-expanded="false"
                   aria-controls="">PIX</a>


                <a class="btn btn-primary m-t-5" data-toggle="collapse" href="#boleto" role="button"
                   aria-expanded="false" aria-controls="Boleto">BOLETO BANCÁRIO</a>

                <a class="btn btn-primary m-t-5" data-toggle="collapse" href="#bankOn" role="button"
                   aria-expanded="false" aria-controls="bankOn">BANKON</a>


                <!-- payment via boleto -->
                <div class="collapse" id="boleto">
                    <div class="card-body">
                        <form action="" method="post">
                            <h2>- Ativação via Boleto Bancário</h2>

                            Para pagar via boleto bancário basta clicar no botão abaixo e você será redirecionado a tela
                            de impressão do boleto.
                            Não é preciso o envio de comprovante do boleto bancário, pois a ativação acontece assim que
                            o nosso sistema recebe a compensação do banco.

                            O Prazo para compensação e ativação de sua fatura é de até 48h úteis.


                            <button type="submit" name="GerarBoletoAsaas" value="Gerar"
                                    class="btn btn-success btn-block"><i class="fa fa-print"></i> GERAR BOLETO BANCÁRIO
                            </button>

                        </form>
                    </div>
                </div>

                <!-- payment via bankOn -->
                <div class="collapse" id="bankOn">
                    <div class="card-body">
                        <form action="" method="post">
                            <h2>- Ativação via BankOn</h2>
                            Faça o pagamento da sua fatura via BankOn. Caso você não tenha uma conta BankOn, clique aqui
                            para criar uma.

                            Após realizar a transferência de sua conta BankOn para a nossa conta BankOn abaixo, informe
                            o código de transação gerada no site da BankOn para ativar sua fatura automaticamente em
                            nosso sitema.


                            <p>
                            <h2 class="text-center">BankOn: <span class="badge badge-info">@nftcashmoney</span></h2></p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                data-feather="check-circle"></i></span></div>
                                    <input type="text" name="codigo_bankon" class="form-control"
                                           placeholder="Código de transação BankOn"/>
                                </div>
                            </div>


                            <button type="submit" name="AtivarBankOn" value="Ativar" class="btn btn-success btn-block">
                                ATIVAR MINHA FATURA COM BANKON
                            </button>

                        </form>
                    </div>
                </div>

                <!-- payment via SimplePay -->


                <!-- payment via pix -->
                <div class="collapse" id="pix">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h2>- Ativação via Pix</h2>

                            Para realizar o pagamento via pix basta acessar o menu do seu banco e clicar para fazer a
                            transferência via Pix. Feito isso é só escanear o QR Code abaixo e pronto, ele já está com o
                            valor definido do seu plano e o destinatário, basta confirmar a transação! Facilidade na
                            palma de sua mão :)


                            <div align="center">

                                <h2>
                                    <strong>Chave Pix:</strong> nftcash.money@gmail.com

                                </h2>
                            </div>

                            <hr/>

                            <h3 class="text-center">Envie seu comprovante</h3>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                data-feather="file"></i></span></div>
                                    <input type="file" name="comprovante" class="form-control" required/>
                                </div>
                            </div>


                            <button type="submit" name="AtivarPix" value="Ativar" class="btn btn-success btn-block">
                                Enviar Comprovante
                            </button>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
