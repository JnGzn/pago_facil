<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Ruta <Arreglos Multidimensionales>

Route::get('arreglosm', function(){
    $paises =  [ "Colombia" => [
                        "capital" => "Bogotá",
                        "moneda" => "Peso",
                        "poblacion" => 50
                               ] ,
                  "Peru"=> [
                    "capital" => "Lima",
                    "moneda" => "Sol",
                    "poblacion" => 32
                           ] ,
                  "Bolivia" => [
                    "capital" => "La Paz",
                    "moneda" => "Boliviano",
                    "poblacion" => 11
                           ] ,
                ];
                
    /*echo "<pre>";
    var_dump($paises);
    echo "</prev>";*/


//Recorrer Arreglos
    foreach($paises as $pais => $informacion){
        echo "<h1>$pais</h1>";
        foreach($informacion as $clave => $valor){
            echo "$clave ". $valor."<br/>";
        }
        echo "<hr/>";
    }

} );


