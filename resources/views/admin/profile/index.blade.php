@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-2">
                    <h2>Profile</h2>
                </div>
                <div class="col-sm-8">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="col-12">
                            <img src="{{ asset('storage/images/thumbnail/'.$profile->img) }}"
                                 class="profile-image" alt="User Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h3 class="my-3">{{ $profile->first_name. ' ' . $profile->last_name }}</h3>
                        <h5 class="my-3">{{ $profile->job_title }}</h5>
                        <h5 class="my-3">Birthday: {{ $profile->birthday }}</h5>
                    </div>
                </div>

                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="profile-tab" role="tablist">
                            <a class="nav-item nav-link active" id="profile-desc-tab" data-toggle="tab"
                               href="#profile-desc" role="tab" aria-controls="profile-desc" aria-selected="true">Description</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="profile-desc" role="tabpanel"
                             aria-labelledby="product-desc-tab">
                            {{ $profile->description }}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-block">
                        <a class="col-1 card-link"
                           href="{{ route('profile.edit', ["profile" => $profile->id]) }}">Edit Profile</a>
                        <form action="{{ route('profile.destroy', ["profile" => $profile->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
{{--                            <input class="col-1 btn btn-block btn-outline-danger btn-sm" type="submit"--}}
{{--                                   value="Delete">--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
