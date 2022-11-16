@extends('Admin.Assets.master')
@section('title')
    Category | Edit
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="row layout-top-spacing mt-5">
                <form class="simple-example" action="{{ route('admin.category.update', $category) }}" method="post"
                      novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   id="fullName" placeholder="" value="{{ old('name', $category->name) }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please fill the name
                            </div>
                            @error('name')
                            <div class="alert alert-danger mt-1" role="alert">
                                <h4 class="alert-heading">{{ trans('action.danger') }}</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary submit-fn mt-2" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
