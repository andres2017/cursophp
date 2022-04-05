<?php

	require_once("Operacion.php"); 

	class Calcular implements Operacion{

		public function raiCuadrada(float $numero):float
		{
			$total = sqrt($numero); // raiz cuadrada sqrt
			return $total;
		}


		public function potencia(int $numero, int $potencia):int
		{
			$total = pow($numero); //pow potencia de un numero 
			return $total;
		}
		
	}

 ?>