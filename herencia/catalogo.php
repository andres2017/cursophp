<?php 
	require_once ("ClassMesa.php");


	$objCama = new Producto("Cama",10500);
	$arrInfoProducto = $objCama->getInfoProducto();

	print_r('<pre>');
	print_r($arrInfoProducto);
	print_r('</pre>');


	$objMueble = new Mueble("Closet",20000,"Casita","Café","Madera");
	$arrInfoMueble = $objMueble->getInfoProducto();

	print_r('<pre>');
	print_r($arrInfoMueble);
	print_r('</pre>');


	$objMesa = new Mesa("Mesa de noche",800,"Nochesita","Negro","Melamina","3mt.");
	$objMesa->setForma("Redonda");
	$arrInfoMesa = $objMesa->getInfoProducto();

	print_r('<pre>');
	print_r($arrInfoMesa);
	print_r('</pre>');

	$objSilla = new Silla("Silla Electrica",800,"Nochesita","Negro","Melamina","3mt.");
	$objSilla->setForma("Redonda");
	$arrInfoSilla = $objSilla->getInfoProducto();

	print_r('<pre>');
	print_r($arrInfoSilla);
	print_r('</pre>');


	
 ?>

<?
phpinfo(); //con este ejemplo de refinicion definimos el polimorfismo que es la capacidad que tiene una clase en responder hacia un mismo mensaje, nos devuelve informacion de forma diferente agregando mas propiedades a un objeto
?>


