// Escuchando el evento para que cargue todo el DOM
window.addEventListener("DOMContentLoaded", cargarScripts);

// La función que carga los scripts de funciones importantes.
function cargarScripts()
{
	// Cargando el glider.js
	"document"in self&&("classList"in document.createElement("_")&&(!document.createElementNS||"classList"in document.createElementNS("http://www.w3.org/2000/svg","g"))||!function(b){if("Element"in b){b=b.Element.prototype;var d=Object,g=String.prototype.trim||function(){return this.replace(/^\s+|\s+$/g,"")},a=Array.prototype.indexOf||function(l){for(var f=0,a=this.length;a>f;f++)if(f in this&&this[f]===l)return f;return-1},c=function(a,f){this.name=a;this.code=DOMException[a];this.message=f},h=function(l,	f){if(""===f)throw new c("SYNTAX_ERR","The token must not be empty.");if(/\s/.test(f))throw new c("INVALID_CHARACTER_ERR","The token must not contain space characters.");return a.call(l,f)},k=function(a){var f=g.call(a.getAttribute("class")||"");f=f?f.split(/\s+/):[];for(var b=0,h=f.length;h>b;b++)this.push(f[b]);this._updateClassName=function(){a.setAttribute("class",this.toString())}},e=k.prototype=[],m=function(){return new k(this)};if(c.prototype=Error.prototype,e.item=function(a){return this[a]||	null},e.contains=function(a){return~h(this,a+"")},e.add=function(){var a=arguments,f=0,b=a.length,c=!1;do{var e=a[f]+"";~h(this,e)||(this.push(e),c=!0)}while(++f<b);c&&this._updateClassName()},e.remove=function(){var a,b=arguments,c=0,e=b.length,k=!1;do{var d=b[c]+"";for(a=h(this,d);~a;)this.splice(a,1),k=!0,a=h(this,d)}while(++c<e);k&&this._updateClassName()},e.toggle=function(a,b){var h=this.contains(a),c=h?!0!==b&&"remove":!1!==b&&"add";return c&&this[c](a),!0===b||!1===b?b:!h},e.replace=function(a,	b){var c=h(a+"");~c&&(this.splice(c,1,b),this._updateClassName())},e.toString=function(){return this.join(" ")},d.defineProperty){e={get:m,enumerable:!0,configurable:!0};try{d.defineProperty(b,"classList",e)}catch(l){void 0!==l.number&&-2146823252!==l.number||(e.enumerable=!1,d.defineProperty(b,"classList",e))}}else d.prototype.__defineGetter__&&b.__defineGetter__("classList",m)}}(self),function(){var b=document.createElement("_");if(b.classList.add("c1","c2"),!b.classList.contains("c2")){var d=function(a){var b=	DOMTokenList.prototype[a];DOMTokenList.prototype[a]=function(a){var c,h=arguments.length;for(c=0;h>c;c++)a=arguments[c],b.call(this,a)}};d("add");d("remove")}if(b.classList.toggle("c3",!1),b.classList.contains("c3")){var g=DOMTokenList.prototype.toggle;DOMTokenList.prototype.toggle=function(a,b){return 1 in arguments&&!this.contains(a)==!b?b:g.call(this,a)}}"replace"in document.createElement("_").classList||(DOMTokenList.prototype.replace=function(a,b){var c=this.toString().split(" "),d=c.indexOf(a+	"");~d&&(c=c.slice(d),this.remove.apply(this,c),this.add(b),this.add.apply(this,c.slice(1)))});b=null}());	(function(){if("undefined"!==typeof window)try{var b=new window.CustomEvent("test",{cancelable:!0});b.preventDefault();if(!0!==b.defaultPrevented)throw Error("Could not prevent default");}catch(d){b=function(b,a){a=a||{bubbles:!1,cancelable:!1,detail:void 0};var c=document.createEvent("CustomEvent");c.initCustomEvent(b,a.bubbles,a.cancelable,a.detail);var d=c.preventDefault;c.preventDefault=function(){d.call(this);try{Object.defineProperty(this,"defaultPrevented",{get:function(){return!0}})}catch(k){this.defaultPrevented=	!0}};return c},b.prototype=window.Event.prototype,window.CustomEvent=b}})(); Object.assign||Object.defineProperty(Object,"assign",{enumerable:!1,configurable:!0,writable:!0,value:function(b){if(void 0===b||null===b)throw new TypeError("Cannot convert first argument to object");for(var d=Object(b),g=1;g<arguments.length;g++){var a=arguments[g];if(void 0!==a&&null!==a){a=Object(a);for(var c=Object.keys(Object(a)),h=0,k=c.length;h<k;h++){var e=c[h],m=Object.getOwnPropertyDescriptor(a,e);void 0!==m&&m.enumerable&&(d[e]=a[e])}}}return d}});	(function(){for(var b=0,d=["ms","moz","webkit","o"],g=0;g<d.length&&!window.requestAnimationFrame;++g)window.requestAnimationFrame=window[d[g]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[d[g]+"CancelAnimationFrame"]||window[d[g]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(a,c){var d=(new Date).getTime(),g=Math.max(0,16-(d-b)),e=window.setTimeout(function(){a(d+g)},g);b=d+g;return e});window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})})();

	/* El menú principal **********************/

	// Variable del botón principal que abre y ciera el menú
	const botonMenu = document.querySelector("#boton__menu");

	// Variable que contiene el listado de menú principal de la web
	const listadoMenu = document.querySelector("#header_nav");

	// Escuchando el evento de click del botón del menú principal
	botonMenu.addEventListener( "click", abrirCerrar );

	// Función que puede abrir y cerrar el menú principal
	function abrirCerrar(ev)
	{
		ev.preventDefault();

		if( listadoMenu.classList.contains("navegacion__lista--abierto") )
		{
			listadoMenu.classList.remove("navegacion__lista--abierto");
			listadoMenu.classList.add("navegacion__lista--cerrado");
			botonMenu.children[0].classList.add("icon-menu");
			botonMenu.children[0].classList.remove("icon-cross");
		}
		
		else if( listadoMenu.classList.contains("navegacion__lista--cerrado") )
		{
			listadoMenu.classList.add("navegacion__lista--abierto");
			listadoMenu.classList.remove("navegacion__lista--cerrado");
			botonMenu.children[0].classList.remove("icon-menu");
			botonMenu.children[0].classList.add("icon-cross");
		}

		else
		{
			listadoMenu.classList.add("navegacion__lista--abierto");
			listadoMenu.classList.remove("navegacion__lista--cerrado");
			botonMenu.children[0].classList.remove("icon-menu");
			botonMenu.children[0].classList.add("icon-cross");
		}
	}

	// Escuchando el evento de redimensionar la pantalla
	window.addEventListener("resize", mostrarOcultar, false);
	
	// Función muestra y oculta el menú principal dependiendo del ancho de pantalla
	function mostrarOcultar()
	{
		const ancho = window.innerWidth;
		if( ancho >= 1000 )
		{
			listadoMenu.classList.add("navegacion__lista--abierto");
			listadoMenu.classList.remove("navegacion__lista--cerrado");
		}
		else if ( ancho < 1000 && ancho > 720)
		{
			listadoMenu.classList.add("navegacion__lista--cerrado");
			listadoMenu.classList.remove("navegacion__lista--abierto");
			botonMenu.children[0].classList.add("icon-menu");
			botonMenu.children[0].classList.remove("icon-cross");
		}
		else
		{
			listadoMenu.classList.remove("navegacion__lista--cerrado");
			listadoMenu.classList.remove("navegacion__lista--abierto");
			botonMenu.children[0].classList.add("icon-menu");
			botonMenu.children[0].classList.remove("icon-cross");
		}
	}

	/* El "ir arriba" **************************************/
	// Escuchando el evento del scrolling
	const botonGoTop = document.getElementById("gotop");
	// window.addEventListener("scroll", esconder_mostrar);
	// window.addEventListener("load", esconder_mostrar);
	function esconder_mostrar(ev)
	{
		const coordY = window.pageYOffset;
		const ancho = window.innerWidth;
		
		if( coordY >= 600 && ancho < 500 )
		{
			botonGoTop.classList.add( "fadeInUp" );
			botonGoTop.classList.remove( "fadeOutDown" );
		}
		else if( coordY < 600 && ancho < 500 )
		{
			botonGoTop.classList.remove( "fadeInUp" );
			botonGoTop.classList.add( "fadeOutDown" );
		}
		else
		{
			botonGoTop.classList.add( "fadeInUp" );
			botonGoTop.classList.remove( "fadeOutDown" );
		}		
	}

	
	
	/* Los submenúes secundario del menú principal ************/
	
	// Variable de los listados de sub menúes. Es un arreglo
	const listadoSubMenu = document.querySelectorAll("a + .sub-menu");
	
	// Creando botones clickeables para abrir los submenúes. Es un arreglo.
	const listadoSubMenuBoton = [];
	listadoSubMenu.forEach( (ev) => {
		listadoSubMenuBoton.push( ev.previousElementSibling );
	});
	

	// Se le asigna la propiedad de poder abrir y cerrar a cada enlace que funcionará como botón de submenú.
	for (let i = 0; i < listadoSubMenuBoton.length; i++ )
	{
		listadoSubMenuBoton[i].addEventListener("click", abrirSubMenu);
		function abrirSubMenu(ev)
		{
			ev.preventDefault();
			
			if( listadoSubMenuBoton[i].nextElementSibling.classList.contains("sub-menu--abierto") )
			{
				listadoSubMenuBoton[i].nextElementSibling.classList.remove("sub-menu--abierto");
				listadoSubMenuBoton[i].nextElementSibling.classList.add("sub-menu--cerrado");

				if(listadoSubMenuBoton[i].lastElementChild.classList.contains("dashicons-minus"))
				{
					listadoSubMenuBoton[i].lastElementChild.classList.add("dashicons-plus");
					listadoSubMenuBoton[i].lastElementChild.classList.remove("dashicons-minus");
				}
				console.log(listadoSubMenuBoton[i].lastElementChild);
			}
			
			else if( listadoSubMenuBoton[i].nextElementSibling.classList.contains("sub-menu--cerrado") )
			{
				listadoSubMenuBoton[i].nextElementSibling.classList.add("sub-menu--abierto");
				listadoSubMenuBoton[i].nextElementSibling.classList.remove("sub-menu--cerrado");
				
				if(listadoSubMenuBoton[i].lastElementChild.classList.contains("dashicons-plus"))
				{
					listadoSubMenuBoton[i].lastElementChild.classList.add("dashicons-minus");
					listadoSubMenuBoton[i].lastElementChild.classList.remove("dashicons-plus");
				}
				console.log(listadoSubMenuBoton[i].lastElementChild);
			}
			
			else
			{
				listadoSubMenuBoton[i].nextElementSibling.classList.add("sub-menu--abierto");
				listadoSubMenuBoton[i].nextElementSibling.classList.remove("sub-menu--cerrado");

				if(listadoSubMenuBoton[i].lastElementChild.classList.contains("dashicons-plus"))
				{
					listadoSubMenuBoton[i].lastElementChild.classList.add("dashicons-minus");
					listadoSubMenuBoton[i].lastElementChild.classList.remove("dashicons-plus");
				}
				console.log(listadoSubMenuBoton[i].lastElementChild);
			}
		}
	}



	/* Las funciones para manipular los sliders */
	function cargadorSlider()
	{
		// Contenedor de los items
		const slider = document.querySelector( ".slider" );

		// El arreglo con cada uno de los sliders.
		const slidersItems = document.querySelectorAll(".slider__item");

		// El ancho del contenedor de los items
		if(slidersItems.length !== 0)
		{
			let altoItem = slidersItems[0].clientHeight;
			slider.style.minHeight = altoItem + "px";

			// Cambia el tamaño cada vez que se redimensiona la pantalla
			window.addEventListener("resize", () => {
				altoItem = slidersItems[i].clientHeight;
				slider.style.minHeight = altoItem + "px";
			});

			slider.style.minHeight = altoItem + "px";


			// Animación de entrada y salida
			let animacionEntrada, animacionSalida;
			
			// Agregando los z-index de acuerdo a su orden
			for( let i = 0; i < slidersItems.length; i++ )
			{			
				// Controlando si tiene una animación o no
				if( slider.classList.contains("animacion__carrousel") )
				{
					animacionEntrada = "slideInRight";
					animacionSalida = "slideOutLeft";
					slidersItems[i].classList.add(animacionSalida);
				}
				else if( slidersItems[i].classList.contains("animacion__fade") )
				{
					animacionEntrada = "fadeIn";
					animacionSalida = "fadeOut";
				}
				// console.log( slidersItems[i] );
			}


			// Función que se autoejecuta cada 3 segundos
			let i = 0;
			function temporizadorInfinito()
			{
				setTimeout( temporizadorInfinito, 5000 );
				izq();
	
				// Control del contador
				i = ( i + 1 ) % slidersItems.length;
				der();
				// console.log( slidersItems[i] );
			}
			temporizadorInfinito();
	
			 // Desplazamiento hacia la izquierda y desaparece
			function izq()
			{
				slidersItems[i].classList.add( animacionSalida );
				slidersItems[i].classList.remove( animacionEntrada );
			}
			
			// Desplazamiento desde la derecha y se queda en el centro 
			function der()
			{
				slidersItems[i].classList.add( animacionEntrada );
				slidersItems[i].classList.remove( animacionSalida );
			}
		}		
	}
	cargadorSlider();

	/******* LOS REVIEWS *******/
	const reviewsContenedor = document.querySelector(".contenedor__ventana");
	const reviewsItems = document.querySelectorAll(".contenedor__ventana__item");
	const flechaIzq = document.getElementById("flechaIzq");
	const flechaDer = document.getElementById("flechaDer");

	// Función que mueve a la izquierda o a la derecha
	function escrolIzq()
	{
		reviewsContenedor.scrollLeft -= reviewsItems[0].offsetWidth + 20;
	}
	function escrolDer()
	{
		reviewsContenedor.scrollLeft += reviewsItems[0].offsetWidth + 20;
	}
	
	// Control con los botones
	if(flechaDer != null)
	{
		flechaDer.addEventListener("click", escrolDer, false);
	}
	if(flechaIzq != null)
	{
		flechaIzq.addEventListener("click", escrolIzq, false);
	}

	// Control con las flechas en el teclado
	document.addEventListener("keydown", (e) => {
		if(e.key == "ArrowLeft")
		{
			escrolIzq();
		}
		else if(e.key == "ArrowRight")
		{
			escrolDer();
		}
	}, false);

	// Contador automático de slider. Controla que exista.
	if(reviewsItems.length > 0)
	{
		let cuenta = 0;
		function escrollInfinito()
		{
			setTimeout( escrollInfinito, 1000 );
			if( cuenta + 1 < reviewsItems.length )
			{
				escrolDer();
			}
			else
			{
				escrolIzq();
			}
			cuenta = ( cuenta + 1 ) % reviewsItems.length;
			console.log(reviewsContenedor.scrollLeft);
		}
		escrollInfinito();
	}


	/* MOSTRAR Y OCULTAR LOS FILTROS */	
	const filtros = document.querySelector(".widget__filtro");
	const botonFiltro = document.querySelector("#botonFiltro");

	// Controla que exista
	if(botonFiltro != null)
	{
		botonFiltro.addEventListener("click", filtreador, false);
	}
	function filtreador(ev)
	{
		ev.preventDefault();
		if( filtros.style.display == "block" )
		{
			filtros.style.display = "none";
		}
		else
		{
			filtros.style.display = "block";
		}
	}

	// Controla que existan
	if(filtros != null)
	{
		window.addEventListener("resize", () => {
			if( window.innerWidth > 719 )
			{
				filtros.style.display = "block";
			}
			else
			{
				filtros.style.display = "none";
			}
		});
	}

	/* DAR VUELTA LAS FLECHITAS */
	const flechitas = document.querySelectorAll(".widget__contenido__titulo");
	for(let i = 0; flechitas.length > i; i++)
	{
		flechitas[i].addEventListener("click", () => {
			if(!flechitas[i].classList.contains("widget__contenido__titulo--clickeado"))
			{
				flechitas[i].classList.add("widget__contenido__titulo--clickeado");
				console.log("agregado");
			}
			else
			{
				flechitas[i].classList.remove("widget__contenido__titulo--clickeado");
				console.log("removido");
			}
		});
	}


	/* FUNCION DEL TODOS LOS SLIDER DE FORMA GENERAL */
	class sliderClase
	{
		constructor(id, estilo, cantidad, item, tiempo, retraso, direccion, eventoTecla, eventoRaton)
		{
			this.id = id;
			this.estilo = estilo;
			this.cantidad = cantidad;
			this.item = item;
			this.tiempo = tiempo;
			this.retraso = retraso;
			this.direccion = direccion;
			this.eventoTecla = eventoTecla;
			this.eventoRaton = eventoRaton;
		}
	}
	
	// Variables necesarias para identificar los sliders
	let slidersGrupos = document.querySelectorAll(".slider-container");
	let sliderGrupo = [];
	if( slidersGrupos.length > 0)
	{
		for(let i = 0; slidersGrupos.length > i; i++)
		{
			sliderGrupo[i] = new sliderClase(
				i,
				slidersGrupos[i].dataset.estilo,
				slidersGrupos[i].children.length,
				slidersGrupos[i].children,
				slidersGrupos[i].dataset.tiempo,
				slidersGrupos[i].dataset.retraso,
				slidersGrupos[i].dataset.direccion,
				slidersGrupos[i].dataset.eventoTecla,
				slidersGrupos[i].dataset.eventoRaton
			);
			console.log(sliderGrupo[i].item, sliderGrupo[i].retraso);
		}
	}


	/* EL FORMULARIO DE PRESENTACION DE LOS JOURNEYS */
	let nombreApellido;
	const nombrecito = document.querySelector("#nombrecito");
	const botonSeguir = document.querySelector("#botonSeguir");

	if(nombrecito != null)
	{
		nombrecito.addEventListener("keypress", () => {
			botonSeguir.classList.remove("boton--deshabilitado");
			botonSeguir.removeAttribute("disabled");
			nombreApellido = nombrecito.value;
			console.log(nombreApellido);
			
	
			botonSeguir.addEventListener("click", () => {
				document.querySelectorAll(".journey--oculto").forEach(element => {
					element.classList.remove("journey--oculto");
					element.classList.add("journey--mostrado");
				});
	
				const tuNombreApellido = document.querySelector("#tuNombreApellido");
				tuNombreApellido.textContent = `nombreApellido, `;
			}, false);
		}, false);
	}
}
