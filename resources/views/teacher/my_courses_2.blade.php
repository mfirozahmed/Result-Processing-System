@extends('layouts.teacher')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Course CSE332</h4>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reg. No</th>
                            <th scope="col">TT-1(Out of 20)</th>
                            <th scope="col">TT-2(out of 20)</th>
                            <th scope="col">Attendance</th>
                            <th scope="col">Final Exam Mark</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>2016331022</td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">2</th>
                            <td>2016331098</td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <td><input class="form-control input-sm" id="inputsm" type="number"></td>
                            <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                        </tr>
                    </tbody>
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