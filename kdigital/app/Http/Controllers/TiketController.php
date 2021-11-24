<?php

namespace App\Http\Controllers;


use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function index()
    {
        $data_tiket = DB::table('tiket')->limit(5)->get();;
        return response()->json([
            "success" => true,
            "message" => "List Tiket",
            "result" =>  $data_tiket
            ]);
    }

    public function store(Request $request)
    {
        $tiket = new Tiket();

        $tiket->subject = $request->subject;
        $tiket->message = $request->message;
        $tiket->status = $request->status;
        $tiket->priority = $request->priority;

        if($tiket->save()){
            return response()->json([
                "success" => true,
                "message" => "Tiket berhasil ditambahkan.",
                ]);
      }else{
             return response()->json([
                "success" => true,
                "message" => "Tiket gagal ditambahkan.",
                ]);
      }

    }
    public function buka(Request $request, $number)
    {
        $tiket=Tiket::where('number',$number)->first();
        $tiket->message=$request->message;
        $tiket->status='answered';
        if($tiket->save()){
            return response()->json([
            "success" => true,
            "message" => "Tiket berhasil Dibuka."
            ]);
       }
    }


    public function tutup($number)
    {
        $tiket=Tiket::where('number',$number)->first();
        $tiket->status='closed';
        if($tiket->save()){
            return response()->json([
            "success" => true,
            "message" => "Tiket berhasil Ditutup.",
            ]);
       }
    }
    public function destroy($id)
    {
        $tiket = Tiket::find($id);
        $tiket->delete();

            return response()->json([
            "success" => true,
            "message" => "Tiket berhasil Dihapus."
            ]);

    }
}
