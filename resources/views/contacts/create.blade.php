@extends('layouts.main')

@section('title', 'Add Contact')

@section('content')
    <h2>Add New Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <p style="color:red;">{{ $message }}</p> @enderror

        <button type="submit">Save</button>
    </form>
@endsection