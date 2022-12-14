@extends('Admin.Assets.master')
@section('title')
    Meal | Edit
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAdmin/assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assetsAdmin/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assetsAdmin/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet"
          type="text/css">
@endpush

@section('content')

    <div id="content" class="main-content">
        <div class="container">
            <div class="row layout-top-spacing mt-5">
                <div id="card_6" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        {{--Widget-Header--}}
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4 class="font-weight-bold">Create A Meal</h4>
                                </div>
                            </div>
                        </div>
                        {{--Widget-Content--}}
                        <div class="widget-content widget-content-area">
                            <div class="card component-card_6">
                                <div class="card-body">
                                    <form action="{{route('admin.meal.store')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--Meal Name--}}
                                        <div class="form-group">
                                            <label for="mealName">Meal Name</label>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control"
                                                   id="mealName"
                                                   value="{{old('name')}}"
                                                   required>
                                            @error('name')
                                            <span class="text-danger my-2">{{$message}}</span>
                                            @enderror
                                        </div>
                                        {{--Meal Photo--}}
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       name="image"
                                                       class="custom-file-input"
                                                       id="browseImage">

                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        @error('image')
                                        <p class="text-danger my-2">{{$message}}</p>
                                        @enderror
                                        <div class="form-group image_container d-flex justify-content-center align-items-center p-4">
                                            <img src="{{asset('images/meals/default.jpg')}}"
                                                 width="300px" alt="meal photo">
                                        </div>
                                        {{--Meal Time--}}
                                        <div class="form-group">
                                            <label for="mealTime">Meal Time</label>
                                            <select id="mealTime" class="selectpicker form-control" name="meal_time"
                                                    required>
                                                <option value="">Please Select Time</option>
                                                <option value="breakfast">BreakFast</option>
                                                <option value="lunch">Lunch</option>
                                                <option value="dinner">Dinner</option>
                                            </select>
                                            @error('meal_time')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror

                                        </div>
                                        {{--submit--}}
                                        <div class="form-group d-flex justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-outline-dark btn-rounded  mb-2">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        {{--Widget-Footer--}}
                        <div class="widget-footer py-3 px-4">
                            <div class="d-flex justify-content-center">
                                <div class="show_meals ">
                                    <a href="{{route('admin.meal.index')}}"
                                       class="btn btn-outline-dark btn-lg btn-rounded">Show
                                        Meals</a>
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
    <script src="{{asset('assetsAdmin/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/meal/meal.js') }}"></script>
@endpush