@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Education</h2>
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
                        <li class="breadcrumb-item active">Education</li>
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
                            <h3 class="card-title">Education</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach( $educations as $education)

                                <h6 class="card-title"><b>Speciality</b></h6>
                                <p class="card-text">{{ $education->specialty }}</p>

                                <h6 class="card-title"><b>College Name</b></h6>
                                <p class="card-text">{{ $education->college_name }}</p>

                                <h6 class="card-title"><b>From (Year)</b></h6>
                                <p class="card-text">{{ $education->from }}</p>

                                <h6 class="card-title"><b>To (Year)</b></h6>
                                <p class="card-text">{{ $education->to }}</p>

                                @if(count($educations) >= 1 || count($educations) <= 4)
                                    <a href="{{ route('education.create') }}" class="card-link">Add</a>
                                @endif
                                <a href="{{ route('education.edit', ["education" => $education->id]) }}" class="card-link">Update</a>
                                <form action="{{ route('education.destroy', ["education" => $education->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="col-1 btn btn-block btn-outline-danger btn-sm" type="submit" value="Delete">
                                </form>
                                <hr>
                                <br>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

