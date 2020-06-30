function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//paginador del catalogo de peliculars
function mov_Pagina(nropagina)
{
	//donde se mostrará los registros
	divContenido = document.getElementById('contenido');
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizará el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open("GET", "moviesBlock_catalog.php?pag="+nropagina);
	divContenido.innerHTML= '<img src="img/effects/anim.gif">';
	ajax.onreadystatechange=function() 
	{
		if (ajax.readyState==4) 
		{
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos 
	//el valor por la url ?pag=nropagina
	ajax.send(null)
}

//paginador del catalogo de documentales
function doc_pagina(nropagina)
{
	//donde se mostrará los registros
	divContenido = document.getElementById('contenido');
	
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizará el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open("GET", "documentaryBlock_catalog.php?pag="+nropagina);
	divContenido.innerHTML= '<img src="img/effects/anim.gif">';
	ajax.onreadystatechange=function() 
	{
		if (ajax.readyState==4) 
		{
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos 
	//el valor por la url ?pag=nropagina
	ajax.send(null)
}

//paginador del catalogo de series
function ser_pagina(nropagina)
{
	//donde se mostrará los registros
	divContenido = document.getElementById('contenido');
	
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizará el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open("GET", "seriesBlock_catalog.php?pag="+nropagina);
	divContenido.innerHTML= '<img src="img/effects/anim.gif">';
	ajax.onreadystatechange=function() 
	{
		if (ajax.readyState==4) 
		{
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos 
	//el valor por la url ?pag=nropagina
	ajax.send(null)
}

//paginador del catalogo de videos
function vid_pagina(nropagina)
{
	//donde se mostrará los registros
	divContenido = document.getElementById('contenido');
	
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizará el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open("GET", "videosBlock_catalog.php?pag="+nropagina);
	divContenido.innerHTML= '<img src="img/effects/anim.gif">';
	ajax.onreadystatechange=function() 
	{
		if (ajax.readyState==4) 
		{
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos 
	//el valor por la url ?pag=nropagina
	ajax.send(null)
}