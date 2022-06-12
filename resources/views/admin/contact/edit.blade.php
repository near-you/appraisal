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
                        <li class="breadcrumb-item active">Edit Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Edit Contact</h3>
                </div>
                <form id="contact-update" method="POST" action="{{ route('contact.update', ["contact" => $contact->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputPhoneNumber">Phone Number</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') ?? $contact->phone_number }}" name="phone_number" id="inputPhoneNumber" placeholder="Enter Phone Number">
                            @error('phone_number')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $contact->email }}" name="email" id="inputPhoneNumber" placeholder="Enter Email">
                            @error('email')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                      id="inputAddress"
                                      placeholder="Enter Address">{{ old('address') ?? $contact->address }}</textarea>
                            @error('address')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
