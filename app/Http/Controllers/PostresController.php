<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostresController extends Controller
{

    public function index() {

	    	// Defino el servidor local y el puerto 
	    	$host = 'localhost';
			$puerto = '27017';

			// Realizamos la conexión a la Base de Datos MongoDB 
			$conexion = new \MongoDB\Driver\Manager("mongodb://$host:$puerto"); 

			// En estas 2 variables puedo filtrar y colocar opciones, pero por 
			// el momento no deseo aplicar alguna, asi que las dejare con el valor array()
			// a ambas variables 
			$filtrar = array();
			$options = array();

			// Pasamos las 2 variables anteriores en la variable '$query' 
			$query = new \MongoDB\Driver\Query($filtrar, $options);

			// Definimos la cosntante definida RP_PRIMARY que es la predeterminada
			// Puedes leer más en php.net/manual/es/class.mongodb-driver-readpreference.php
			$leerPreferencia = new \MongoDB\Driver\ReadPreference(\MongoDB\Driver\ReadPreference::RP_PRIMARY);		
			
			// Seleccionamos la base de datos 'mibasededatos' y la colección 'postres'
			$datos = $conexion->executeQuery("mibasededatos.postres", $query, $leerPreferencia);			

	    	// Enviamos la variable '$datos' a la vista 'postres.blade.php' 
	    	return view('postres', compact('datos')); 

	    }

}
