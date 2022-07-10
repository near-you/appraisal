@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Social Network</h2>
                </div>
                <div class="col-sm-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Social Network</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Social Network</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach( $social_networks as $social_network )
                                <h6 class="card-title"><b>{{ $social_network->social_net_name }}</b></h6>
                                <p class="card-text">{{ $social_network->social_net_link }}</p>
                                <div class="button-block">
                                    <a href="{{ route('social-network.edit', ["social_network" => $social_network->id]) }}" class="card-link">Update</a>
                                    <form action="{{ route('social-network.destroy', ["social_network" => $social_network->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="col-1 btn btn-block btn-outline-danger btn-sm" type="submit" value="Delete">
                                        </form>
                                </div>
                                <hr>
                                <br>
                            @endforeach
                                @if($social_networks->isEmpty() || count($social_networks) < 5 )
                                    <a href="{{ route('social-network.create', ["social_network" => $social_network->id]) }}" class="card-link">Add</a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
