<?php

namespace App\Http\Controllers\Web;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImagesProduct;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.master.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // Menyimpan Product

            $product = Product::create([
                "product" => $request->product,
                "price" => $request->price,
                "stock" => $request->stock,
                "description" => $request->description
            ]);
            $arrayImage = [];
            // Menyimpan Image
            if($request->hasFile('images')){
                foreach ($request->images as $value) {
                    $path = $value->store('product');

                    $columnImage = [
                        "product_id" => $product->id,
                        "image" => $path,
                    ];

                    array_push($arrayImage,$columnImage);
                }

                ImagesProduct::insert($arrayImage);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with(['imageRelation'])->find($id);


        return view('admin.master.product.detail',compact('product'));
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
}
