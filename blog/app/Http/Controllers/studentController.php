<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function Laravel\Prompts\table;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
   public function show()
    {
          $data=DB::table('student')->get();
          return view('welcome',compact('data'));
    }
    public function insert()
    {
           return view('insert');
    }
    public function delete($id)
    {
        DB::table('student')->where('id',$id)->delete();
        return redirect()->back()->with('sm','Data Delete successfully');
    }



    public function update($id)
    {   $data=DB::table('student')->get()->where('id',$id);

            return view('update',compact('data'));
    }




    function success(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

       $data=array(
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
       );
       DB::table('student')->insert($data);
       return redirect()->back()->with('sms','Data insert successfully');
    }
    function updatedata(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        );
        DB::table('student')->where('id',$id)->update($data);
         return redirect()->back()->with('sms','Data insert successfully');
       // return redirect()->route('show.data');
    }
}
