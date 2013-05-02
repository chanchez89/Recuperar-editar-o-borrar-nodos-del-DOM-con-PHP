<?php
/**
 * Ejemplo del uso de la clase DOM.
 *
 * En este documento se muestra el uso b�sico de la clase DOM para recuperar y
 * modificar elementos HTML y procesarlos.
 *
 * El uso de este script est� documentado en {@link http://rubenmartin.me/?p=597}
 *
 * @author	Rub�n Mart�n <soy@rubenmartin.me>
 * @licence (CC) BY-SA
 * @link	http://rubenmartin.me/?p=597
 * @see		DOMDocument
 */




/**
 * Iniciamos la clase y cargamos el documento HTML.
 */
$DOM = new DOMDocument();
$DOM->loadHTMLFile( './example.html' );


/**
 * Capturar todos los elementos <h2> y guardar el del centro.
 */
$h2 = $DOM->getElementsByTagName( 'h2' );
$h2 = $h2->item( 1 );


/**
 * Modificar nodo.
 */
$h2->setAttribute( 'class', 'text-warning' );
$h2->nodeValue = 'Modificar el texto';


/**
 * A�adir nodo.
 */
$p = $h2->nextSibling;
$p = $p->nextSibling;
$p->parentNode->insertBefore(
	new DOMElement( 'h3', 'Hemos creado un nuevo nodo' ),
	$p
);


/**
 * Guardar los cambios.
 */
echo $DOM->saveHTML();

?>