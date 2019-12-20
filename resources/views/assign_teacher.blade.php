@extends('layouts.admin')

@section('content')
<div class="card-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Select Semester</label>
        <select class="form-control select2" style="width: 100%;">
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
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
@endsection