@extends('Admin.Assets.master')

@section('title')
    Meal | Index
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAdmin/assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assetsAdmin/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assetsAdmin/assets/css/elements/custom-pagination.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('content')

    <div id="content" class="main-content">
        <div class="container">
            <div class="row layout-top-spacing mt-5">
                {{--meal Card--}}
                <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        {{--Widget-Header--}}

                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Meal</h4>
                                </div>
                            </div>
                        </div>
                        {{--Widget-Content--}}

                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Meal Time</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($meals as $meal)
                                        <tr class="text-center">
                                            <td class="font-weight-bold text-capitalize">{{$meal->name}}</td>
                                            <td>
                                                <img src="{{asset("$meal->image_url")}}" class="img-thumbnail"
                                                     width="80px">
                                            </td>
                                            <td class="font-weight-bold text-capitalize">
                                                {{$meal->meal_time}}
                                            </td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li>
                                                        <a class="btn btn-default"
                                                           href="{{route('admin.meal.edit',[$meal])}}"
                                                           data-toggle="tooltip"
                                                           data-placement="top"
                                                           data-original-title="Edit">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24"
                                                                 viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round"
                                                                 class="feather feather-edit-2">
                                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{route('admin.meal.destroy',$meal)}}"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger" type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24"
                                                                     viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor"
                                                                     stroke-width="2" stroke-linecap="round"
                                                                     stroke-linejoin="round"
                                                                     class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">
                                                No Data Found
                                            </td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        {{--Widget-Footer--}}
                        <div class="widget-footer py-3 px-4">
                            <div class="d-flex justify-content-between">
                                <div class="meal_links"> {{$meals->links()}}</div>
                                <div class="create_meal">
                                    <a href="{{route('admin.meal.create')}}" class="btn btn-lg btn-rounded">Create
                                        Meal</a>
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
    <script src="{{asset('assetsAdmin/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/custom.js') }}"></script>

@endpush
