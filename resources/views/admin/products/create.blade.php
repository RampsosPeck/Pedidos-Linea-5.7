@extends('layouts.app')

@section('title','Crear Producto')
@section('class-body','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('') }}/assets/img/bg8.jpg');">
</div>

<div class="main main-raised">
    <div class="container">
        <h3 class="text-center">REGISTAR PRODUCTO <br> </h3>
			<div class="media media-post">
			      <div class="media-body">
						<form class="form" method="post" action="{{ url('/admin/products') }}" >
							{{ csrf_field() }}
			                <div class="row">
			                    <div class="col-md-6">
			                        <div class="form-group">
			                             <input name="name" type="text" class="form-control" placeholder="Nombre del producto"/>
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                             <input name="price" type="number" class="form-control" placeholder="Precio del producto"/>
			                        </div>
			                    </div>
			                </div>
			                <div class="row">
		                        <div class="form-group col-md-12">
		                             <input name="description" type="text" class="form-control" placeholder="Descripción corta"/>
		                        </div>
			                </div>
			                <textarea name="long_description" class="form-control" placeholder="Descripción extensa" rows="6"></textarea>
			                <button type="submit" class="btn btn-primary pull-right">
			                 	GUARDAR
			                 </button>
						</form>

			      </div><!-- end media-body -->

			</div>
    </div>
</div>
@endsection


