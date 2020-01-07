@extends('layouts.admin')

@section('value')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(function() {
    $("#valueFind").change(function() {
      var displayValue = $("#valueFind option:selected").text();

      $("#text").val(displayValue);
    })
  })
</script>
@endsection('value')

@section('content')
<br>
<div class="container center_div">
  <div class="card-body">
    <h4>Assign Teacher In Course . . .</h4>
    <br>
    <div class="row">
      <div class="col-md-9">
        <!-- <div class="mt-5"></div> -->
        <br>
        <h5>Courses For First Year First Semester</h5>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit</th>
              <!-- <th scope="col">Select</th> -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSE332</td>
              <td>Software Engineering & Design Patterns Lab</td>
              <td>1.5</td>
              <!-- <td><input type="radio" name="demo" value="one" id="radio-one" class="form-radio"></td> -->
              <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
            </tr>
          </tbody>
          <!-- <tbody>
            <tr>
              <th scope="row">2</th>
              <td>CSE332</td>
              <td>Software Engineering & Design Patterns Lab</td>
              <td>1.5</td>
              <td><input type="radio" name="demo" value="one" id="radio-one" class="form-radio"></td>
            </tr>
          </tbody> -->
        </table>

      </div>
      <!-- /.col -->
    </div>
    <br>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <!-- /.row -->
  </div>
</div>
@endsection