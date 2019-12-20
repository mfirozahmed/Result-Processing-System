@extends('layouts.student')

@section('content')
<br>
<div class="container center_div">
  <div class="card-body">
    <h4>Profile</h4>
    <br>
    <div class="row">
      <table class="table" style="width: 500px;">
        <thead class="thead-dark">
          <tr>
            <th scope="row">Name</th>
            <!-- <td>Mushtaq Shahriyar Rafee</td> -->
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </tr>
        </thead>

        <thead class="thead-dark">
          <tr>
            <th scope="row">Registration No</th>
            <td>2016331098</td>
          </tr>
        </thead>
        <thead class="thead-dark">
          <tr>
            <th scope="row">Email</th>
            <td>shahriyarrafi12345@gmail.com</td>
          </tr>
        </thead>
        <thead class="thead-dark">
          <tr>
            <th scope="row">Date of Birth</th>
            <td>09 Oct 1999</td>
          </tr>
        </thead>
        <thead class="thead-dark">
          <tr>
            <th scope="row">Contact Number</th>
            <td>01785391622</td>
          </tr>
        </thead>
        <thead class="thead-dark">
          <tr>
            <th scope="row">Address</th>
            <td>Thakurgaon</td>
          </tr>
        </thead>

      </table>

      <!-- /.col -->
    </div>
    <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    <!-- /.row -->
  </div>
</div><!--  -->
@endsection


<!-- <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 300px;">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" style="width: 300px;">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> -->