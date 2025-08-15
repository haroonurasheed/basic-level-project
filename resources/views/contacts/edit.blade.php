@extends('layouts.main')

@section('title', 'Edit Contact')

@section('content')
    <h2>Edit Contact</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $contact->name) }}">
        @error('name') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $contact->email) }}">
        @error('email') <p style="color:red;">{{ $message }}</p> @enderror

        <button type="submit">Update</button>
    </form>
@endsection