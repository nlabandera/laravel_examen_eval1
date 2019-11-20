<!DOCTYPE html>
<html>
<head>
	<title>Formulario para nueva tienda</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="{{route('muestratienda')}}">
		
		<label>Nombre de la tienda</label><br>
		<input type="text" name="shop"> @if($errors->has('shop'))<span>{{$errors->first('shops')}}@endif</span><br>
		<label>Descripción:</label><br>
		<input type="text" name="description"><br>
		<label>Contraseña: </label><br>
		<input type="password" name="password"><br>
		<label>Email: </label><br>
		<input type="email" name="email"><br>
		<label>Likes: </label><br>
		<input type="number" name="likes"><br><br>
		<input type="submit" value="Enviar">
	</form>

</body>
</html>