@section('title')
    User Account Settings
@endsection

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/plugins/dropify/dropify.min.css')}}">
    <link href="{{asset('assetsAdmin/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@extends('Admin.Assets.master')


@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                         data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="general-info" class="section general-info" method="post"
                                      action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <input type="file" name="image" id="input-file-max-fs"
                                                                   class="dropify"
                                                                   data-default-file="{{asset('assetsAdmin/assets/img/200x200.jpg')}}"
                                                                   data-max-file-size="2M"/>
                                                            <p class="mt-2"><i
                                                                        class="flaticon-cloud-upload mr-1"></i>
                                                                Upload Picture</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Full Name</label>
                                                                        <input type="text" name="name"
                                                                               class="form-control mb-4"
                                                                               value="{{auth()->user()->name}}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="text" name="email"
                                                                       class="form-control mb-4"
                                                                       value="{{auth()->user()->email}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="text" name="phone"
                                                                       class="form-control mb-4"
                                                                       value="{{auth()->user()->phone}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" name="password"
                                                                       class="form-control mb-4">
                                                            </div>

                                                            <input class="btn btn-primary" type="submit"
                                                                   value="Save">

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@push('js')

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{asset('assetsAdmin/plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('assetsAdmin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{asset('assetsAdmin/assets/js/users/account-settings.js')}}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

@endpush
