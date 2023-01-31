@extends('adminPages.layout')


@section("main")
@if(session('hamaraKey'))
<div>{{ session('hamaraKey')}}</div>
@endif

<form action="productList">
<button type="submit" class="btn btn-success">Product list</button>

</form>

<form method="POST" action="addProductPost" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Product name</label>
      <input type="text" name ="productNameInput" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">price</label>
      <input type="text" name ="productPriceInput" class="form-control" id="exampleInputPassword1" placeholder="enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">description</label>
      <input type="text" name ="productDescriptionInput" class="form-control" id="exampleInputPassword1" placeholder="enter age">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Image</label>
      <input type="file"  name ="productImageInput" class="form-control" id="exampleInputPassword1" >

      <label for="exampleInputPassword1">multi images</label>

      <input type="file" multiple name ="productMultiImageInput[]" class="form-control" id="exampleInputPassword1" >

    </div>

  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection