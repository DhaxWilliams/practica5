<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalculosController extends Controller
{
    function calcularFactorial(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1|max:20',
        ]);
        $n = intval($request->n);
        $prod = 1;
        for ($i = 1; $i <= $n; $i++)
            $prod = $prod* $i;
        return view('vistaFactorial', compact('n', 'prod'));
    }
    function calcularFibonacci(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1|max:30',
        ]);
        $n = intval($request->n);
        $a=0;
        $b=1;
        $c=0;
        $serie =' '.$a.' '.$b.' ';
        for ($i = 1; $i <= $n-2; $i++)
        {
            $c=$a+$b;
            $serie=$serie.$c.' ';
            $a=$b;
            $b=$c;
        }
        return view('vistaFibonacci', compact('n', 'serie'));
    }

    function calcularPalabras(Request $request)
    {
        $request->validate(['texto' => 'required',]);
        $texto=$request->texto;
        $numPalabras=str_word_count($texto);
        
        return view('vistaPalabras', compact('texto', 'numPalabras'));
    }

    function calcularVocales(Request $request)
    {
        $request->validate(['texto' => 'required']);
        $texto=$request->texto;
        $vocal= substr_count(strtolower($texto), 'a')+
                substr_count(strtolower($texto), 'e')+
                substr_count(strtolower($texto), 'i')+
                substr_count(strtolower($texto), 'o')+
                substr_count(strtolower($texto), 'u');
        return view('vistaVocales', compact('texto', 'vocal'));
    }

    function calcularPerfectos(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1',
        ]);
        $n = intval($request->n);
        $suma = 0;
        $texto=' ';
        for ($i = 1; $i <$n; $i++)
        {
            if($n % $i==0)
            $suma=$suma + $i;
        }
        if($suma==$n)
            $texto="Es perfecto";
        else
            $texto="No es perfecto";

        return view('vistaNumPerfecto', compact('n', 'texto'));
    }
}
