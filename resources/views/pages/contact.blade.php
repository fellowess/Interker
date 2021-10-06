@extends('layouts.master_home')

@section('home_content')

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>
                        {{__('home.contact')}}
                    </h2>
                    <ol>
                        <li><a href="{{url('/')}}">
                                {{__('home.home')}}
                        </a></li>
                        <li>
                            {{__('home.contact')}}
                        </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- ======= Contact Section ======= -->
        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.310787430938!2d20.39063324800881!3d47.91102368323337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47408d8dfe29da07%3A0x2547a25b4c9f6201!2sInterker-Wein%20Kft.!5e0!3m2!1shu!2shu!4v1632511760633!5m2!1shu!2shu" style="border:0; width: 100%; height: 350px;" frameborder="0" allowfullscreen loading="lazy"></iframe>
        <section id="contact" class="contact">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="icofont-google-map"></i>
                                    <h4>
                                        {{__('home.location')}}
                                    </h4>
                                    <p>{{$contacts->address}}</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="icofont-envelope"></i>
                                    <h4>E-mail:</h4>
                                    <p>{{$contacts->email}}</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="icofont-phone"></i>
                                    <h4>
                                        {{__('home.phone')}}
                                    </h4>
                                    <p>{{$contacts->phone}}</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <table class="table table-striped table table-bordered" style="width:350px;">
                        <thead class="thead">
                        <th>Day</th>
                        <th>Hours</th>
                        </thead>
                        <tbody class="table table-striped">
                        <tr>
                            <td>Monday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="{{route('contact.form')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control"
                                           placeholder="{{__('contactPage.name')}}"
                                    />

                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email"
                                           placeholder="{{__('contactPage.email')}}"
                                    />

                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject"
                                       placeholder="{{__('contactPage.subject')}}"
                                />

                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5"
                                          placeholder="{{__('contactPage.message')}}"
                                ></textarea>

                            </div>
                            <div class="text-center"><button class="btn btn-default" type="submit">
                                    {{__('contactPage.send_message')}}
                            </button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

@endsection
