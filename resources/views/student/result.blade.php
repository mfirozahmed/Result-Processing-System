@extends('layouts.student')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Result . .</h4>
        <br>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Name</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{$student->name}}</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Registration No</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{$student->username}}</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Completed Credit</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{$credits}}</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Current GPA</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{$total_gpa}}</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Grade</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{$tgrade}}</span>
            </div>
        </div>
        <br>
        <h5>First Year First Semester</h5>
        <div>
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Total Credit</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">{{$sem_one_credits}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Total GPA</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">{{$sem_one_gpa}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Grade</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">{{$sem_one_grade}}</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Title</th>
                            <th scope="col">Credit</th>
                            <th scope="col">GPA</th>
                            <th scope="col">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sem_one as $course)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->credit }}</td>
                            <td>{{$cgpa[$loop->iteration - 1]}}</td>
                            <td>{{$grade[$loop->iteration - 1]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <br> <br>
        <h5>First Year Second Semester</h5>
        <div>
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Total Credit</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">{{$sem_two_credits}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Total GPA</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">{{$sem_two_gpa}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Grade</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">{{$sem_two_grade}}</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Title</th>
                            <th scope="col">Credit</th>
                            <th scope="col">GPA</th>
                            <th scope="col">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sem_two as $course)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->credit }}</td>
                            <td>{{$cgpax[$loop->iteration - 1]}}</td>
                            <td>{{$gradex[$loop->iteration - 1]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection