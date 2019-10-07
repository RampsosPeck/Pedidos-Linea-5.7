<?php

namespace Pedidoslinea\Http\Controllers\Admin;

use Pedidoslinea\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pedidoslinea\Product;

class ProductController extends Controller
{
	//Permitira ver el listado de productos
    public function index(){
    	$products = Product::orderBy('id','DESC')->paginate(5);
    	return view('admin.products.index',compact('products'));
    }

    //permitira ver el formulario de registro de productos
    public function create(){
    	return view('admin.products.create');

    }

    //registrar el producto
    public function store(Request $request){
    	//dd($request->all());
    	$product = new Product();
    	$product->name = $request['name'];
    	$product->description = $request['description'];
    	$product->price = $request['price'];
    	$product->long_description = $request['long_description'];
    	$product->save();

    	return redirect('/admin/products');

    }
    //permitira ver el formulario para editar el productos
    public function edit($id){
    	$product = Product::find($id);
    	return view('admin.products.edit',compact('product'));

    }

    //registrar el producto
    public function update(Request $request, $id){
    	//dd($request->all());
    	$product = Product::find($id);
    	$product->name = $request['name'];
    	$product->description = $request['description'];
    	$product->price = $request['price'];
    	$product->long_description = $request['long_description'];
    	$product->save();

    	return redirect('/admin/products');

    }

     public function destroy($id){
    	//dd($request->all());
    	$product = Product::find($id);
    	$product->delete();

    	return back();

    }
}
