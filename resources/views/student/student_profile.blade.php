@extends('layouts.student')

@section('content')
<br>
<div class="container center_div">
  <div class="card-body">
    <h4>Profile</h4>
    <br>
    <div class="row">
      <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Name</span>
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">Mushtaq Shahriyar Rafee</span>
        </div>
      </div>
      <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Registration No</span>
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">2016331098</span>
        </div>

      </div>
      <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Email</span>
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">shahriyarrafi12345@gmail.com</span>
        </div>

      </div>
      <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Date of Birth(DD/MM/YY)</span>
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">09/10/1999</span>
        </div>

      </div>
      <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Contact Number</span>
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">01785391622</span>
        </div>

      </div>
      <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Address</span>
          <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">Thakurgaon</span>
        </div>


      </div>


      <!-- /.col -->
    </div>
    <br>
    <h5><a href="{{ route('student_profile_update') }}" class="button">Update Profile</a></h5>
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