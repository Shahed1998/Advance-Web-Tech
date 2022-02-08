@extends('layouts.basic')
@section('content')
    @php
        foreach($courses as $ck=>$cv){
            echo "<br/>";
            foreach($cv as $key=>$value){
                echo "$key = $value";
                echo "<br/>";
            }
        }
        echo "<br/>";
    @endphp
@endsection
