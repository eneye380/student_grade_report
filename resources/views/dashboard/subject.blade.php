@extends('dashboard-layout.master')
@section('title')
Add Subject -
@endsection
@section('content')
@include('dashboard-layout.style')
<h1>Dashboard<small class="text-muted"> Add Subject</small></h1>
<div class="row">
    <div class="col-md-6">
<form action="/subject" method="POST">
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
                    <div class="col-md-12">
                        <label for="exampleType">Subject Name</label>
                        <div class="input-group">
                        <input class="form-control" type="text" 
                        placeholder="Enter Subject Name" name="name" required>
                        </div>
                    </div>
                    </div>
    </div>

    <input type="hidden" value="{{$last_id}}" name="sub_id">
    <input type="hidden" value="" name="property_id">
    <div class="card-footer">
        <!--a- class="btn btn-primary btn-block" href="login.html">Register</a-->
        <input type="submit" value="Add" class="btn btn-secondary btn-block">
    </div>
</form>
</div>
<div class="col-md-6">
        <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Subject ID</th>
                            <th>Name</th>
                            <th></th>
                            <!--th></th-->
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subjects as $subject)
                        <tr>
                            <td>{{$subject->sub_id}}</td>
                            <td>{{$subject->name}}</td>
                            <td>
                                <form action="/subject/{{$subject->id}}" method="POST">
                                    {{method_field('DELETE')}} {{ csrf_field() }}
                                    <input type="submit" class="btn btn-sm btn-danger" value="Remove">
                                </form>
                            </td>
                            <!--td>
                                <a href="/dashboard/subject/manage/{{$subject->id}}" class="btn btn-sm btn-primary">Manage</a>
                            </td-->
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No Properties.</td>
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