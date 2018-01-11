<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">

	div
	{
		border:solid;
	}

	</style>
</head>
<body>

	<div>	
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
	</div>

	<br>
	
	<div>
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
	</div>

	<br>

	<div>
		<table border="1">
  <caption>Población de los paises con mayor cantidad de habitantes.</caption>
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
	</div>

	<br>

	<div>
		<table border="1">
  <tr>
    <td rowspan="4">Recursos</td><td colspan="4">Facturación de los últimos tres meses</td>
  </tr>
  <tr>
    <td>Discos Duros</td><td>23000</td><td>27200</td><td>26000</td>
  </tr>
  <tr>
    <td>CPU</td><td>73000</td><td>67300</td><td>51000</td>
  </tr>
  <tr>
    <td>Monitores</td><td>53000</td><td>72000</td><td>88000</td>
  </tr>
</table>
	</div>

	<br>

	<div>
		<form action="registrardatos.php" method="post">
  Ingrese su nombre: 
  <input type="text" name="nombre" size="20">
  <br>
  Ingrese su clave: 
  <input type="password" name="clave" size="12">
  <br>
  <input type="submit" value="enviar">
  <input type="reset" value="borrar">
</form>
	</div>

	<br>

	<div>
		  <form action="registrardatos.php" method="post">
  Ingrese su nombre:
  <input type="text" name="nombre" size="30"><br>
  Ingrese su mail:
  <input type="text" name="mail" size="50"><br>
  Comentarios:<br>
  <textarea name="comentarios" rows="5" cols="60"></textarea> 
  <br>
  <input type="submit" name="btnEnviar" value="Enviar">
  <input type="reset" name="btnResetear" value="Resetear">
</form>
	</div>

	<br>

	<div>
		<form action="registrardatos.php" method="post">
  Ingrese su nombre:
  <input type="text" name="nombre" size="30"><br>
  Seleccione los lenguajes que conoce:
  <br>
  <input type="checkbox" name="java">Java<br>
  <input type="checkbox" name="cmasmas">C++<br>
  <input type="checkbox" name="c">C<br>
  <input type="checkbox" name="csharp">C#<br>
  <input type="submit" value="Enviar">
</form>
	</div>

	<br>

	<div>
		<form action="registrardatos.php" method="post">
  Ingrese su nombre:
  <input type="text" name="nombre" size="30"><br>
  Seleccione el máximo nivel de estudios que tiene:
  <br>
  <input type="radio" name="estudios" value="1">Sin 
  estudios<br>
  <input type="radio" name="estudios" value="2">Primario<br>
  <input type="radio" name="estudios" value="3">Secundario<br>
  <input type="radio" name="estudios" value="4">Universitario<br>
  <input type="submit" value="Enviar">
</form>
	</div>

	<br>

	<div>
		<form action="registrardatos.php" method="post">
  Ingrese su nombre:
  <input type="text" name="nombre" size="30"><br>
  Seleccione su pais:
  <select name="pais">
    <option value="1">Argentina</option>
    <option value="2">España</option>
    <option value="3">México</option>
    <option value="4">Guatemala</option>
    <option value="5">Honduras</option>
    <option value="6">El Salvador</option>
    <option value="7">Venezuela</option>
    <option value="8">Colombia</option>
    <option value="9">Cuba</option>
    <option value="10">Bolivia</option>
    <option value="11">Perú</option>
    <option value="12">Ecuador</option>
    <option value="13">Paraguay</option>
    <option value="14">Uruguay</option>
    <option value="15">Chile</option>
  </select>
  <br>
  <input type="submit" value="Enviar">
</form>
	</div>

</body>
</html>