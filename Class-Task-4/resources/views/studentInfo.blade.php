@extends('layouts.base')
@section('content')
    <table class="table table-bordered border-dark">
        <tr>
            <th scope="row">Name:</th>
            <td>{{$infos->name}}</td>
        </tr>
        <tr>
            <th scope="row">ID:</th>
            <td>{{$infos->user_id}}</td>
        </tr>
        <tr>
            <th scope="row">Username: </th>
            <td>{{$infos->password}}</td>
        </tr>
        <tr>
            <th scope="row">Date of birth:</th>
            <td>{{$infos->dob}}</td>
        </tr>
        <tr>
            <th scope="row">CGPA:</th>
            <td>{{$infos->cgpa}}</td>
        </tr>
        <tr>
            <th scope="row">Department:</th>
            <td>{{$infos->department->name}}</td>
        </tr>
    </table>
@endsection
