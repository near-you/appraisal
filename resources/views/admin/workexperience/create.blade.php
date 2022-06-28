@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Add Work Experience</h2>
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
                        <li class="breadcrumb-item active">Add Work Experience</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add Work Experience</h3>
                </div>
                <form id="work-experience-add" method="POST" action="{{ route('work-experience.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputJobTitle">Job Title</label>
                            <input type="text" class="form-control @error('job_title') is-invalid @enderror"
                                   value="{{ old('job_title') }}" name="job_title" id="inputJobTitle"
                                   placeholder="Enter Job Title">
                            @error('job_title')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputJobSubTitle">Job Subtitle</label>
                            <input type="text" class="form-control @error('job_subtitle') is-invalid @enderror"
                                   value="{{ old('job_subtitle') }}"
                                   name="job_subtitle" id="inputJobSubTitle" placeholder="Enter Job Subtitle">
                            @error('job_subtitle')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputFrom">From (Year)</label>
                            <input type="number" class="form-control @error('from') is-invalid @enderror"
                                   value="{{ old('from') }}"
                                   oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   maxlength="4" minlength="4" name="from" id="inputFrom"
                                   placeholder="Enter From (Year)">
                            @error('from')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputTo">To (Year)</label>
                            <input type="number" class="form-control @error('to') is-invalid @enderror"
                                   value="{{ old('to') }}"
                                   oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   maxlength="4" minlength="4" name="to" id="inputTo" placeholder="Enter To (Year)">
                            @error('to')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputJobDescription">Job Description</label>
                            <textarea class="form-control @error('job_description') is-invalid @enderror"
                                      name="job_description"
                                      id="inputJobDescription"
                                      placeholder="Enter Job Description">{{ old('job_description') }}</textarea>
                            @error('job_description')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('work-experience.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

