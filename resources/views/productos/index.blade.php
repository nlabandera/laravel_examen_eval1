@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Productos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Stock</th>
         
    </tr>
    @foreach ($products as $producto)
    <tr>
      <td>{{$producto->id}}</td>
      <td>{{$producto->name}}</td>
      <td>{{$producto->description}}</td>
      <td>{{$producto->price}}</td>
      <td>{{$producto->stock}}</td>     
    </tr>
    @endforeach

  </table>

@endsection
