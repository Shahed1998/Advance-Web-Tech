@extends('layouts.base')
@section('content')
    <table class="table table-bordered border-dark">
        <tr>
            <th scope="row">Name:</th>
            <td>{{$infos->name}}</td>
        </tr>
        <tr>
            <th scope="row">User name:</th>
            <td>{{$infos->student_credentials->user_name}}</td>
        </tr>
        <tr>
            <th scope="row">ID:</th>
            <td>{{$infos->user_id}}</td>
        </tr>
        <tr>
            <th scope="row">CGPA:</th>
            <td>{{$infos->cgpa}}</td>
        </tr>
        <tr>
            <th scope="row">Semester:</th>
            <td>{{$infos->semester}}</td>
        </tr>
        <tr>
            <th scope="row">Department:</th>
            <td>{{$infos->department->name}}</td>
        </tr>
    </table>

    <h2>Enrolled Courses</h2>
    <table class="table table-bordered border-dark">
        <tr>
            <th scope="row">Name</th>
            <th scope="row">Department</th>
            <th scope="row">Faculty</th>
        </tr>
        @foreach($infos->courses_student as $course)
        <tr>
            <td>{{$course->courses->name}}</td>
            <td>{{$course->courses->department->name}}</td>
            <td>{{$course->courses->course_teacher[0]->teachers->name}}</td>
        </tr>
        @endforeach
        
    </table>
@endsection
