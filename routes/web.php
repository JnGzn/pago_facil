<?php
use App\Producto;
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
                        "poblacion" => 50,
                        "ciudades" => ["cali" , "medellin", "Barranquilla"]
                               ] ,
                  "Peru"=> [
                    "capital" => "Lima",
                    "moneda" => "Sol",
                    "poblacion" => 32,
                    "ciudades" => ["Cusco" , "Arequipa" ,"Chiclayo"]
                           ] ,
                  "Bolivia" => [
                    "capital" => "La Paz",
                    "moneda" => "Boliviano",
                    "poblacion" => 11,
                    "ciudades" => ["Cochabamba" , "Santacruz","Beni"]
                           ] ,
                ];
                
    /*echo "<pre>";
    var_dump($paises);
    echo "</prev>";*/


//Recorrer Arreglos
    // foreach($paises as $pais => $informacion){
    //     echo "<h1>$pais</h1>";
    //     foreach($informacion as $clave => $valor){
    //         echo "$clave ". $valor."<br/>";
    //     }
    //     echo "<hr/>";
    // }
    return view('paises')->with('paises', $paises);

} );

Route::get('prueba', function(){
    $p = new Producto();
    $p->nombre="";
    $p->valorUnitario=56;
    $p->save();

});

Route::get('nuevoproducto', function(){
    return view("productos.create");
});

Route::post('guardarproducto', function(){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    $p = new Producto();
    $p->nombre=$_POST["nomProducto"];
    $p->valorUnitario=$_POST["valorUnitario"];
    $p->save();

});