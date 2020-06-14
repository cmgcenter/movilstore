<?php 
	
	//definimos las rutas autorizadas, si la ruta no esta en este array
	//no se tendra acceso al controlador ni al modelo y la vista dara el error 404
	CONST ROUTES = array(
		'propety' => 'propety',
		'about' => 'about',
		'home' => 'home',
		'users' => 'users',
		'search' => 'search',
		'errno' => 'errno'/*no olviden agregar la ruta, cada vez que agreguen un nuevo controller*/
	);


?>