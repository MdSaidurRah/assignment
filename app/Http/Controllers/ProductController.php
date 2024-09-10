<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductInterface;
use App\Models\Pd;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{



    private ProductInterface $productRepository;
    
    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }




    public function products()
    {

        $Pd = new Pd();
        $Products = new Products();

        return $this->productRepository->list($Pd);



        // $product = Products::all();

        // return view('products')
        //     ->with('product',$product);


    }

    public function addProduct()
    {
        return view('add-product');
    }

    public function storeProduct(Request  $request)
    {
        $productData = array(
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity
        );

        $productEntry = DB::table('products')->insert($productData);
        return Redirect::route('productlist');
    }

    public function showProduct($id)
    {

        $product  = DB::table('products')->select('*')->where('id',$id)->get();

        return view('show-product')
            ->with('product',$product);
    }
    public function editProduct($id)
    {
        $product  = DB::table('products')->select('*')->where('id',$id)->get();
        return view('edit-product')
            ->with('product',$product);
    }

    public function updateProduct(Request  $request)
    {

        $productData = array(
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity
        );

        // Updates
        DB::table('products')
            ->where('id', $request->id)
            ->update($productData);

        return Redirect::route('productlist');

    }
    public function deleteProduct($id)
    {

        DB::table('products')
            ->where('id', $id)
            ->delete();

        return Redirect::route('productlist');
    }

}
