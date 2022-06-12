@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Social Network</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Social Network</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Edit Social Network</h3>
                </div>

                    <form id="social-network-create" method="POST" action="{{ route('social-network.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputSocialNetworkName">Social Network Name</label>
                            <input type="text" class="form-control @error('social_net_name') is-invalid @enderror" value="{{ old('social_net_name') }}" name="social_net_name" id="inputSocialNetworkName" placeholder="Enter Social Network Name">
                            @error('social_net_name')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputSocialNetworkLink">Social Network Link</label>
                            <input type="text" class="form-control @error('social_net_link') is-invalid @enderror" value="{{ old('social_net_link') }}" name="social_net_link" id="inputSocialNetworkLink" placeholder="Enter Social Network Link">
                            @error('social_net_link')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('social-network.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

