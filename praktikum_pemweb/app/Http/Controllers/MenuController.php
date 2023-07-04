<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        
        
        $menus = DB::table('menus')
            ->select('*')
            ->where('temperature', 'Hot')
            ->where('size', 'small')
            ->get();
        return view('table',[
            'menus' => $menus
        ]);
    }

}
