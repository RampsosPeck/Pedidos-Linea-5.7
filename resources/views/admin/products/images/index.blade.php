@extends('layouts.app')

@section('title','Imagenes-Productos')
@section('class-body','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('') }}/assets/img/bg8.jpg');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Imagenes del producto "{{ $product->name }}"</h2>
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                        <span class="fileinput-new">Seleccionar</span>
                        <span class="fileinput-exists">Cambiar</span>
                        <input type="file" name="photo" required/>
                    </span>
                    <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
                </div>
                <div>
                    <button type="submit" class="btn btn-raised btn-round btn-primary btn-file">
                       ENVIAR
                    </button>

                    <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round ">Volver al listado de productos</a>
                </div>
            </form>
            <div class="row">
            @foreach($images as $image)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ $image->url }}" alt="" width="250">
                        <form method="post" action="">
                            {{  csrf_field() }}
                            {{  method_field('DELETE') }}
                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                            <button type="submit" class="btn btn-warning btn-round">Eliminar imagen</button>
                            @if ($image->featured)
                                <button type="button" class="btn btn-danger btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada actualmente" ><i class="material-icons">favorite</i></button>
                            @else
                                <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round"><i class="material-icons">favorite</i></a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
