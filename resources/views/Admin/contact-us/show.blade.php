@extends('Admin.Assets.master')

@section('title')
    Contact | Show
@endsection


@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAdmin/assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assetsAdmin/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .show-value {
            background-color: #ddd;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
@endpush

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="row layout-top-spacing mt-5">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Contact Us</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="name">Name</label>
                                    <p class="show-value" id="name">{{ $contact->name }}</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="email">Email</label>
                                    <p class="show-value" id="email">{{ $contact->email }}</p>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="message">Message</label>
                                    <p class="show-value" id="message">{{ $contact->message }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assetsAdmin/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/custom.js') }}"></script>
@endpush
