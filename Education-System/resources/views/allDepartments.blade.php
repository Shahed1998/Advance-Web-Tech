@extends('layouts.base')
@section('content')

    <table class="table table-bordered border-dark">
        @foreach($departments as $dept)
        <tr>
            <th scope="row">Name:</th>
            <td><a href="{{route('one.department', ['id'=>encrypt($dept->id)])}}">{{$dept->name}}</a></td>
        </tr>
        @endforeach
    </table>

@endsection