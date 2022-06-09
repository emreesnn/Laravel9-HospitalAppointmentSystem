<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Policlinic;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    //
    public function index()
    {
        $page='home';
        $sliderdata = DB::table('images')->limit(4)->get();
        $productlist1 = Policlinic::limit(6)->get();
        $setting = Setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about',[
            'setting' => $setting,
        ]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',[
            'setting' => $setting,
        ]);
    }
    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Mesajınız başarıyla iletildi,Teşekkürler.');
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',[
            'setting' => $setting,
        ]);
    }
    public function policlinic($id)
    {
        $data = Policlinic::find($id);
        return view('home.policlinic',[
            'data'=>$data,
        ]);
    }
    public function categorypoliclinic($id)
    {
        $data = Policlinic::find($id);
        return view('home.policlinic',[
            'data'=>$data,
        ]);
    }
    public function bolumler()
    {
        $productlist1 = Policlinic::limit(6)->get();
        return view('home.bolumler',[
            'productlist1'=>$productlist1
        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id,$number)
    {
        //echo "Parameter 1 : ", $id;
        //echo "<br>Parameter 2 : ", $number;
        //echo "<br>Sum param : ", $id+$number;

        return view('home.test2',
            [
                'id'=>$id,
                'number'=>$number
            ]);
    }

    public function save()
    {
        //echo "Save Function<br>";
        //echo "Name : ",$_REQUEST["fname"];
        //echo "Last Name : ",$_REQUEST["lname"];

        return view('home.test3',
            [
                'fname'=>$_REQUEST["fname"],
                'lname'=>$_REQUEST["lname"]
            ]);

    }
}
