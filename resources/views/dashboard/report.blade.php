@extends('dashboard-layout.master')
@section('title')
Student Report - 
@endsection
@section('content')
@include('dashboard-layout.style')
<h1>Report</h1>
<div class="table-responsive">
        
        <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th colspan="2" class="text-uppercase">{{$student->first_name}} {{$student->middle_name}} <u>{{$student->last_name}}</u></th>
                    
                </tr>
                <tr>
                        <th colspan="2"  class="text-muted">{{$student->class}}</th>
                        
                    </tr>
                <tr>
                        <th>Subjects</th>
                        <th>Grades</th>
                    </tr>
            </thead>
            <tbody>
                @forelse($reports as $subject)
                <tr>
                                        <td class="text-muted">{{$subject['name']}}</td>
                    <td>{{$subject['grade']}}</td>
                   
                </tr>
                @empty
                <tr>
                    <td colspan="2">No Grades.</td>
                </tr>
                @endforelse
                <tr>
                        <td colspan="2"><button onclick="window.print()">Print</button></td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script>
</script>
@endsection