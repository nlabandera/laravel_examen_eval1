<!DOCTYPE html>
<html>
<head>
	<title>Formulario para nueva tienda</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="{{route('muestratienda')}}" method="POST">
		@csrf		
		<label>Nombre de la tienda</label><br>
		<input type="text" name="name"> @if($errors->has('name'))<span>{{$errors->first('name')}}@endif</span><br>
		<label>Descripción:</label><br>
		<input type="text" name="description"><br>
		<label>Contraseña: </label><br>
		<input type="password" name="password">@if($errors->has('password'))<span>{{$errors->first('password')}}@endif</span><br>
		<label>Email: </label><br>
		<input type="email" name="email">@if($errors->has('email'))<span>{{$errors->first('email')}}@endif</span><br>
		<label>Likes: </label><br>
		<input type="number" name="likes">@if($errors->has('likes'))<span>{{$errors->first('likes')}}@endif</span><br><br>
		<input type="submit" value="Enviar">
	</form>

</body>
</html>