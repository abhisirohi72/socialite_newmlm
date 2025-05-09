@extends('layouts.app')

@section('title', $title)

@section('content')
<style>
    .logo img {
        max-height: 200px !important;
        margin-right: 0px !important;
    }
    .card-title{
        color:#FFF;
    }
</style>
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4" style="background: url({{ asset('assets/img/bg.avif') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    {{-- <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span> --}}
                                    {{-- @if($faviconDetails)
                                        <img src="{{ asset('storage/webiste_setting/' . $faviconDetails->backend_logo) }}" alt="" style="width: 100px; height: 100px;">
                                    @else
                                        <img src="{{ asset('assets/img/logo.png')}}" alt="">
                                    @endif --}}
                                        <img src="{{ asset('assets/img/new_logo.png')}}" alt="" style="width:100px;height:100px;">
                                    {{-- <span class="d-none d-lg-block">{{ $footerDetails->company_name }}</span> --}}
                                </a>
                            </div><!-- End Logo -->

                            <div class="mb-3">

                                <div class="card-body1" style="background: transparent;background-color: #0000003d;">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                    @endif

                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $error }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endforeach
                                    @endif

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small" style="color:#FFF;">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST"
                                        action="{{ route('user.save.register') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="sponsor_id" class="form-label" style="color:#FFF;">Sponser ID</label>
                                            <input type="text" name="sponsor_id" class="form-control" id="sponsor_id"
                                                required onkeyup="getSponsor(this.value)" value="{{ $reference ?? '' }}">
                                            <div class="invalid-feedback" style="color:#FFF;">Please, enter your sponsor id!</div>
                                            <span id="sponsor_email"
                                                class="badge bg-primary mt-2" style="color:#FFF;">{{ $sponsor_email[0] ?? '' }}</span>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourName" class="form-label" style="color:#FFF;">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="yourName" required>
                                            <div class="invalid-feedback" style="color:#FFF;">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPhone" class="form-label" style="color:#FFF;">Your Phone</label>
                                            <input type="text" name="phone" class="form-control" id="yourPhone" required>
                                            <div class="invalid-feedback" style="color:#FFF;">Please, enter your phone!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label" style="color:#FFF;">Your Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" class="form-control" id="yourEmail" required>
                                            </div>
                                            <div class="invalid-feedback" style="color:#FFF;">Please enter a valid Email adddress!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label" style="color:#FFF;">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback" style="color:#FFF;">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms" style="color:#FFF;">I agree and accept the <a
                                                        href="#" style="color:#FFF;">terms and conditions</a></label>
                                                <div class="invalid-feedback" style="color:#FFF;">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0" style="color:#FFF;">Already have an account? <a
                                                    href="{{ route('login') }}">Log
                                                    in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits" style="color: #FFF;">Designed by 
                                <a href="" style="color: #7abfd5;">{{ $footerDetails->company_name }}</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67fe3c369fa5f0190d08fb14/1ioshmdfs';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->