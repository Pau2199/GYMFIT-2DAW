<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Product;
use App\Image;

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
        $producto->idCategoria=DB::table('category')->select('id')->where('name', $request->category)->get()[0]->id;
        $producto->save();

        $file = $request->file('file');
        foreach ($file as $valor){
            $image = new Image;
            if($request->category == 'Ropa'){
                Storage::disk('public')->put($request->category.'/'.$request->subCategory.'/'.$valor->getClientOriginalName(),  \File::get($valor));
                $image->ruta = $request->category.'/'.$request->subCategory.'/'.$valor->getClientOriginalName();   
            }else{
                Storage::disk('public')->put($request->category.'/'.$valor->getClientOriginalName(),  \File::get($valor));
                $image->ruta = $request->category.'/'.$valor->getClientOriginalName();
            }
            $image->idProducto=DB::table('products')->select('id')->where('name', $request->name)->get()[0]->id;
            $image->save();   
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
    public function edit($id)
    {
        //
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
        //
    }

    public function peticionAjax($categoria){
        return $productos = DB::select('SELECT p.name, p.brand, p.description, p.price, p.discount, c.name FROM products p , category c WHERE c.name = "'.$categoria.'" AND c.id = p.idCategoria');

    }
}
