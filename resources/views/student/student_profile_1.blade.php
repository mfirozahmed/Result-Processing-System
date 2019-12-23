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
        </div>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3" style="width: 700px;">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Registration No</span>
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->username }}</span>
      </div>
    </div>
    <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Email</span>
        </div>
        <input type="text" name="email" value="{{ $student->email }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Date of Birth(DD/MM/YY)</span>
        </div>
        <input type="text" name="dob" value="{{ $student->dob }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Contact Number</span>
        </div>
        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3" style="width: 700px;">
        <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Address</span>
        </div>
        <textarea type="text" name="address" value="{{ $student->address }}" cols="56" rows="3"></textarea>
        <!-- <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> -->
    </div>
    

      <!-- /.col -->
    </div>
    <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    <!-- /.row -->
  </div>
</div>
@endsection


