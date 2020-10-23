<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;


class CalcsController extends Controller
{
    public function show($num1,$operator,$num2){
    switch ( $operator ){
    case 'addition':
    $answer=$num1 + $num2;
    break;
        
    case 'subtraction': 
    $answer=$num1 - $num2;
    break;
        
    case 'multiplication':
    $answer=$num1 * $num2;
    break;
                
    case 'division':  
    $answer=$num1 / $num2;
    break;

    default:
    echo 'blank';
    break;
    }
        return view ('Calcs.show',['answer' =>$answer]);
}    


}