<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Policlinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminPoliclinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $data= Policlinic::all();
        return view('admin.policlinic.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Category::all();
        return view('admin.policlinic.create',[
            'data'=>$data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= new Policlinic();
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if($request->file('image'))
        {
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/policlinic');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Policlinic $policlinic
     * @return \Illuminate\Http\Response
     */
    public function show(Policlinic $policlinic,$id)
    {
        //
        $data= Policlinic::find($id);
        return view('admin.policlinic.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Policlinic $policlinic
     * @return \Illuminate\Http\Response
     */
    public function edit(Policlinic $policlinic,$id)
    {
        //
        $data= Policlinic::find($id);
        $datalist= Category::all();
        return view('admin.policlinic.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\policlinic  $policlinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policlinic $policlinic,$id)
    {
        //
        $data= Policlinic::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if($request->file('image'))
        {
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/policlinic');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Policlinic $policlinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policlinic $policlinic,$id)
    {
        //
        $data= Policlinic::find($id);
        if($data->image && Storage::disk('public')->exists($data->image))
            {
                Storage::delete($data->image);
            }
        $data->delete();
        return redirect('admin/policlinic');
    }
}
