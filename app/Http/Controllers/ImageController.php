<?php

namespace Pedidoslinea\Http\Controllers;

use Illuminate\Http\Request;
use Pedidoslinea\Product;
use Pedidoslinea\ProductImage;
use File;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = Product::find($id);
        $images = $product->images; //Asi obtenemos las imagenes de una producto
        $images = $product->images()->orderBy('featured','DESC')->get();
        return view('admin.products.images.index', compact('product','images'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //Guardamos la imagen en nuestro proyecto
        $file = $request->file('photo');  //obtiene lo que se envia el campo con el nombre file
        $path = public_path() . '/images/products';  //es la ruta donde guardamos la imagen "public_path()"->es la rutahacia la carpeta public
        $fileName = uniqid() . $file->getClientOriginalName();//Definimos un nombre para el archivo "aqui es un ID unico concatenado con el nombre original del archivo que se sube"
        $moved = $file->move($path, $fileName);//Damos la orden al archivo para que se guarde con ese path y filename //$move=recibira true o false si la imagen guardo correctamente

        if($moved){ //si $move se guardo correctamente se guarda en la base de datos
            //crear un registro en la tabla product_images
            $productImage = new ProductImage();
            $productImage->image = $fileName;//->este nombre $fileName nos permitira mostar el archivo cuando se lo requieras
            //$productImage->featured = $fileName;-->false
            $productImage->product_id = $id;
            $productImage->save();//INSERT
        }
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //Primero eliminaremos el archo
        $productImage = ProductImage::find($request->image_id);
        if(substr($productImage->image, 0, 4)==="http"){ // = = =
            $deleted = true;
        }else{
            $fullPath = public_path() . '/images/products/'.$productImage->image;
            $deleted = File::delete($fullPath);//aqui eliminamos con delete
        }


        //Segundo eliminaremos el registro de la imagen en la base de datos
        if($deleted){ // $deleted devuelve true o false
            $productImage->delete();
        }
        return back();
    }

    public function select($id, $image)
    {
        ProductImage::where('product_id',$id)->update([
            'featured' => false
        ]);
        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back();
    }
}
