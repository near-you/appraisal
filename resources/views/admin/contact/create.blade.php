@extends('adminlte::page')


@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form id="contact" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="card card-gray-dark">
                    <div class="card-header">
                        <h3 class="card-title">Contact</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" id="exampleInputEmail"
                                   placeholder="Enter email" required autocomplete="email">
                            @error('email')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Phone number</label>
                            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                                   inputmode="text" placeholder="(___) ___-____" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="address" id="inputClientCompany" class="form-control @error('address') is-invalid @enderror" value="{{ old('phone_number') }}">
                            @error('address')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-md-6">
            <form id="social" action="{{ route('socialnetwork.store') }}" method="post">
                @csrf
                <div class="card card-gray-dark">
                    <div class="card-header">
                        <h3 class="card-title">Social Network</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="inputSocialNetwork">Name Social Network</label>
                                    <input type="text" id="inputClientCompany" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="inputSocialNetwork">Link Social Network</label>
                                    <input type="text" id="inputClientCompany" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" form="contact" value="Save contact" class="btn btn-success float-right">
        </div>
    </div>


@endsection

