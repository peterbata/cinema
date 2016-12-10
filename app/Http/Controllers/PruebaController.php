<?php namespace Cinema\Http\Controllers;


class PruebaController extends Controller{
/**
  *    @return Response
**/
    public function index(){
      return "Hola desde el controlador de prueba";
    }
    public function nombre($nombre){
      return "Hola  mi nombre es : " . $nombre;
    }
}
