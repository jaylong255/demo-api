<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lcobucci\JWT\Exception;

class UserController extends Controller
{
    public function index(){
        return "word1234";
    }
    public function user(Request $request){
//        return $request->user();
        try {
//            return $request->user();
            return response()->json(['message' => "word"]);
        } catch (Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }

    }
}
