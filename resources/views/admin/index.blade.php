@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Dashboard</h2>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="card-body">
                            @foreach( $profiles as $profile )

                                <h6 class="card-title"><b>First Name</b></h6>
                                <p class="card-text">{{ $profile->first_name }}</p>

                                <h6 class="card-title"><b>Last Name</b></h6>
                                <p class="card-text">{{ $profile->last_name }}</p>

                                <h6 class="card-title"><b>Desired role</b></h6>
                                <p class="card-text">{{ $profile->job_title }}</p>

                                <h6 class="card-title"><b>Summary</b></h6>
                                <p class="card-text">{{ $profile->description }}</p>
                            @endforeach
                            @if( $profiles->isEmpty() )
                                <a href="{{ route('contact.create') }}" class="card-link">Add</a>
                            @endif
                            <a href="#" class="card-link">Update</a>
                        </div>
                    </div>

                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Social Network</h5>
                        </div>
                        <div class="card-body">
                            @foreach( $social_networks as $social_network )
                                <h6 class="card-title"><b>{{ $social_network->social_net_name }}</b></h6>
                                <p class="card-text">{{ $social_network->social_net_link }}</p>
                            @endforeach
                            @if(!$social_networks->isEmpty())
                                <a href="{{ route('contact.create') }}" class="card-link">Add</a>
                            @endif
                            <a href="#" class="card-link">Update</a>
                        </div>
                    </div>
                </div>

                {{-- Contact group --}}
                <div class="col-lg-6">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Contact</h5>
                        </div>
                        <div class="card-body">
                            @foreach( $contacts as $contact )
                                <h6 class="card-title"><b>Email</b></h6>
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
                            @foreach( $educations as $education )

                                <h6 class="card-title"><b>Speciality</b></h6>
                                <p class="card-text">{{ $education->speciality }}</p>

                                <h6 class="card-title"><b>College</b></h6>
                                <p class="card-text">{{ $education->college_name }}</p>

                                <h6 class="card-title"><b>From</b></h6>
                                <p class="card-text">{{ $education->from }}</p>

                                <h6 class="card-title"><b>To</b></h6>
                                <p class="card-text">{{ $education->to }}</p>
                                <hr>

                            @endforeach
                            @if(!$social_networks->isEmpty())
                                <a href="{{ route('contact.create') }}" class="card-link">Add</a>
                            @endif
                            <a href="#" class="card-link">Update</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Work Expiriance</h5>
                        </div>

                        <div class="card-body">
                            <div class="row">

                                    @foreach( $workExperiances as $workExpiriance )
                                    <div class="col-sm-6">
                                        <h6 class="card-title"><b>Job title</b></h6>
                                        <p class="card-text">{{ $workExpiriance->job_title }}</p>

                                        <h6 class="card-title"><b>Job subtitle</b></h6>
                                        <p class="card-text">{{ $workExpiriance->job_subtitle }}</p>

                                        <h6 class="card-title"><b>From</b></h6>
                                        <p class="card-text">{{ $workExpiriance->from }}</p>

                                        <h6 class="card-title"><b>to</b></h6>
                                        <p class="card-text">{{ $workExpiriance->to }}</p>

                                        <h6 class="card-title"><b>Job description</b></h6>
                                        <p class="card-text">{{ $workExpiriance->job_description }}</p>
                                    </div>
                                    @endforeach

                            </div>
                            @if(!$social_networks->isEmpty())
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

