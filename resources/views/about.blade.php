@extends('layouts.front_app')

@section('title', $title)
@section('content')
<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-5 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">About Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>About</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- about section -->
<section class="w3l-about-2 py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 about-2-secs-left">
                <h5 class="small-title mb-2">About Us</h5>
                <h3 class="title-style mb-2">We are crafting your unique business consulting ideas.</h3>
                <p>Consectetur adipiscing elit. Aliquam sit amet
                    efficitur tortor.Uspendisse efficitur orci urna. In et augue ornare in, luctus
                    sapien.</p>
                <ul class="list-about-2 mt-sm-4 mt-3">
                    <li class="py-1"><i class="far fa-check-square"></i>Ut enim ad minim
                        veniam</li>
                    <li class="py-2"><i class="far fa-check-square"></i>Quis nostrud
                        exercitation
                        ullamco
                        laboris</li>
                </ul>
                <a class="btn btn-style mt-lg-5 mt-4" href="services.html">View Our Services</a>
            </div>
            <div class="col-lg-6 about-2-secs-right mt-lg-4 mt-5">
                <img src="{{asset('front/assets/images/about.jpg')}}" alt="" class="img-fluid radius-image" />
            </div>
        </div>
    </div>
</section>
<!-- //about section -->

<!-- features section -->
<section class="w3l-grids-block pb-5 pt-4" id="features">
    <div class="container pb-lg-5 pb-md-4 pb-2">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
            <h5 class="small-title mb-2">Our Features</h5>
            <h3 class="title-style">We Make Your Agency Full Bright</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="bottom-block">
                    <a href="#features" class="d-block">
                        <i class="fas fa-business-time"></i>
                        <h3 class="mt-3 mb-2"> Market Research</h3>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                            rerum perspiciatis?</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 mt-md-0 mt-4">
                <div class="bottom-block">
                    <a href="#features" class="d-block">
                        <i class="fab fa-accusoft"></i>
                        <h3 class="mt-3 mb-2">Startup Business</h3>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                            rerum perspiciatis?</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 mt-lg-0 mt-4">
                <div class="bottom-block">
                    <a href="#features" class="d-block">
                        <i class="fas fa-chart-line"></i>
                        <h3 class="mt-3 mb-2">Business Growth</h3>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                            rerum perspiciatis?</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features section -->

<!-- why choose section -->
<section class="w3l-servicesblock py-5" id="whychoose">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h5 class="small-title mb-2">Why choose us</h5>
                <h3 class="title-style">We Provided Some Of The Good Quality To You</h3>
                <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Non quae, fugiat.</p>
                <div class="row two-grids mt-5 pt-lg-4">
                    <div class="col-sm-6 grids_info d-flex">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="detail ms-3">
                            <h4>Finance Consultant</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids_info d-flex mt-sm-0 mt-4">
                        <i class="far fa-chart-bar"></i>
                        <div class="detail ms-3">
                            <h4>Business Consultant</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 text-end mt-lg-0 mt-5 position-relative">
                <img src="{{asset('front/assets/images/img1.jpg')}}" alt="" class="img-fluid radius-image">
                <div class="imginfo__box">
                    <h6 class="imginfo__title">36+</h6>
                    <p>Years of experience</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //why choose section -->

<!-- progress section -->
<section class="w3l-progress py-5" id="progress">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                <img src="{{asset('front/assets/images/img3.jpg')}}" alt="" class="img-fluid radius-image" />
            </div>
            <div class="col-lg-6 about-2-secs-left ps-xl-5">
                <h5 class="small-title mb-2">Why Choose us</h5>
                <h3 class="title-style mb-sm-3 mb-2">We take care of the Future</h3>
                <p>Consectetur adipiscing elit. Aliquam sit amet
                    efficitur tortor. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunte mollit.</p>
                <div class="w3l-progressblock mt-md-5 mt-4">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Business Planning <span class="">90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Financial Advices <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3 mb-0">
                        <h6 class="progress-tittle">Business Security <span class="">90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //progress section -->

<!-- testimonials section -->
<section class="w3l-index4 py-5" id="testimonials">
    <div class="container py-md-5 py-4">
        <div class="content-slider text-center py-4">
            <div class="clients-slider">
                <div class="mask">
                    <ul>
                        <li class="anim1">
                            <img src="{{asset('front/assets/images/testi1.jpg')}}" class="img-fluid rounded-circle"
                                alt="client image" />
                            <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse
                                    cillum dolore eu. Excepteur sint occaecat cupidatat
                                    non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </q> </blockquote>
                            <div class="source">- Mario Spe</div>
                        </li>

                        <li class="anim2">
                            <img src="{{ asset('front/assets/images/testi2.jpg')}}" class="img-fluid rounded-circle"
                                alt="client image" />
                            <blockquote class="quote"><q>Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo
                                    inventore.
                                </q> </blockquote>
                            <div class="source">- Petey Cru</div>
                        </li>
                        <li class="anim3">
                            <img src="{{asset('front/assets/images/testi3.jpg')}}" class="img-fluid rounded-circle "
                                alt="client image" />
                            <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation.
                                </q> </blockquote>
                            <div class="source">- Anna Sth</div>
                        </li>
                        <li class="anim4">
                            <img src="{{ asset('front/assets/images/testi1.jpg')}}" class="img-fluid rounded-circle"
                                alt="client image" />
                            <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse
                                    cillum dolore eu. Excepteur sint occaecat cupidatat
                                    non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </q> </blockquote>
                            <div class="source">- Gail For</div>
                        </li>
                        <li class="anim5">
                            <img src="{{asset('front/assets/images/testi2.jpg')}}" class="img-fluid rounded-circle"
                                alt="client image" />
                            <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation.
                                </q> </blockquote>
                            <div class="source">- Boye Fra</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials section -->

<!-- team section -->
<section class="w3l-team py-5" id="team">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
            <h5 class="small-title mb-2">Expert People</h5>
            <h3 class="title-style">Our Team Members</h3>
        </div>
        <div class="row text-center">
            <div class="team-info col-md-3 col-6">
                <div class="column position-relative">
                    <a href="#url"><img src="{{ asset('front/assets/images/team1.jpg')}}" alt="" class="img-fluid" /></a>
                </div>
                <h4><a href="#team">John Doe</a></h4>
                <p>CEO & Founder</p>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">
                            <a class="fac" href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a class="twitter" href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>
                            <a class="instagram" href="#url">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-info col-md-3 col-6">
                <div class="column position-relative">
                    <a href="#url"><img src="{{ asset('front/assets/images/team2.jpg')}}" alt="" class="img-fluid" /></a>
                </div>
                <h4><a href="#team">Alexander</a></h4>
                <p>Senior Consultant</p>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">
                            <a class="fac" href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a class="twitter" href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>
                            <a class="instagram" href="#url">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-info col-md-3 col-6 mt-md-0 mt-sm-5 mt-5">
                <div class="column position-relative">
                    <a href="#url"><img src="{{ asset('front/assets/images/team3.jpg')}}" alt="" class="img-fluid" /></a>
                </div>
                <h4><a href="#team">Martin ker</a> </h4>
                <p>Business Advisor</p>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">
                            <a class="fac" href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a class="twitter" href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>
                            <a class="instagram" href="#url">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-info col-md-3 col-6 mt-md-0 mt-sm-5 mt-5">
                <div class="column position-relative">
                    <a href="#url"><img src="{{asset('front/assets/images/team4.jpg')}}" alt="" class="img-fluid" /></a>
                </div>
                <h4><a href="#team">Elizabeth</a></h4>
                <p>Digital Marketer</p>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">
                            <a class="fac" href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a class="twitter" href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>
                            <a class="instagram" href="#url">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team section -->
@endsection
