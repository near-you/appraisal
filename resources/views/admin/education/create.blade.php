@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Add Education</h2>
                </div>
                <div class="col-sm-7">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Education</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add Education</h3>
                </div>
                <form id="work-experience-add" method="POST" action="{{ route('education.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input-specialty">Speciality</label>
                            <input type="text" class="form-control @error('specialty') is-invalid @enderror"
                                   value="{{ old('specialty') }}" name="specialty" id="input-specialty"
                                   placeholder="Enter Speciality">
                            @error('specialty')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-college-name">College Name</label>
                            <input type="text" class="form-control @error('college_name') is-invalid @enderror"
                                   value="{{ old('college_name') }}"
                                   name="college_name" id="input-college-name" placeholder="Enter College Name">
                            @error('college_name')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-from">From (Year)</label>
                            <input type="number" class="form-control @error('from') is-invalid @enderror"
                                   value="{{ old('from') }}"
                                   oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   maxlength="4" minlength="4" name="from" id="input-from"
                                   placeholder="Enter From (Year)">
                            @error('from')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-to">To (Year)</label>
                            <input type="number" class="form-control @error('to') is-invalid @enderror"
                                   value="{{ old('to') }}"
                                   oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   maxlength="4" minlength="4" name="to" id="input-to" placeholder="Enter To (Year)">
                            @error('to')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('education.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


