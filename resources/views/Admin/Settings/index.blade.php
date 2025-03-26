@extends('Admin.layouts.app')
@section('title', 'System Settings')
@section('content')

<style>
    .toast-success {
        color: #ffffff !important;
        background-color: #28a745;
    }

    .toast-success .toast-message {
        color: #ffffff !important;
    }
</style>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>System Settings</h4>
            </div>
        </div>
    </div>

    <!-- Display success message -->
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                toastr.success('{{ session('success') }}');
            });
        </script>
    @endif

    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        @if($settings && $settings->logo)
                            <div class="mb-2">
                                <img src="{{ $settings->logo }}" alt="Logo" style="max-height: 100px;">
                            </div>
                        @endif
                        <input type="file" id="logo" name="logo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control"
                            value="{{ $settings->address ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ $settings->email ?? '' }}">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="email_2" class="form-label">Email_2 Address</label>
                        <input type="email" id="email_2" name="email_2" class="form-control"
                            value="{{ $settings->email_2 ?? '' }}">
                    </div> -->
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" class="form-control"
                            value="{{ $settings->contact_number ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp_number" class="form-label">Whatsapp Number </label>
                        <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control"
                            value="{{ $settings->whatsapp_number ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="url" id="facebook" name="facebook" class="form-control"
                            value="{{ $settings->facebook ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="url" id="twitter" name="twitter" class="form-control"
                            value="{{ $settings->twitter ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="url" id="linkedin" name="linkedin" class="form-control"
                            value="{{ $settings->linkedin ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="url" id="instagram" name="instagram" class="form-control"
                            value="{{ $settings->instagram ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="google_play" class="form-label">Google Play</label>
                        <input type="url" id="google_play" name="google_play" class="form-control"
                            value="{{ $settings->google_play ?? '' }}">
                    </div><div class="mb-3">
                        <label for="play_store" class="form-label">Play Store</label>
                        <input type="url" id="play_store" name="play_store" class="form-control"
                            value="{{ $settings->play_store ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="about_us" class="form-label">About Us</label>
                        <textarea id="about_us" name="about_us" class="form-control"
                            rows="5">{{ $settings->about_us ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection