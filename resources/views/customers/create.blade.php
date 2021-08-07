@extends('layouts.app')

@section('content')
    <h1>Create New Customer</h1>
    <form action="{{ route('customers.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" value="{{ old('full_name') }}">
        @error('full_name')
            <span class="invalid-feedback" role="alert">
                <p>{{ $message }}</p>
            </span>
        @enderror
        <br>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" value="{{ old('phone_name') }}">
        <br>
        @error('phone_number')
        <span class="invalid-feedback" role="alert">
                <p>{{ $message }}</p>
            </span>
        @enderror
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
        <br>
        @error('email')
        <span class="invalid-feedback" role="alert">
                <p>{{ $message }}</p>
            </span>
        @enderror
        <label for="profile_img">Profile Image</label>
        <input type="file" name="profile_img" value="{{ old('profile_img') }}">
        <br>
        @error('profile_img')
        <span class="invalid-feedback" role="alert">
                <p>{{ $message }}</p>
            </span>
        @enderror
        <input type="submit" value="Submit">
    </form>
@stop