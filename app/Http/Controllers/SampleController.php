<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SampleController extends Controller {
    public function index( Request $request ) {
        
        $sampleValue = "sample テキストです。";


        $records = DB::connection('mysql')->select("select * from users");
        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'docomo.ne.jp','佐藤','0000')");
        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'softbank.ne.jp','山本','1111')");
        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'au.ne.jp','立川','2222')");
        // dd($insertResult);

        // 削除
        $deleteResult = DB::connection("mysql")->delete("delete from users where name = '山本'");
        dd($deleteResult);

        return view("top/relax" , ["sampleValue" => $sampleValue ]);
    }
}