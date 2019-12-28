@extends('layouts.admin')

@section('content')
<br>
<div class="container center_div">
  <div class="card-body">
    <h4>Register Student(s) In Course "CSE250"</h4>
    <br>
    <div class="row">
      <div class="col-md-6">
        <form class="col-md-4">
          <h6>Select Year</h6>
          <select class="form-control select">
            <option>Select</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
          </select>
        </form>

        <div class="mt-5"></div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Registration No</th>
              <th scope="col">Option</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>2016331098</td>
              <td><input type="checkbox"></td>
            </tr>
          </tbody>
          <!-- <tbody>
            <tr>
              <th scope="row">2</th>
              <td>2016331022</td>
              <td><input type="checkbox"></td>
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