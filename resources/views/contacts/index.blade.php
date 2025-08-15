@extends('layouts.main')

@section('title', 'Contacts')

@section('content')
    <h2>Contact List</h2>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('contacts.create') }}">Add Contact</a>

    <ul>
        @foreach($contacts as $contact)
            <li>
                {{ $contact->name }} - {{ $contact->email }}
                <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this contact?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
