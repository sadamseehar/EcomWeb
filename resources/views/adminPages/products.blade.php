@extends('adminPages.layout')




@section('main')


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach($product as $p)
        <tr>
            <th scope="col">{{$p->id}}</th>
            <th scope="col">{{$p->productName}}</th>
            <th scope="col">{{$p->price}}</th>
            <th scope="col">{{$p->description}}</th>
            <th scope="col"><img src="images/{{$p->Image}}" width="50px" height="50px" alt=""></th>
            <th scope="col">delete</th>
        </tr>
    @endforeach

    
  </tbody>
</table>



@endsection