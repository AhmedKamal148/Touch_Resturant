@extends('Admin.Assets.master')
@section('title')
    Setting
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
                                    <h4>Settings</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('admin.settings.update') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="first_address">First Address</label>
                                        <input type="text" name="first_address"
                                               class="form-control @error('first_address') is-invalid @enderror"
                                               id="first_address" value="{{ settings()->first_address ?? '' }}"/>
                                        @error('first_address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="second_address">Second Address</label>
                                        <input type="text" name="second_address"
                                               class="form-control  @error('second_address') is-invalid @enderror"
                                               id="second_address" value="{{ settings()->second_address ?? '' }}"/>
                                        @error('second_address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="opening_hours_1">Opening Hours 1</label>
                                        <input type="text" name="opening_hours_1"
                                               class="form-control  @error('opening_hours_1') is-invalid @enderror"
                                               id="opening_hours_1"
                                               value="{{ settings()->opening_hours_1 ?? '' }}"/>
                                        @error('opening_hours_1')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="opening_hours_2">Opening Hours 2</label>
                                        <input type="text" name="opening_hours_2"
                                               class="form-control  @error('opening_hours_2') is-invalid @enderror"
                                               id="opening_hours_2"
                                               value="{{ settings()->opening_hours_2 ?? '' }}"/>
                                        @error('opening_hours_2')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="contact_phone">Contact Phone</label>
                                        <input type="text" name="contact_phone"
                                               class="form-control  @error('contact_phone') is-invalid @enderror"
                                               id="contact_phone" value="{{ settings()->contact_phone ?? '' }}"/>
                                        @error('contact_phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="contact_email">Contact Email</label>
                                        <input type="text" name="contact_email"
                                               class="form-control  @error('contact_email') is-invalid @enderror"
                                               id="contact_email" value="{{ settings()->contact_email ?? '' }}"/>
                                        @error('contact_email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
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
