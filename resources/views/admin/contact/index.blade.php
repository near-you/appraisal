@extends('adminlte::page')


@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Contact</h2>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Contact</h5>
                        </div>
                        <div class="card-body">
                            @foreach( $contacts as $contact )

                                        <h5 class="card-title"><b>Email</b></h5>
                                        <p class="card-text">{{ $contact->email }}</p>

                                        <h6 class="card-title"><b>Phone Number</b></h6>
                                        <p class="card-text">{{ $contact->phone_number }}</p>

                                        <h6 class="card-title"><b>Address</b></h6>
                                        <p class="card-text">{{ $contact->address }}</p>

                            @endforeach
                            @if($contacts->isEmpty())
                                <a href="{{ route('contact.create') }}" class="card-link">Add</a>
                            @endif
                            <a href="#" class="card-link">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
