@extends('layout')


@section('content')

<div class="section-box">
    <div class="new-item">
        <h3>Registra un nuovo manutentore</h3>
        <form action="/register" method="POST">

            @csrf

            <input type="text" name="name" placeholder="Nome" value="{{old('name')}}" required><br><br>
            @error('name')
                <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" name="username" placeholder="Username" value="{{old('username')}}" required><br><br>
            @error('username')
                <p style="color: red">{{$message}}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" required><br><br>
            @error('password')
                <p style="color: red">{{$message}}</p>
            @enderror

            <input type="hidden" name="is_admin" value=0>

            <input type="submit" value="Registra">
            

        </form>
    </div>
</div>


    
@endsection



