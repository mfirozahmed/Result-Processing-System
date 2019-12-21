@extends('layouts.teacher')

@section('styling')
    <style>
    .hello:hover{
        background-color: rgb(233, 238, 229);
    }
    </style>
@endsection('styling')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>My Courses</h4>
        <br>
        <div class="row">
            <div class="col-md-6">
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
                        <tr style="cursor:pointer;"  class="hello" onclick="window.location='{{route('my_courses_1')}}';">
                            <th scope="row">1</th>
                            <td>CSE332</td>
                            <td>Software Engineering & Design Patterns Lab</td>
                            <td>1.5</td>

                            <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
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