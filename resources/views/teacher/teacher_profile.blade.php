@extends('layouts.teacher')

@section('content')
<br>
<div class="container center_div">
    @yield('alert')
    <div class="card-body">
        <h4>Profile</h4>
        <br>
        <div class="row">
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Name</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $teacher->name }}</span>
                </div>
            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Username</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $teacher->username }}</span>
                </div>

            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Designation</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $teacher->des }}</span>
                </div>

            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Email</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $teacher->email }}</span>
                </div>

            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Contact Number</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $teacher->phone }}</span>
                </div>

            </div>
            <!-- /.col -->
        </div>
        <br>
        <h5><a href="{{route('teacher_profile_update')}}" class="button">Update Profile</a></h5>
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