@extends('layouts.admin')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Assign Teacher(s) In Course "{{$id}}"</h4>
        <br>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_teachers as $teacher)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $teacher->username }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td><input type="checkbox"></td>

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
    </div>

</div><!--  -->
@endsection