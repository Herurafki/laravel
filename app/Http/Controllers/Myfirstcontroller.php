<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Myfirstcontroller extends Controller
{
    public function helloword(){
        echo 'hello world from controller yeah';
    }

    public function showfirstview(){
        return view('myview');
    }

    public function viewwithdata(){
        $mydata = 10;
        $myarray = array('Toyota','Honda','Hunday','Wuling');

        return view('folderview.viewdata',['mydata' => $mydata, 'myarray' => $myarray]);
    }
}
