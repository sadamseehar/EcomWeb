<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\models\car;
use App\Models\carMultiImages;

class testController extends Controller
{
    function home()
    {
        return view('adminPages.home');
    }
    function welcome()
    {
        return view('adminPages.welcome');
    }
    function addUserFunc(Request $request)
    {
        $st = new student();
        $st->studentName = $request->studentNameInput;
        $st->studentEmail = $request->studentEmailInput;
        $st->age = $request->ageInput;
        $st->save();


        // return redirect()->back()->with("message","user added");
         $st = student::all();

        return view('adminPages.fetchUser',compact('st'));
    }


    function userFetchFunc()
    {
        $st = student::all();

        return view('adminPages.fetchUser',compact('st'));
    }
    function delete($id)
    {
        $st = student::find($id);
        $st->delete();
        return redirect()->back()->with("msg","user deleted successfully");
    }

function userData()
{
$st = student::all();
    return view('adminPages.fetchData',compact('st'));
}


function edit($id)
{

    $st = student::find($id);
    return view('adminPages.update');

}


function update(Request $request)
{

$st =new student();
$st->studentName = $request->studentNameInput;
$st->studentEmail = $request->studentEmailInput;
$st->age = $request->ageInput;
$st->update();

return redirect()->back();


    
}



function searchFunc(Request $request)
{
$search = $request->searchInput;
$car = car::where('carName','LIKE', '%'.$search.'%')->orwhere('carPrice','LIKE', '%'.$search.'%')->orwhere('carModel','LIKE', '%'.$search.'%')->get();
return view("adminPages.carList",compact('car'));


}


function morePics($id)
{
    $car = car::find($id);


    $more = carMultiImages::where('carID',$id)->get();
    return view('adminPages.morePics',compact('more','car'));
}

function index()
{
    $car = car::all();
    return view('main.home',compact('car'));
}


}
