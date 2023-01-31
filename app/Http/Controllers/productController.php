<?php

namespace App\Http\Controllers;

use App\Models\multiImage;
use Illuminate\Http\Request;
use App\models\product;

class productController extends Controller
{
    function product()
    {
        return view('adminPages.adProduct');
    }

    function addProductFunction(Request $request)
    {
        $product = new product();
        $product->productName = $request->productNameInput;
        $product->price = $request->productPriceInput;
        $product->description = $request->productDescriptionInput;

        $imageFile = $request->file("productImageInput");

        $image = time().".".$imageFile->getClientOriginalName();

        $imageFile->move("images",$image);

        $product->image = $image;
        
        $product->save();
 
        
        $multiimages = $request->file("productMultiImageInput");
        foreach($multiimages as $sub)
        {
            $multiImg = new multiImage();

            $ext = time().".".$sub->getClientOriginalName();
            $sub->move("multiImages/",$ext);

            $multiImg->multiImages = $ext;     

            $multiImg->productID= $product->id;
            
            $multiImg->save();
        }


        return redirect()->back()->with("hamaraKey" , "Product datbase mein jachuka");
    }





    function productList()
    {
        $product = product::all();
        return view("adminPages.products",compact("product"));
    }











}
