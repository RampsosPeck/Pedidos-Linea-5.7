@extends('layouts.app')

@section('title','Categoria')
@section('class-body','profile-page')

@section('styless')
<style>
    .row .col-md-3 {
        margin-bottom: 1em;
    }
    .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
    }
    .row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    .price {
            margin: 0;
        }
</style>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../images/city.jpg');"></div>
<div class="main main-raised">
        <div class="profile-content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            <div class="avatar">
                                <img src="{{ $category->urlcate }}" alt="Imagen representativa de la categoría {{ $category->name }}" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title">{{ $category->name }}</h3>
                                <h6>{{ $category->description }}</h6>
                            </div>
                            @if (session('notification'))
                                <div class="alert alert-success">
                                    {{ session('notification') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                       <img src="{{ $product->featuredimageurl }}" alt="" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a> <br />
                                    </h4>
                                    <p class="card-description"> {{ $category->description }} </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price price-old"> $ 1,430</span>
                                            <span class="price price-new"> $ {{ $product->price }}</span>
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
    </div>
@endsection
