<?php

namespace App\Http\Controllers;
use App\models\car;
use App\Models\carMultiImages;
use App\models\multiImage;

use Illuminate\Http\Request;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("adminPages.car");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = car::all();
        $mulImg = carMultiImages::all();

        return view("adminPages.carList",compact('car','mulImg'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new car();
        $car->carName = $request->carName;
        $car->carPrice = $request->carPrice;
        $car->carModel = $request->carModel;
        
        $carImageFile = $request->file("carImage");

        $ext = time().".".$carImageFile->getClientOriginalName();

        $carImageFile->move("images",$ext);

        $car->carImage = $ext;
        $car->save();

        $multiImage  = $request->file("carMultiImageInput");

        foreach($multiImage as $mulimg)
        {
            $multiImageobj = new carMultiImages();

            $ext = time().".". $mulimg->getClientOriginalName();
            $mulimg->move("multiImages",$ext);

            $multiImageobj->multiImages = $ext;     

            $multiImageobj->carID = $car->id; 

            $multiImageobj->save();

        }
        return redirect()->back()->with("hamaraKey","car has been added");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
