<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TryController extends Controller
{
    public function try($id){
      
     echo "this is try function";
     return $id;
      
    }
    public function another (Request $req){
        
        
       }
}
