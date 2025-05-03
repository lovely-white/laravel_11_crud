@extends('layouts.app')
@section('content')
<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror

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

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm your password">
    
    <button type="submit" class="btn btn-primary mt-3">Register</button>
    <br>
    <a href="{{ route('login.index') }}">Already have an account? Login here</a>
</form>

@endsection