@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Work Experience</h2>
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
                        <li class="breadcrumb-item active">Work Experience</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Work Experience</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach( $work_experiences as $work_experience )

                                <h6 class="card-title"><b>Job Title</b></h6>
                                <p class="card-text">{{ $work_experience->job_title }}</p>

                                <h6 class="card-title"><b>Job Subtitle</b></h6>
                                <p class="card-text">{{ $work_experience->job_subtitle }}</p>

                                <h6 class="card-title"><b>From (Year)</b></h6>
                                <p class="card-text">{{ $work_experience->from }}</p>

                                <h6 class="card-title"><b>To (Year)</b></h6>
                                <p class="card-text">{{ $work_experience->to }}</p>

                                <h6 class="card-title"><b>Description</b></h6>
                                <p class="card-text">{{ $work_experience->job_description }}</p>

                                <a href="{{ route('work-experience.edit', ["work_experience" => $work_experience->id]) }}" class="card-link">Update</a>
                                <form action="{{ route('work-experience.destroy', ["work_experience" => $work_experience->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="col-1 btn btn-block btn-outline-danger btn-sm" type="submit" value="Delete">
                                </form>
                                <hr>
                                <br>

                            @endforeach
                                @if(count($work_experiences) >= 1 || count($work_experiences) <= 5)
                                    <a href="{{ route('work-experience.create') }}" class="card-link">Add</a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
