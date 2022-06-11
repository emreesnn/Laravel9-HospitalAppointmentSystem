<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Policlinic;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq',[
            'setting' => $setting,
            'datalist' => $datalist
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
    public function storecomment(Request $request)
    {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id(); //Logged in user id
        $data->policlinic_id = $request->input('policlinic_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('policlinic',['id'=>$request->input('policlinic_id')])->with('info','Yorumunuz başarıyla iletildi,Teşekkürler.');
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
        $reviews = Comment::where('policlinic_id',$id)->where('status','True')->get();
        return view('home.policlinic',[
            'data'=>$data,
            'reviews'=>$reviews,
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
