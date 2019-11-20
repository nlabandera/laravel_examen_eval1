@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
 <form method="POST" action="">
		@csfr
		<label>Nombre de la tienda</label><br>
		<input type="text" name="shop"><br>
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
  <br>

@endsection
