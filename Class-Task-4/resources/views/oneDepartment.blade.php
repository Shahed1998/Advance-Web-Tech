@extends('layouts.base')
@section('content')
    <h3>Department: {{$deptInfo->name}}</h3>
    <h5 style="color:green;">Student's list</h5>
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Student's name</th>
                <th scope="col">Student's id</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach($studentInfo as $student)
                <tr>
                    @php 
                    $studentID = encrypt($student->id);
                    @endphp
                    <td><a href="{{route('one.student', ['id'=>$studentID])}}">{{$student->name}}</a></td>
                    <td>{{$student->user_id}}</td>
                </tr>
                @endforeach
            
        </tbody>
    </table>
@endsection
