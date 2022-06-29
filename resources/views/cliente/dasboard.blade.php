@extends('cliente.padrao')



@section('content')

    <div style="display: flex; justify-content: center; align-items: center; margin: 50px 0;">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                @forelse($planos as $plano)
                    <div class="swiper-slide bgColor-nft">
                        <div class="picture bgColor-nft">
                            <img src="{{url('storage/produtos',$plano->img)}}" alt="">
                        </div>
                        <div class="detail font-decorative">
                            <h2 class="font-decorative text-capitalize text-color-nft">{{strtoupper($plano->name)}}</h2>
                            <h4 class="p-2 text-white">R$ {{number_format($plano->valor, 2, ',', '.')}}
                                <br> <small>
                                  50
                                    % / 20 dias</small></h4>
                            <h5 class="text-white pb-3"><small>
                              ATÉ O  {{$plano->nivel}}« NÍVEL
                                </small></h5>
                            <form action="{{url('gerarcompra')}}" method="post">
                                @csrf
                                <button type="submit" name="submit" value="submit"
                                        class="btn btn-light btn-lg btn-block text-lowercase mb-4">Comprar agora
                                </button>
                                <input type="hidden" name="produto_id" value="{{$plano->id}}">
                                <input type="hidden" name=""/>
                            </form>
                        </div>
                    </div>

                @empty

                @endforelse

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-button-next"></div> -->

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

@endsection
