@extends('layouts.home')
@section('content')

    @if(Session::has('message'))
        <span class="message" style="color:red">
            {{Session::get('message')}}
        </span>
    @endif
    
    <form action="" method="post">
        {{@csrf_field()}}
        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="uname" id="" value="{{old('uname')}}"></td>
                <td>
                    @error('uname')
                        {{$message}}
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="upass" id="" value="{{old('upass')}}"></td>
                <td>
                    @error('upass')
                        {{$message}}
                    @enderror
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="login" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
@endsection
