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
    @foreach ($products as $product)
    <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->stock}}</td>     
    </tr>
    @endforeach

  </table>

@endsection
