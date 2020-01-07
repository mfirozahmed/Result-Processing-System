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
    <h4>Assign Teacher In Course</h4>
    <br>
    <div class="row">
      <div class="col-md-6">

        <!-- <div class="mt-5"></div> -->
        <br>
        <h5>First Year</h5>
        <table class="table" style="width: 400px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">First Semester</th>
              <th scope="col">Second Semester</th>
            </tr>
          </thead>
        </table>

        <h5>Second Year</h5>
        <table class="table" style="width: 400px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">First Semester</th>
              <th scope="col">Second Semester</th>
            </tr>
          </thead>
        </table>

        <h5>Third Year</h5>
        <table class="table" style="width: 400px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">First Semester</th>
              <th scope="col">Second Semester</th>
            </tr>
          </thead>
        </table>

        <h5>Fourth Year</h5>
        <table class="table" style="width: 400px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">First Semester</th>
              <th scope="col">Second Semester</th>
            </tr>
          </thead>
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