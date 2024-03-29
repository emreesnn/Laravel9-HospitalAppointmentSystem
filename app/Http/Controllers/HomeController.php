<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Policlinic;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Setting;
use App\Models\User;
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
        $units = Category::where('parent_id','=',16)->get();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1,
            'units'=>$units
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
    public function appointment()
    {
        $setting = Setting::first();
        $clinics = Policlinic::where('status','True')->get();
        $data= RoleUser::where('role_id','=','3')->get('user_id');
        $doctors= User::find($data);
        return view('home.appointment',[
            'setting'=>$setting,
            'clinics' => $clinics,
            'data' => $data,
            'doctors' => $doctors
        ]);
    }
    public function storeappointment(Request $request)
    {
        //dd($request);
        $data = new Appointment();
        $data->user_id = Auth::id(); //Logged in user id
        $data->policlinic_id = $request->input('policlinic');
        $data->doctor_id = $request->input('doctor');
        $data->date =  $request->input('date');
        $data->time = $request->input('time');
        $data->price = '100';
        $data->payment = 'Yes';
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('appointment')->with('success','Randevunuz başarıyla oluşturuldu,Teşekkürler.');
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
        $setting = Setting::first();
        $data = Policlinic::find($id);
        $reviews = Comment::where('policlinic_id',$id)->where('status','True')->get();
        return view('home.policlinic',[
            'data'=>$data,
            'setting'=>$setting,
            'reviews'=>$reviews,
        ]);
    }
    public function categorypoliclinic($id)
    {
        $setting = Setting::first();
        $data = Policlinic::find($id);
        return view('home.policlinic',[
            'data'=>$data,
            'setting'=>$setting,
        ]);
    }
    public function bolumler()
    {
        $setting = Setting::first();
        $productlist1 = Policlinic::limit(6)->get();
        return view('home.bolumler',[
            'productlist1'=>$productlist1,
            'setting'=>$setting,
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
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function loginuser()
    {
        $setting = Setting::first();
        return view('home.login',[
            'setting'=>$setting,
        ]);
    }
    public function registeruser()
    {
        $setting = Setting::first();
        return view('home.register',[
            'setting'=>$setting,
        ]);
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
