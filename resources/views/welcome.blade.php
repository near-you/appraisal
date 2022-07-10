@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side">
                            <div class="profile-info">
                                <img
                                    src="{{ Illuminate\Support\Facades\Storage::url('images/thumbnail/'.$profile->img) }}"
                                    alt="Profile Photo">
                                <h3>{{ $profile->first_name }} {{ $profile->last_name }}</h3>
                                <span>{{ $profile->job_title }}</span>
                            </div>
{{--                        {{ $link =  str_replace('public', '', $_SERVER['DOCUMENT_ROOT'])}}--}}
{{--                        {{dd( $link.('storage/app/public/images/thumbnail/'.$profile->img) )}}--}}
                        <h4 class="ltitle">Contact</h4>
                        @foreach( $contacts as $contact)
                            <div class="contact-box pb0">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="detail">
                                    <a style="color: #ffffff" href="tel:{{ $contact->phone_number }}" class="Blondie">
                                        Call Me </a>
                                </div>
                            </div>
                            <div class="contact-box pb0">
                                <div class="icon">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <div class="detail">
                                    <a style="color: #ffffff" href="mailto:{{ $contact->email }}">Email Me</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="detail">
                                    {{ $contact->address }}
                                </div>
                            </div>
                        @endforeach
                        <h4 class="ltitle">Contact</h4>
                        <ul class="social-link row no-margin">
                            @foreach($social_networks as $social_net)
                                <li><a style="color: #ffffff" href="{{ $social_net->social_net_link }}">{{ $social_net->social_net_name }}</a></li>
                            @endforeach
                        </ul>
                        <h4 class="ltitle">Hobbies</h4>
                            @foreach($hobbies as $hobby)
                                <ul class="hoby row no-margin">
                                    <li>{{ $hobby->hobbies_title }}</li>
                                </ul>
                            @endforeach
                    </div>
                </div>

                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                            <div class="hotkey">
                                <h1 class="">{{ $profile->first_name }} {{ $profile->last_name }}</h1>
                                <small>{{ $profile->job_title }}</small>
                            </div>
                            <h2 class="rit-titl"><i class="far fa-user"></i> Profile</h2>
                            <div class="about">
                                <p>{{ $profile->description }}</p>
                                <div class="btn-ro row no-margin">
                                    <ul class="btn-link">
                                        <li>
                                            <a href=""><i class="fas fa-paper-plane"></i> Hire Me</a>
                                        </li>
                                        <li>
                                            <a href="{{route('pdf')}}"><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Work Experience</h2>
                        @foreach($workExperiences as $workExperience)
                            <div class="work-exp">
                                <h6>{{$workExperience->job_title}}
                                    <span>{{ $workExperience->from }}-{{ $workExperience->to }}</span></h6>
                                <i>{{ $workExperience->job_subtitle }}</i>
                                <ul>
                                    <li><i class="far fa-hand-point-right"></i> {{ $workExperience->job_description }}
                                    </li>
                                </ul>
                            </div>
                        @endforeach

                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                            <div class="education">
                                <ul class="row no-margin">
                                    @foreach($educations as $education)
                                    <li class="col-md-6"><span>{{ $education->from }} - {{ $education->to }}</span> <br>
                                        {{ $education->college_name }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Skills</h2>

                        @foreach($skills as $skill)
                            <div class="profess-cover row no-margin">
                                <div class="tech-skills">
                                    <h6>{{ $skill->technical_skills }}</h6>
                                    <ul>
                                        <li><i class="far fa-hand-point-right"></i> {{ $skill->technical_skills_desc }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="profess-cover row no-margin">
                                <div class="soft-skills">
                                    <h6>{{ $skill->soft_skills }}</h6>
                                    <ul>
                                        <li><i class="far fa-hand-point-right"></i> {{ $skill->soft_skills_desc }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


