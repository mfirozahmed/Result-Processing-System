@extends('layouts.teacher')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Course {{$code}}</h4>
        <br>
        @if (count($all_students) > 0)
        <form method="POST" action="/my_courses/{{$code}}/marks">
            @csrf
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
                            @foreach ($all_students as $student)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$student->username}}</td>
                                <td><input class="form-control input-sm" id="inputsm" type="number" name="tt1[]" value="{{$student->pivot->tt1}}"></td>
                                <td><input class="form-control input-sm" id="inputsm" type="number" name="tt2[]" value="{{$student->pivot->tt2}}"></td>
                                <td><input class="form-control input-sm" id="inputsm" type="number" name="att[]" value="{{$student->pivot->att}}"></td>
                                <td><input class="form-control input-sm" id="inputsm" type="number" name="final[]" value="{{$student->pivot->final}}"></td>
                                <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.col -->
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
        @else
            <h5> No student available. </h5>
        @endif
        <!-- /.row -->
    </div>
    
</div><!--  -->
@endsection