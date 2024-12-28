
@extends('master')

@section('content')

<div class="container-fluid">
<div class="row">
  <div class="container py-5" style="height:500px; width:500px">
  <form action="login" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>


@endsection


