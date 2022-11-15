@extends('Admin.Assets.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAdmin/assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assetsAdmin/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assetsAdmin/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet"
          type="text/css">

@endsection

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
                                    <h4 class="font-weight-bold">Edit A Meal</h4>
                                </div>
                            </div>
                        </div>
                        {{--Widget-Content--}}
                        <div class="widget-content widget-content-area">
                            <div class="card component-card_6">
                                <div class="card-body">
                                    <form action="{{route('admin.meal.update',$meal)}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        {{--Meal Name--}}
                                        <div class="form-group">
                                            <label for="mealName">Meal Name</label>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control"
                                                   id="mealName"
                                                   value="{{$meal->name}}"
                                                   required>
                                        </div>

                                        {{--  Meal Photo--}}
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       name="image"
                                                       class="custom-file-input"
                                                       id="browseImage">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>

                                        </div>
                                        <div class="form-group image_container d-flex justify-content-center align-items-center p-4">
                                            <img src="{{$meal->image_url}}" width="300px" alt="Meal_photo">
                                        </div>

                                        {{--Meal Time--}}
                                        <div class="form-group">
                                            <label for="mealTime">Meal Time</label>

                                            <select id="mealTime"
                                                    class="selectpicker form-control"
                                                    name="meal_time"
                                                    required>

                                                @foreach($meals_time as $meal_time)
                                                    <option
                                                            @if($meal->meal_time == $meal_time)
                                                                selected
                                                            @endif
                                                            value="{{$meal_time}}">
                                                        {{$meal_time}}
                                                    </option>

                                                @endforeach
                                            </select>

                                        </div>
                                        {{--Update--}}
                                        <div class="form-group d-flex justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-outline-dark btn-rounded  mb-2">
                                                Update
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
    <script src="{{asset('assetsAdmin/assets/js/meal/meal.js') }}"></script>
@endpush