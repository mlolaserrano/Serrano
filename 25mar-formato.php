<?php
                                                                            
// Comentario en linea

/* Comentario
multilinea */

// Ejemplo visto en clase

/*
    1) El código del lenguaje php va siempre encerrado entre las etiquetas delimiatdoras, la de 
    inicio <?php y la estiqueta de cierre ?>

    2) Los comentario dentro del código php, es decir dentro de las etiquetas delmitadoras
    y con el simboo correspondiente de apretura de cometario /* y el de cierre * /

    3) El comando echo imprime en la salida el valor recibido por parámetro.
    En este caso recibe por parámetro el literal cadena de carateres "Hola mundo"  
    Las comillas indican el inicio y el fin de la cadena de caracteres.

            
    https://www.w3schools.com/php/php_syntax.asp
    https://www.w3schools.com/php/php_comments.asp

    echo "Hola Mundo, Hola PL </br> </br> </br>";
    
    print "---------PROBANDO DISTINTAS ETIQUETAS HTML-----------</br>";
    print "---------Y UTLIZANDO print O BIEN echo --------------</br>";
    echo "<p>Buenas tardes</p>";
    print "<pre>Buenas noches</pre>";
    print "<pre>Buenas      *       noches</pre>";
    print "<p>Buenas      *       noches</p>";
    print "<span>AAAAAA      *       BBBBBB</span>";
    print "<span>aaaaaa      *       bbbbbb</span>";
    print ("<h1>Titulo 1</h1>");
    print ("<h2>Titulo 2</h2>");
    print ("<h3>Titulo 3</h3>");
    echo ("<h4>Titulo 4</h4>");
    echo ("<h5>Titulo 5</h5>");
    print ("<h6>Titulo 6</h6>");
    print ("</br>");
    echo "<p>","Esto es un parrafo","usando el echo()","con varios argumentos","</p>" ;

    print "---------LINK A LAS ETIQUETAS HTML QUE VAMOS USAR-----------</br>";

    print("<p><a href='https://www.w3schools.com/html/html_paragraphs.asp'>Parrafo p</a></p>");
    print("<p><a href='https://www.w3schools.com/tags/tag_hn.asp'>Cabecera h</a></p>");
    print("<p><a href='hhttps://www.w3schools.com/tags/tag_br.asp'>Salto de un linea br</a></p>");
    print("<p><a href='https://www.w3schools.com/tags/tag_pre.asp'>Texto preformado pre</a></p>");
    print("<p><a href='https://www.w3schools.com/tags/tag_span.asp'>elemento de line (sin salto de linea) spane</a></p>");

*/

/*
En este código se imprime en pantalla una serie de palabras
separadas una de otra de forma homgénea. Esto se logra agregando
al string codificacion css dentro de html.
Comentarios:
 Usaremos la forma de estilo  'inline'
donde se agrega el estilo a cada tag html 
Usaremos los tag <span> .... </span> 
style -> Asigna el estilo al contenido que se encuentra entre tag. El
estilo se asigna con un igual(=), las propiedades se asignan
 con un dos puntos (:). Al final de cada propiedad va un (;).
Todas las propiedades juntas se rodean entre 
comillas simples ('  ')
width -> propiedad que da un ancho a una "caja" quien contendrá el contenido
que se encuentra entre tag. 
display -> propiedad que asigna la forma de mostrar el contenido

https://www.w3schools.com/html/html_css.asp
https://www.codecademy.com/article/html-inline-styles    

En este código se imprime en pantalla una serie de palabras
separadas una de otra de forma homgénea. Esto se logra agregando
al string codificacion css dentro de html.

Comentarios:
 Usaremos la forma de estilo  'inline'
donde se agrega el estilo a cada tag html 
Usaremos los tag <span> .... </span> 
style -> Asigna el estilo al contenido que se encuentra entre tag. El
estilo se asigna con un igual(=), las propiedades se asignan
con un dos puntos (:). Al final de cada propiedad va un (;).
 *              Todas las propiedades juntas se rodean entre 
 *              comillas simples ('  ')
 *   +     width -> propiedad que da un ancho a una "caja" quien contendrá el contenido
 *                  que se encuentra entre tag. 
 *         display -> propiedad que asigna la forma de mostrar el contenido
 *   + 
 * 
 *    https://www.w3schools.com/html/html_css.asp
 *    https://www.codecademy.com/article/html-inline-styles  


 */


// Etiqueta span no se visualiza en el navegador, pero sirve para darle estilo a futuro, sin cambiar visiblemente en el navegador 

// Nota: siempre vamos a trabajar con echo

   echo "---------PROBANDO DISTINTAS ETIQUETAS HTML-----------<br> <br>";

   echo "---------Y UTLIZANDO print O BIEN echo --------------<br> <br>";

   echo "<h1 style='font-family:calibri';> Esto es un titulo</h1>";

   echo "<h2 style='font-family:calibri';> Esto es un subtitulo</h2>";

   echo "<p style='font-family:verdana';> Esto es un parrafo escrito por  <span style='color:red;'> Lola Serrano </span>  </p>";

   echo "<span style='color:blue;font-family:verdana';'>
                                                        En este código se imprime en pantalla una serie de palabras separadas una de otra de forma homgénea.
                                                        Esto se logra agregando al string codificacion css dentro de html. <br> <br>
        </span>";

    echo "<span style='width:100; display: inline-block; font-weight: bold; font-family:calibri; color: purple; background-color: #ede6db; text-align: center;'>NOMBRE</span>";
    echo "<span style='width:100; display: inline-block; font-weight: bold; font-family:calibri; color: purple; background-color: #ede6db; text-align: center;'>APELLIDO</span>";
    echo "<span style='width:100; display: inline-block; font-weight: bold; font-family:calibri; color: purple; background-color: #ede6db; text-align: center;'>DNI</span> <br> <br>";

    echo "<span style='width:100; display: inline-block; font-family:calibri; text-align: center; background-color: #e9d5da;'>Lola</span>";
    echo "<span style='width:100; display: inline-block; font-family:calibri; text-align: center; background-color: #e9d5da;'>Serrano</span>";
    echo "<span style='width:100; display: inline-block; font-family:calibri; text-align: center; background-color: #e9d5da;'>00.00.00</span>";

    echo "<p style='font-family:verdana; color:grey;';> <i> Buenas Tardes </i> </p>";

    echo "<p style='font-family:verdana; color:grey;';> <i> Buenas Noches </i> </p>";

?>

