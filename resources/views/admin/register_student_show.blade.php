@extends('layouts.admin')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Register Student(s) In Course "{{$code}}"</h4>
        <br>
        @if (count($all_students) > 0)
        <form method="POST" action="/admin/register_student/year/{{$year}}/semester/{{$sem}}/courses/{{$code}}/students">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Registration No</th>
                                <th scope="col">Select</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_students as $student)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $student->username }}</td>
                                <td>
                                    <div class="checkbox">
                                        <input type="checkbox" name="students[]" value="{{ $student->username }}">
                                    </div>
                                </td>

                                <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.col -->
            </div>
        <!-- /.row -->
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @else
            <h5> No teacher available. </h5>
        @endif
    </div>

</div><!--  -->
@endsection



