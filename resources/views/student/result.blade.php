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
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">Rafee</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Registration No</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">2016331098</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Completed Credit</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">104.5</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Current GPA</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">3.55</span>
            </div>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 150px;">Grade</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">A-</span>
            </div>
        </div>
        <br>
        <h5>First Year First Semester</h5>
        <div>
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Total Credit</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">24</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Total GPA</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">3.55</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 100px;">Grade</span>
                <span class="input-group-text" id="inputGroup-sizing-default" style="width: 70px;">A-</span>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>CSE332</td>
                            <td>Software Engineering & Design Patterns Lab</td>
                            <td>1.5</td>
                            <td>3.55</td>
                            <td>A-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection