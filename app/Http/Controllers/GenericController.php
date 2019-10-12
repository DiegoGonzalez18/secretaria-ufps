<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class GenericController extends Controller
{
    //
    public function index(){
       $cad= $this->slider();
       $a=count($cad);
       $s=$this->sliderI();
        return view('pagina/principal',compact("cad",'a','s'));
    }

    public function slider(){
        $a= Slider::get();
        
      return  $a->toArray();
     }
     public function sliderI(){
        $a= Slider::get();
        $a=$a->toArray();
        $b=array();
        for($i=0;$i<count($a);$i++){
               

array_push ( $b ,$a[$i]['url'] );
        }
      return  $b;
     }
}
