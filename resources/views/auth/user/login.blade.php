@extends('layouts.app')

@section('title', $title)

@section('content')
    <style>
        .logo img {
            max-height: 200px !important;
            margin-right: 0px !important;
        }

        .card-title {
            color: #FFF;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/ethers@5.7.2/dist/ethers.umd.min.js"></script>
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4"
                style="background: url({{ asset('assets/img/bg.avif') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    {{-- <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span> --}}
                                    {{-- @if ($faviconDetails)
                                        <img src="{{ asset('storage/webiste_setting/' . $faviconDetails->backend_logo) }}" alt="" style="width: 100px; height: 100px;">
                                    @else
                                        <img src="{{ asset('assets/img/logo.png')}}" alt="">
                                    @endif --}}
                                    <img src="{{ asset('assets/img/new_logo.png') }}" alt=""
                                        style="width:100px;height:100px;">
                                    {{-- <span class="d-none d-lg-block">{{ $footerDetails->company_name }}</span> --}}
                                </a>
                            </div><!-- End Logo -->

                            <div class="mb-3">

                                <div class="card-body1" style="background: transparent;background-color: #0000003d;">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small" style="color:#FFF;">Enter your username & password to
                                            login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('user.login') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label" style="color:#FFF;">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control" id="yourEmail"
                                                    required>
                                                <div class="invalid-feedback" style="color:#FFF;">Please enter your email.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label"
                                                style="color:#FFF;">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback" style="color:#FFF;">Please enter your password!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe"
                                                    style="color:#FFF;">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"
                                                name="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0" style="color:#FFF;">Don't have account? <a
                                                    href="{{ route('user.register') }}" style="color:#7abfd5;">Create
                                                    an account</a></p>
                                            <a class="small mb-0" href="{{ route('password.request') }}"
                                                style="color:#7abfd5;">Forgot Password?</a>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('assets/img/MetaMask.png') }}" alt=""
                                                style="width: 100px;height:100px;cursor:pointer;" onclick="loginWithMetaMask()">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset('assets/img/wallet_connect.jpeg') }}" alt=""
                                                style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <img src="{{ asset('assets/img/trust_wallet.jpg') }}" alt=""
                                                style="width: 100px;height:100px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="credits" style="color: #FFF;">Designed by
                                <a href="" style="color: #7abfd5;">{{ $footerDetails->company_name ?? ''}}</a>
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
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/67fe3c369fa5f0190d08fb14/1ioshmdfs';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    async function loginWithMetaMask() {
        if (typeof window.ethereum === 'undefined') {
            if (/Android|iPhone/i.test(navigator.userAgent)) {
                // Try to open inside MetaMask app
                // const callbackUrl = 'https://ethereumworld.online/web3-login';
                // window.location.href = `https://metamask.app.link/dapp/ethereumworld.online?redirect_uri=${encodeURIComponent(callbackUrl)}`;
                const callbackUrl = 'https://alphabotapi.com/web3-login';
                window.location.href =
                    `https://metamask.app.link/dapp/127.0.0.1:8000?redirect_uri=${encodeURIComponent(callbackUrl)}`;
            } else {
                alert('MetaMask is not installed!');
            }
            return;
        }

        // try {
        //     const provider = new ethers.providers.Web3Provider(window.ethereum);
        //     await provider.send("eth_requestAccounts", []);

        //     const signer = provider.getSigner();
        //     const address = await signer.getAddress();
        //     const message = "Login to MyApp at " + new Date().toISOString();
        //     const signature = await signer.signMessage(message);

        //     // Send AJAX request to Laravel backend with address, signature, and message
        //     $.ajax({
        //         url: '/handle-login', // The route in your Laravel controller
        //         method: 'POST',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // CSRF token
        //         },
        //         data: {
        //             address: address,
        //             signature: signature,
        //             message: message
        //         },
        //         success: function(response) {
        //             if (response.success) {
        //                 alert("Login successful!");
        //             } else {
        //                 alert("Login failed: " + response.error);
        //             }
        //         },
        //         error: function(xhr, status, error) {
        //             alert('Error: ' + error);
        //         }
        //     });

        // } catch (err) {
        //     alert("Error: " + err.message);
        //     console.error(err);
        // }
        try {
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            await provider.send("eth_requestAccounts", []);

            const signer = provider.getSigner();
            const address = await signer.getAddress();
            const message = "Login to MyApp at " + new Date().toISOString();
            const signature = await signer.signMessage(message);

            // Send the address, message, and signature to your Laravel backend
            await fetch('/handle-login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // CSRF token
                },
                body: JSON.stringify({
                    address: address,
                    signature: signature,
                    message: message
                })
            });
        } catch (err) {
            alert("Error: " + err.message);
        }
    }
</script>
<!--End of Tawk.to Script-->
