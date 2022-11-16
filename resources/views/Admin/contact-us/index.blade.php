@extends('Admin.Assets.master')
@section('title')
    Contact | Index
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAdmin/assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assetsAdmin/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>
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
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($contactUs as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ substr($contact->message, 0, 20) }} ...</td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.contact_us.show', $contact) }}"
                                                   class="btn btn-info">
                                                    Show
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">There is no data</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                            {!! $contactUs->links() !!}
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
