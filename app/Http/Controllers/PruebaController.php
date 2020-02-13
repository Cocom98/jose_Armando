<?php

namespace proyecto1\Http\Controllers;

use proyecto1\Http\Controllers\Controller;

class PruebaController extends Controller {

	public function prueba($param){
		return 'Estoy dentro de pruebaController y recibi este parametro'. $param;
	}

}