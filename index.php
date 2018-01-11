
<html>
<head>
	<title></title>
</head>
<body>
	<h1>FORMULARIO</h1>
<form action="verDatos.php" method="POST">
	<label>Nombre:</label>
	<input type="text" name="txtNombre" required><br>
	<label>Apellido:</label>
	<input type="text" name="txtApellido" required><br>
	<label>Cedula:</label>
	<input type="number" name="txtCedula" required><br>
	<label>Correo:</label>
	<input type="mail" name="txtCorreo" required><br>
	<label>Año de Nacimiento:</label>
	<input type="date" name="txtAñoNacimiento" required><br>
	<input type="submit" name="btnGuardar" value="Guardar datos">

    
	<h3>Hipervinculo Google</h3>
	<a href="http://www.google.com">Buscador Google</a><br>
    <!-->Hipervinculo a pagina web<!-->
	
	<h3>Hipervinculo</h3>
	<a href="verDatos.php">Enviar</a><br>
    <!-->Hipervinculo a otra pagina<!-->  
    
    <h3>Agregar una imagen</h3>
	<img src="html5.png" alt="HTML 5"><br>
    <!-->Agregar imagen<!-->

    <h3>Hipervinculo por medio de una imagen</h3>
    <a href="http://www.tutorialesprogramacionya.com/htmlya/index.php?inicio=0"><img src="html5.png" alt="HTML 5"> </a><br>
    <!-->Hipervinculo por medio de una imagen<!-->

    <h3>Abrir hipervinculo en otra pestaña</h3>
    <a href="http://www.google.com" target="_blank">Google</a><br>
    <!-->Abrir hipervinculo en otra pestaña<!-->

    <h3>Abrir hipervinculo para cliente de correo electronico</h3>
    <a href="mailto:carlos.rocha1506@gmail.com">Enviar mail.</a><br>
    <!-->Abrir hipervinculo para cliente de correo electronico<!-->

    <h1>ANCLAS EN LA MISMA PAGINA</h1>
    <h3>Tutorial de MySQL</h3>
<a href="#introduccion">Introducción</a><br>
<a href="#mostrarbasedatos">show databases</a><br>
<a href="#creaciontabla">Creación de una tabla y mostrar sus campos</a><br>
<a href="#cargarregistros">Carga de registros a una tabla y su recuperación</a><br>
<a name="introduccion"></a>
<h2>Introducción</h2>
<p>
SQL, Structure Query Language (Lenguaje de Consulta Estructurado) es un lenguaje de programacion para
 trabajar con base de datos relacionales como MySQL, Oracle, etc.<br>
MySQL es un interpretador de SQL, es un servidor de base de datos.<br>
MySQL permite crear base de datos y tablas, insertar datos, modificarlos, eliminarlos, ordenarlos,
 hacer consultas y realizar muchas operaciones, etc., resumiendo: administrar bases de datos.<br>
Ingresando instrucciones en la linea de comandos o embebidas en un lenguaje como PHP nos comunicamos
 con el servidor. Cada sentencia debe acabar con punto y coma (;).<br>
La sensibilidad a mayúsculas y minúsculas, es decir, si hace diferencia entre ellas, depende del
 sistema operativo, Windows no es sensible, pero Linux si. Por ejemplo Windows interpreta igualmente
 las siguientes sentencias:<br>
	create database administracion;<br>
	Create DataBase administracion;<br>
Pero Linux interpretará como un error la segunda.<br>
Se recomienda usar siempre minúsculas. Es más el sitio mysqlya.com.ar está instalado sobre un servidor
 Linux por lo que todos los ejercicios deberán respetarse mayúsculas y minúsculas.
</p>
<a name="mostrarbasedatos"></a>
<h2>show databases</h2>
<p>
Una base de datos es un conjunto de tablas.<br>
Una base de datos tiene un nombre con el cual accederemos a ella.<br>
Vamos a trabajar en una base de datos ya creada en el sitio, llamada "administracion".<br>
Para que el servidor nos muestre las bases de datos existentes, se lo solicitamos enviando la instrucción:<br>
show databases;<br>
Nos mostrará los nombres de las bases de datos, debe aparecer en este sitio "administracion".<br>
</p>
<a name="creaciontabla"></a>
<h2>Creación de una tabla y mostrar sus campos</h2>
<p>
Una base de datos almacena sus datos en tablas.<br>
Una tabla es una estructura de datos que organiza los datos en columnas y filas; cada columna es un campo
 (o atributo) y cada fila, un registro. La intersección de una columna con una fila, contiene un dato
 específico, un solo valor.<br>
Cada registro contiene un dato por cada columna de la tabla.<br>
Cada campo (columna) debe tener un nombre. El nombre del campo hace referencia a la información que
 almacenará.<br>
Cada campo (columna) también debe definir el tipo de dato que almacenará.<br>
</p>
<a name="cargarregistros"></a>
<h2>Carga de registros a una tabla y su recuperación</h2>
<p>
Usamos "insert into". Especificamos los nombres de los campos entre paréntesis y separados por comas
 y luego los valores para cada campo, también entre paréntesis y separados por comas.<br>
Es importante ingresar los valores en el mismo orden en que se nombran los campos, si ingresamos
 los datos en otro orden, no aparece un mensaje de error y los datos se guardan de modo 
incorrecto.<br>
Note que los datos ingresados, como corresponden a campos de cadenas de caracteres se colocan
 entre comillas simples. Las comillas simples son OBLIGATORIAS.
</p>

<h3>LISTAS ORDENADAS</h3>
<ol>
<li>Rodriguez Pablo</li>
<li>Gonzalez Raul</li>
<li>Lopez Hector</li>
</ol>
<!-->LISTAS ORDENADAS<!-->

<h3>LISTAS NO ORDENADAS</h3>
<ul>
<li>Rodriguez Pablo</li>
<li>Gonzalez Raul</li>
<li>Lopez Hector</li>
</ul>
<!-->LISTAS NO ORDENADAS<!-->

<h3>LISTAS CON DESCRIPCION</h3>
<dl>
    <dt>C++</dt>
    <dd>Es un lenguaje de programación, diseñado a mediados de 
    los años 1980, por Bjarne Stroustrup, como extensión del lenguaje 
    de programación C.</dd>
    <dt>Java</dt>
    <dd>Es un lenguaje de programación orientado a objetos desarrollado 
    por Sun Microsystems a principios de los 90.</dd>
    <dt>JavaScript</dt>
    <dd>Es un lenguaje interpretado, es decir, que no requiere compilación, 
    utilizado principalmente en páginas web, con una sintaxis semejante a la 
    del lenguaje C.</dd>
  </dl>
<!-->LISTAS CON DESCRIPCION<!-->



<h3>LISTAS ANIDADAS</h3>
<ol>
  <li>Argentina
    <ul>
      <li><a href="http://www.lanacion.com.ar">La Nación</a></li>
      <li><a href="http://www.clarin.com.ar">Clarín</a></li>
      <li><a href="http://www.pagina12.com.ar">Página 12</a></li>
    </ul>
  </li>
  <li>España
    <ul>
      <li><a href="http://www.elpais.es">El País Digital</a></li>
      <li><a href="http://www.abc.es">ABC</a></li>
      <li><a href="http://www.elmundo.es">El Mundo</a></li>
    </ul>
  </li>
  <li>México
    <ul>
      <li><a href="http://www.jornada.unam.mx">La Jornada</a></li>
      <li><a href="http://www.el-universal.com.mx">El Universal</a></li>
    </ul>
  </li>
</ol>
<!-->LISTAS ANIDADAS<!-->


<h3>TABLAS</h3>
<table border="1">
  <tr>
    <td>China</td><td>1300 millones</td>
  </tr>
  <tr>
    <td>India</td><td>1080 millones</td>
  </tr>
  <tr>
    <td>Estados Unidos</td><td>295 millones</td>
  </tr>
</table>
<!-->TABLAS<!-->

<h3>TABLA CON ENCABEZADO</h3>
<table border="1">
  <tr>
    <th>Paises</th><th>Cantidad de habitantes</th>
  </tr>
  <tr>
    <td>China</td><td>1300 millones</td>
  </tr>
  <tr>
    <td>India</td><td>1080 millones</td>
  </tr>
  <tr>
    <td>Estados Unidos</td><td>295 millones</td>
  </tr>
</table>
<!-->TABLA CON ENCABEZADO<!-->


</form>

</body>
</html>