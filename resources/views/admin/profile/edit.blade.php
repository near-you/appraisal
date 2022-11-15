@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-2">
                    <h2>Edit Profile</h2>
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
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('profile.update', ["profile" => $profile->id]) }}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">

                <label for="firstName">First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                       value="{{ old('first_name') ?? $profile->first_name }}" name="first_name" id="firstName"
                       placeholder="Enter First Name">
                @error('first_name')
                <br>
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                       value="{{ old('last_name') ?? $profile->last_name }}" name="last_name"
                       id="lastName" placeholder="Enter Last Name">
                @error('last_name')
                <br>
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="jobTitle">Job Title</label>
                <input type="text" class="form-control @error('job_title') is-invalid @enderror"
                       value="{{ old('job_title') ?? $profile->job_title }}" name="job_title" id="jobTitle"
                       placeholder="Enter Job Title">
                @error('job_title')
                <br>
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input inputmode="numeric" type="date"  class="form-control @error('birthday') is-invalid @enderror"
                       value="{{ old('birthday') ?? $profile->birthday }}" name="birthday"
                       id="birthday" placeholder="Enter Birthday">
                @error('birthday')
                <br>
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                          id="description"
                          placeholder="Enter Description">{{ old('description') ?? $profile->description }}</textarea>
                @error('description')
                <br>
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputFile">Current User Image</label>
                <div class="col-4">
                    <img
                        src="{{ asset('storage/images/thumbnail/'.$profile->img) }}"
                        class="user-image" alt="User Photo">
                </div>
                <label for="inputFile">Upload New Profile Photo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="img"
                               class="custom-file-input @error('img') is-invalid @enderror"
                               id="inputFile">
                        <label class="custom-file-label" for="inputFile">Choose file</label>
                    </div>
                </div>
                @error('img')
                <br>
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
