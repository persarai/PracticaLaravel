<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){
        //return "Bienvenido usuario controlador";
        return view('index');
    }
    public function create(){
        //return "Hola esta es una página de crear usuarios controlador";
        return view('create');
    }
    public function show($idusuario, $nombreusuario = null){
        /*if($nombre){
            return "Tu número de Id es: ".$idusuario." usuario ".$nombre. " controlador";
        }
        else{
            return "Tu id es ".$idusuario." controlador";
        }*/
        return view('show',['IDusuario'=>$idusuario,'nombreusuario'=>$nombreusuario]);
    }
}
