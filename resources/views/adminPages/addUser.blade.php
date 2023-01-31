@extends("adminPages.layout")


@section("main")
<div>
  @if(session("message"))
  {{session('message')}}
  @endif
</div>

  <form method="POST" action="addUserPost">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">StudentName</label>
      <input type="text" name ="studentNameInput" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" name ="studentEmailInput" class="form-control" id="exampleInputPassword1" placeholder="enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">age</label>
      <input type="text" name ="ageInput" class="form-control" id="exampleInputPassword1" placeholder="enter age">
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection 