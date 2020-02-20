<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Product;
use App\Image;
use App\Categorie;
use App\Stock;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Product;
        $producto->name = $request->name;
        $producto->brand = $request->brand;
        $producto->description = $request->description;
        $producto->price = $request->price;
        $producto->iva = 21;
        $producto->discount = $request->discount;
        if($request->category == 'Ropa'){
            $producto->idCategoria=DB::table('category')->select('id')->where('name_category', $request->subCategory)->get()[0]->id;
        }else{
            $producto->idCategoria=DB::table('category')->select('id')->where('name_category', $request->category)->get()[0]->id;

        }
        $producto->weight = $request->peso;
        $producto->save();

        $id = DB::table('products')->select('id')->where('name', $request->name)->get()[0]->id;
        $file = $request->file('file');
        //echo '<pre>';var_dump($file);echo '</pre>';

        foreach ($file as $valor){
            //echo '<pre>';var_dump($valor);echo '</pre>';
            //die;
            $image = new Image;
            $ultimoId = DB::select('SELECT MAX(id) FROM images');

            if($ultimoId[0]->{'MAX(id)'} == null){
                $ultimoId = 1;
            }else{
                $ultimoId = $ultimoId[0]->{'MAX(id)'};
                $ultimoId += 1;
            }

            $image->ruta = $ultimoId . '.'. $valor->getClientOriginalExtension();
            $image->idProducto=$id;
            $image->save();
            $path = $valor->storeAs('img', $image->ruta, 'public');

            $stock = new Stock;
            $stock->quantity = $request->stock;
            $stock->idProducto = $id;
            if($request->category == 'Ropa'){
                $stock->colour = $request->color;  
                $stock->size = $request->talla;  
            }
            $stock->save();
            return view('agregarProducto');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $columna, $datoNuevo)
    {
        $producto = Product::find($id);
        $producto->$columna = $datoNuevo;
        $producto->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
    }

    public function productosCategoria($categoria){
        //        $subCategoria;
        //        if($subCategoria != null){
        //            $subCategoria = Categorie::all()->where('name_category', '=', $categoria);
        //        }
        $datosCategoria = Categorie::all()->where('name_category', '=', $categoria);
        $productos = Product::all()->where('idCategoria', $datosCategoria[0]['id']);
        return array($productos, $datosCategoria[0]['name_category']);
    }

    public function productosSubCategoria($subCategoria){

    }

    public function vistaProductos($categoria){
        $datosCategoria = Categorie::all()->where('name_category', '=', $categoria);
        $productos = DB::select('SELECT p.id, p.name, p.brand, p.description, p.price, p.iva, p.discount, p.weight, s.quantity, s.colour, s.size FROM products p, stocks s WHERE p.idCategoria = "' . $datosCategoria[0]['id'] .'" AND p.id = s.idProducto');

        for($i = 0 ; $i<count($productos) ; $i++){
            $imagenes = DB::select('SELECT DISTINCT i.ruta FROM images i , products p WHERE i.idProducto = "'. $productos[$i]->id .'"');
            $productos[$i]->img = $imagenes;

        }
        //        echo '<pre>';var_dump($productos);echo '</pre>';
        return view('vistaCategoria')->with('productos', $productos);
    }

}
