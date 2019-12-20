@extends('layouts.admin')

@section('content')
<br>
<div class="container center_div">
  <div class="card-body">
    <h4>Register Student In Course</h4>
    <br>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Select Semester</label>
          <select class="form-control select2" style="width: 150px">
            <option selected="selected">1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
          </select>
        </div>

        <div class="mt-5"></div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSE332</td>
              <td>Software Engineering & Design Patterns Lab</td>
              <td>1.5</td>
            </tr>
          </tbody>
        </table>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div><!--  -->
@endsection