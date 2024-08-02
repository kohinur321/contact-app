@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contacts</h1>

        <form action="{{ route('contacts.index') }}" method="GET" class="mb-3">
            <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>

        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Create New Contact</a>

        <table class="table">
            <thead>
                <tr>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'name']) }}">Name</a></th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'created_at']) }}">Created At</a></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact) }}">View</a>
                            <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $contacts->links() }}
    </div>
@endsection
