@extends('dashboard-layout.master')
@section('title')
Add Student -
@endsection
@section('content')
@include('dashboard-layout.style')
<h1>Dashboard<small class="text-muted"> Add Student</small></h1>
<form action="/student" method="POST">
    {{ csrf_field() }} @if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="form-group">
            <div class="form-row">
                    <div class="col-md-4">
                        <label for="exampleType">First Name</label>
                        <div class="input-group">
                        <input class="form-control" type="text" 
                        placeholder="Enter First Name" name="first_name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <label for="exampleType">Middle Name</label>
                            <div class="input-group">
                            <input class="form-control" type="text" 
                            placeholder="Enter Middle Name" name="middle_name" required>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                                <label for="exampleType">Last Name</label>
                                <div class="input-group">
                                <input class="form-control" type="text"
                                placeholder="Enter Last Name" name="last_name" required>
                                </div>
                            </div>
                </div>
    </div>
    <div class="form-group">
            <div class="form-row">
                    <div class="col-md-4">
                        <label for="exampleType">Date Of Birth</label>
                        <div class="input-group">
                        <input class="form-control" type="date" "date_of_birth" required>
                        </div>
                    </div>
                </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-4">
                <label for="exampleType">Class</label>
                <div class="input-group">
                <select name="class" class="form-control">
                    <option selected>Select Class</option>
                    <option value="JSS1">JSS1</option>
                    <option value="JSS2">JSS2</option>
                    <option value="JSS3">JSS3</option>
                    <option value="SS1">SS1</option>
                    <option value="SS2">SS2</option>
                    <option value="SS3">SS3</option>
                </select>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{$last_id}}" name="stud_id">
    <input type="hidden" value="" name="property_id">
    <div class="card-footer">
        <!--a- class="btn btn-primary btn-block" href="login.html">Register</a-->
        <input type="submit" value="Add" class="btn btn-secondary btn-block">
    </div>
</form>
@endsection

@section('scripts')
<script>
</script>
@endsection