@extends('layouts.app')
@section('content')

<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}">
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
    @error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary mt-3">Login</button>
    <br>
    <a href="{{ route('register.index') }}">Don't have an account? Register here</a>
</form>

@endsection