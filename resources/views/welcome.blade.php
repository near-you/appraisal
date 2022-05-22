@extends('layouts.app')

@section('title', 'Home')

@section('content')

        <div class="container-fluid overcover">
            <div class="container profile-box">
                <div class="row">
                    <div class="col-md-4 left-co">
                        <div class="left-side">
                            @foreach($profiles as $profile)
                            <div class="profile-info">
                                <img src="images/profile.jpg" alt="Profile Photo">
                                <h3>{{ $profile->first_name }} {{ $profile->last_name }}</h3>
                                <span>{{ $profile->job_title }}</span>
                            </div>
                            @endforeach
                            <h4 class="ltitle">Contact</h4>
                            @foreach( $contacts as $contact)
                            <div class="contact-box pb0">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="detail">
                                    {{ $contact->phone_number }}
                                </div>
                            </div>
                            <div class="contact-box pb0">
                                <div class="icon">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <div class="detail">
                                    {{ $contact->email }}
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
                            <ul class="row social-link no-margin">
                                <li><i class="fab fa-facebook-f"></i></li>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-google-plus-g"></i></li>
                                <li><i class="fab fa-linkedin-in"></i></li>
                                <li><i class="fab fa-github"></i></li>
                            </ul>
                            <h4 class="ltitle">Referencess</h4>

                            <div class="refer-cov">
                                <b>Jonney Smith</b>
                                <p>CEO Casinocarol</p>
                                <span>p +00 890 1232 8767</span>
                            </div>
                            <div class="refer-cov">
                                <b>Jonney Smith</b>
                                <p>System Administrator</p>
                                <span>p +00 890 1232 8767</span>
                            </div>
                            <h4 class="ltitle">Hobbies</h4>
                            <ul class="hoby row no-margin">
                                <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                                <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                                <li><i class="fas fa-futbol"></i> <br> Football</li>
                                <li><i class="fas fa-film"></i><br> Movies</li>
                                <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                                <li><i class="fas fa-gamepad"></i> <br> Games</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 rt-div">
                        <div class="rit-cover">
                            @foreach($profiles as $profile)
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
                                            <a href=""><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                            <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Work Experiance</h2>
                            @foreach($workExperiances as $workExperiance)
                            <div class="work-exp">
                                <h6>{{$workExperiance->job_title}} <span>{{ $workExperiance->from }}-{{ $workExperiance->to }}</span></h6>
                                <i>{{ $workExperiance->job_subtitle }}</i>
                                <ul>
                                    <li><i class="far fa-hand-point-right"></i> {{ $workExperiance->job_description }}
                                    </li>
                                </ul>
                            </div>
                            @endforeach

                            <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                            @foreach($educations as $education)
                            <div class="education">
                                <ul class="row no-margin">
                                    <li class="col-md-6"><span>{{ $education->from }} - {{ $education->to }}</span> <br>
                                        {{ $education->college_name }}
                                    </li>
                                </ul>
                            </div>
                             @endforeach
                            <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Skills</h2>
                            <div class="profess-cover row no-margin">
                                <div class="col-md-6">
                                    <div class=" prog-row row">
                                        <div class="col-sm-6">
                                            Photoshop
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 65%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row prog-row">
                                        <div class="col-sm-6">
                                            PHP
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 85%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row prog-row">
                                        <div class="col-sm-6">
                                            Web Design
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row prog-row">
                                        <div class="col-sm-6">
                                            Web Development
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 55%"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </body>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/script.js"></script>


        </html>


@endsection
