@extends('dashboard-layout.master')
@section('title')
All Students -
@endsection
@section('content')
@include('dashboard-layout.style')
<h1>Dashboard</h1>
<div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Class</th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                <tr>
                    <td>{{$student->stud_id}}</td>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->middle_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->date_of_birth}}</td>
                    <td>{{$student->class}}</td>
                    <td>
                        <form action="/student/{{$student->id}}" method="POST">
                            {{method_field('DELETE')}} {{ csrf_field() }}
                            <input type="submit" class="btn btn-sm btn-danger" value="Remove">
                        </form>
                    </td>
                    <td>
                        <a href="/student/manage/{{$student->id}}" class="btn btn-sm btn-success">Report</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10">No Properties.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script>
</script>
@endsection