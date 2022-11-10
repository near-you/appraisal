@extends('adminlte::page')


@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-2">
                    <h2>Hobbies</h2>
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
                        <li class="breadcrumb-item active">Hobbies</li>
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
                            <h3 class="card-title">Hobbies</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach( $hobbies as $hobby )

                                <h6 class="card-title"><b>Hobby</b></h6>
                                <p class="card-text">{{ $hobby->hobbies_title }}</p>

                                <a href="{{ route('hobbies.edit', ["hobby" => $hobby->id]) }}"
                                   class="card-link">Update</a>
                                <form
                                    action="{{ route('hobbies.destroy', ["hobby" => $hobby->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="col-1 btn btn-block btn-outline-danger btn-sm" type="submit"
                                           value="Delete">
                                </form>
                                <br>
                                <hr>
                            @endforeach
                            @if(count($hobbies) <= 6)
                                <a href="{{ route('hobbies.create') }}" class="card-link">Add</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


