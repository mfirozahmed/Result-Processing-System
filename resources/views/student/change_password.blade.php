@extends('layouts.student')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Change Your Password . .</h4>
        <br><br>
        <form style="width: 500px;" method="POST" action="{{ route('student.change_password.submit') }}">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 190px;">Enter Current Password</span>
                </div>
                <input type="text" name='cu_pa' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 190px;">Enter New Password</span>
                </div>
                <input type="text" name='ne_pa' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 190px;">Confirm New Password</span>
                </div>
                <input type="text" name='co_pa' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- /.row -->
        
    </div>

</div><!--  -->
@endsection