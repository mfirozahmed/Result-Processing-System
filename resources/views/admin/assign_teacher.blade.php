@extends('layouts.admin')

@section('style')
<style>
  .hello:hover {
    background-color: rgb(233, 238, 229);
  }
</style>
@endsection('style')

@section('content')
<br>
<div class="container center_div">
  <div class="card-body">
    <h4>Assign Teacher In Course</h4>
    <br>
    <div class="row">
      <div class="col-md-9">
        <form class="col-md-2">
          <label>Select Semester</label>
          <select class="form-control select">
            <option>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
          </select>
        </form>

        <div class="mt-5"></div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit</th>
              <th scope="col">Select</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>CSE332</td>
              <td>Software Engineering & Design Patterns Lab</td>
              <td>1.5</td>
              <td><input type="radio" name="demo" value="one" id="radio-one" class="form-radio"></td>
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
    <button type="submit" class="btn btn-primary">Submit</button>
    <!-- /.row -->
  </div>
</div><!--  -->
@endsection