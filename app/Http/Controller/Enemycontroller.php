<?php
//Import Area

namespace App\Http\Controller;
use Illuminate\Http\Request;


class Enemycontroller extends Controller
{
    public function Nothing01(){
        $data=['name'=>'Nothing01','surname'=>'Loading'];
        return view('Nothing01',$data);
    }
}
?>