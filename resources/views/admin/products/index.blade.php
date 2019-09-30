@extends('layouts.app')

@section('title','Registrarme')
@section('class-body','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('') }}/assets/img/bg8.jpg');">
</div>

<div class="main main-raised">
    <div class="container">
        <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round pull-right">Nuevo producto</a>
        <div class="section text-center">
            <h2 class="title">Listado de Productos</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="col-md-2">Nombre</th>
                            <th class="col-md-3">Descripción</th>
                            <th class="col-md-3">Categoría</th>
                            <th class="text-right ">Precio</th>
                            <th class="text-right">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center">{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description}}</td>
                                <td>{{ $product->category ? $product->category->name : 'General' }}</td>
                                <td class="text-right">Bs. {{ $product->price }}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-info">
                                        <i class="material-icons">person</i>
                                    </button>
                                    <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    <button  type="submit" rel="tooltip" class="btn btn-danger">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        {{--  <tr>
                            <td class="text-center">3</td>
                            <td>Alex Mike</td>
                            <td>Design</td>
                            <td>2010</td>
                            <td class="text-right">&euro; 92,144</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                    <i class="material-icons">person</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>   --}}
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>

    </div>
</div>
@endsection
