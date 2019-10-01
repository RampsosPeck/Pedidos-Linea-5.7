@extends('layouts.app')

@section('title','AppShop')
@section('class-body','landing-page')

@section('content')
<div class="page-header header-filter" data-parallax="true"  style="background-image: url('assets/img/bg8.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Bienvenido a nuestra aplicacion en linea.</h1>
                <h4>Realiza pedidos en linea y te contactaremos para coordinar la entrega.</h4>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> ¿Cómo funciona?
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">

    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">¿Por qué App Shop?</h2>
                    <h5 class="description">Puedes revisar nuestra relación completa de productos, comparar precios y realizar tus pedidos cuando estés seguro.</h5>
                </div>
            </div>
            <div class="features">
                <div class="row">

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Atendemos tus dudas</h4>
                            <p>Atendemos arpidamente cualquier consulta que tengas via chat. No estás sólo, sino que siempre estamos atentos a tus inquietudes.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Pago seguro</h4>
                            <p>Todo pedido que realices será confirmado a travéz de una llamada. Si no confías en los pagos en línea puedes pagar contra entrega el valor acordado.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Información privada</h4>
                            <p>Los pedidos que realices sólo los conocerás tú a través de tu panel de usuario. Nadie más tiene acceso a esta información.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                   <div class="container">
                       <h2 class="section-title">Latest Offers</h2>
                       <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3">
                                <div class="card card-product card-plain">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            {{-- <img src="{{ $product->images()->first()->image }}" alt="" /> --}}
                                           <img src="{{ $product->featured_image_url }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="#pablo"> {{ $product->name }} </a> <br />
                                            <small class="text-muted">
                                                {{ $product->category->name }}
                                            </small>
                                        </h4>
                                        <p class="card-description"> {{ $product->description }} </p>
                                        <div class="footer">
                                            <div class="price-container">
                                                <span class="price price-old"> &euro;1,430</span>
                                                <span class="price price-new"> &euro;743</span>
                                            </div>
                                            <div class="stats">
                                                <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-simple btn-rose" data-original-title="Saved to Wishlist">
                                                   <i class="material-icons">favorite</i>
                                               </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       </div>
                   </div>
            </div>


        </div>

        <div class="section text-center">
            <h2 class="title">Here is our team</h2>

            <div class="team">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('') }}/assets/img/faces/card-profile1-square.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <h6 class="category text-muted">Founder</h6>

                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth...
                                    </p>

                                    <div class="footer">
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('') }}/assets/img/faces/card-profile6-square.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Kendall Andrew</h4>
                                    <h6 class="category text-muted">Graphic Designer</h6>

                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth...
                                    </p>

                                    <div class="footer">
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('') }}/assets/img/faces/card-profile4-square.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Gina Andrew</h4>
                                    <h6 class="category text-muted">Web Designer</h6>

                                    <p class="card-description">
                                        I love you like Kanye loves Kanye. Don't be scared of the truth.
                                    </p>

                                    <div class="footer">
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-youtube"><i class="fa fa-youtube-play"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('') }}/assets/img/faces/card-profile2-square.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">George West</h4>
                                    <h6 class="category text-muted">Backend Hacker</h6>

                                    <p class="card-description">
                                        I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
                                    </p>

                                    <div class="footer">
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="section section-contacts">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title"> ¿Aún no te has registrado? </h2>
                    <h4 class="text-center description">Registrate ingresando tus datos básicos, y podrás realizar tus pedidos a través de nuestro carrito de compras. Si aún no te decides, de todas formas, con tu cuenta de usuario podrás hacer todas tus consultas sin compromiso.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre completo</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo electrónico</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Tú mensaje</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised">
                                    ENVIAR CONSULTA
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection