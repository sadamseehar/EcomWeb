@extends('adminPages.layout')


@section("main")
@if(session('hamaraKey'))
<div>{{ session('hamaraKey')}}</div>
@endif

<form action="productList">
<button type="submit" class="btn btn-success">Car list</button>

</form>

<form method="POST" action="car" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">car name</label>
      <input type="text" name ="carName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">price</label>
      <input type="text" name ="carPrice" class="form-control" id="exampleInputPassword1" placeholder="enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">description</label>
      <input type="text" name ="carModel" class="form-control" id="exampleInputPassword1" placeholder="enter age">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Image</label>
      <input type="file"  name ="carImage" class="form-control" id="exampleInputPassword1" >

      <label for="exampleInputPassword1">multi images</label>

      <input type="file" multiple name ="carMultiImageInput[]" class="form-control" id="exampleInputPassword1" >

    </div>

  
    <button type="submit" class="btn btn-primary">add car</button>
  </form>

@endsection