@extends('layouts.admin')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Add A Course . .</h4>
        <br><br>
        <form style="width: 500px;" method="POST" action="{{ route('add_course.submit') }}">
            @csrf

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Semester</span>
                </div>
                <input type="text" name='sem' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Course Code</span>
                </div>
                <input type="text" name="code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Course Title</span>
                </div>
                <input type="text" name='title' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Credit</span>
                </div>
                <input type="text" name='credit' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Description</span>
                </div>
                <textarea type="text" name="desc" cols="56" rows="3"></textarea>
            </div>

            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection