@extends('dashboard-layout.master')
@section('title')
@endsection
@section('content')
<h1>Dashboard</h1>
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
                <a href="/student/create" class="btn btn-lg btn-success btn-block">Add Student</a>
            </div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<a href="/report/create" class="btn btn-lg btn-secondary btn-block">Create Report</a>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<a href="/student/" class="btn btn-lg btn-dark btn-block text-white">View Students'</a>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<a href="/subject/create" class="btn btn-lg btn-danger btn-block">Add Subjects</a>
	</div>
	</div>
@endsection @section('scripts')
<script>

</script>
@endsection