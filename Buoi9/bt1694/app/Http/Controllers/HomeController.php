<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tptbac2($a,$b,$c){
        $dt = $b * $b - 4 * $a* $b;
        if ($dt > 0) {
            $x1 = (- $b + sqrt ( $dt )) / (2 * $a);
            $x2 = (- $b - sqrt ( $dt )) / (2 * $a);
            $kq = "X1= ".$x1." X2 = ".$x2;
        }elseif ($dt == 0) {
            $x = (- $b / (2 * $a));
            $kq = "PT co nghiem kep la: ".$x;
        }else{
            $kq = "PT vo nghiem";
        }
        return view('ptb2', compact('kq')) ;
    }
}
