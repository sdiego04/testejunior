<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//controller para admnistrar a classe Address
class Address extends Controller
{
    //metodo que realiza uma pesquisa via webservice e retorna um xml com os dados de acordo com o cep do informado
    public function get_address(Request $request){

        $cep = preg_replace("/[^0-9]/", "", $request->cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";
        $xml = simplexml_load_file($url);
        return view('/viewsCep/home',compact('xml'));
    }


}
