@extends('dashboard-layout.master')
@section('title')
Grades -
@endsection
@section('content')
@include('dashboard-layout.style')
<h1>Dashboard</h1>

<h2 class="text-muted">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</h2>
<h3>{{$student->class}}</h3>

<div class="row">
        <div class="col-md-6">
    <form action="/report" method="POST">
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
                        <label for="exampleType">Subject</label>
                        <div class=" input-group">
                        <select name="subject_id" class="form-control" required>
                                <option>Select Subject</option>
                                @forelse($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                        
                                @empty
                <option>No Subjects</option>
                @endforelse
                            </select>
                        </div></div>
        </div>
        <div class="form-group">
                <div class="form-row">
                        <label for="exampleType">Grade</label>
                        <div class=" input-group">
                                <select name="grade" class="form-control" required>
                                        <option selected>Select Grade</option>
                                        <option value="A1">A1</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="C4">C4</option>
                                        <option value="C5">C5</option>
                                        <option value="C6">C6</option>
                                        <option value="D7">D7</option>
                                        <option value="E8">E8</option>
                                        <option value="F9">F9</option>
                                    </select>
                        </div></div>
        </div>
    
        <input type="hidden" value="{{$student->class}}" name="class">
        <input type="hidden" value="{{$student->id}}" name="student_id">
        <div class="card-footer">
            <!--a- class="btn btn-primary btn-block" href="login.html">Register</a-->
            <input type="submit" value="Add" class="btn btn-secondary btn-block">
        </div>
    </form>
    </div>
    <div class="col-md-6">
            <div class="table-responsive">
                    <a href="/student/report/{{$student->id}}" class="btn btn-sm btn-dark pull-right">Generate Report</a>
                    <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Subject ID</th>
                                <th>Name</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reports as $subject)
                            <tr>
                                <td>{{$subject['id']}}</td>
                                <td>{{$subject['name']}}</td>
                                <td>{{$subject['grade']}}</td>
                                <td>
                                    <form action="/student/remove" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{$subject['subject_id']}}" name="subject_id">
                                        <input type="hidden" value="{{$subject['student_id']}}" name="student_id">
                                        <input type="hidden" value="{{$subject['class']}}" name="class">
                                        <input type="submit" class="btn btn-sm btn-danger" value="Remove">
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10">No Grades.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
    </div>
    </div>
@endsection

@section('scripts')
<script>
</script>
@endsection