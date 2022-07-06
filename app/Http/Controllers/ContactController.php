<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //post halaman contact
    public function store(Request $request)
    {
     
        // $validator = Validator::make($request->all(),
        //     [
        //         'nama' => 'required',
        //         'email' => 'required',
        //         'Message' => 'required',

        //     ]
        // );

        // if($validator -> fails()) {
        //     return Response() -> json($validator->errors());
        // }

        $store = Contact::create([
            'nama' =>$request->nama,
            'email' => $request->email,
            'Message' => $request->Message,
        ]);

        $data = Contact::where('nama', '=', $request->nama)-> get();
        if($store){
            return Response() -> json([
                'status' => 1,
                'message' => 'Succes create new data!',
                'data' => $data
            ]);
        } else 
        {
            return Response() -> json([
                'status' => 0,
                'message' => 'Failed create data!'
            ]);
            // return back()
        }
    }

     //put halaman contact
     public function update($id, Request $request)
     {
         $validator = Validator::make($request->all(),
             [
                 'nama' => 'required',
                 'email' => 'required',
                 'Message' => 'required',
 
             ]
         );
 
         if($validator -> fails()) {
             return Response() -> json($validator->errors());
         }
 
         $update= DB::table('contact')->where('id_contact', '=', $id)->update([
             'nama' =>$request->nama,
             'email' => $request->email,
             'Message' => $request->Message,
         ]);
 
         $data = Contact::where('id_contact', '=', $id)-> get();
         if($update){
             return Response() -> json([
                 'status' => 1,
                 'message' => 'Succes Update data!',
                 'data' => $data
             ]);
         } else 
         {
             return Response() -> json([
                 'status' => 0,
                 'message' => 'Failed update data!'
             ]);
         }
     }

     public function delete($id){
        $delete=DB::table('contact')
        ->where('', '=', $id)
        ->delete();

        if($delete){
            return Response() -> json([
                'status' => 1,
                'message' => 'Succes delete data!'
        ]);
        } else {
            return Response() -> json([
                'status' => 0,
                'message' => 'Failed delete data!'
        ]);
        }

    }
}
