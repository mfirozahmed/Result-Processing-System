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
        @if (count($all_courses) > 0)
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
                        @foreach ($all_courses as $course)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="/my_courses/{{$course->code}}/marks">{{ $course->code }}</a></td>
                            <td><a href="/my_courses/{{$course->code}}/marks">{{ $course->title }}</a></td>
                            <td>{{ $course->credit }}</td>

                            <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!-- /.col -->
        </div>
        @else
            <h5> No course available. </h5>
        @endif
        <!-- /.row -->
    </div>
</div><!--  -->
@endsection