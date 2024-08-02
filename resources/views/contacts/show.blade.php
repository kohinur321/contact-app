@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Details</h1>

        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Address:</strong> {{ $contact->address }}</p>

        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
