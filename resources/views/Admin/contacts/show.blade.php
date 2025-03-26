@extends('Admin.layouts.app')
@section('title', 'Contact Details')
@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Contact Details</h4>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h6>First Name: </h6><p>{{ $contact->first_name }}</p>
                <h6>Last Name:</h6><p>{{ $contact->last_name }}</p>
                <h6>Email:</h6><p>{{ $contact->email }}</p>
                <h6>Subject:</h6><p>{{ $contact->subject }}</p>
                <h6>Message:</h6><p>{{ $contact->message }}</p>
                <h6>Created At:</h6><p>{{ $contact->created_at->format('d M Y') }}</p>
                
                <!-- Back Button Positioned in the Right Corner -->
                <div class="text-start mt-3">
                    <a href="{{ route('contacts.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
