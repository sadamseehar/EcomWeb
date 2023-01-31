@extends('adminPages.layout')

@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">agte</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>

  @foreach($st as $s)
    <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{$s->studentName}}</td>
      <td>{{$s->studentEmail}}</td>
      <td>{{$s->age}}</td>
      <td><a href="edit/{{$s->id}}">edit</a> </td>
      <td><a href="delete/{{$s->id}}">delete</a> </td>

    </tr>

    @endforeach
    
  </tbody>
</table>



@endsection