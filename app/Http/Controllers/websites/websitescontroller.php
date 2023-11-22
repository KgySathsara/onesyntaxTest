<?php

namespace App\Http\Controllers\websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\web_list;

class websitescontroller extends Controller
{
    public function index()
    {
        $web_list = web_list::all();

        return response()->json([
            'status'=> 200,
            'websites'=>$web_list
        ]);
    }
}
