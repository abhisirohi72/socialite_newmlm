@extends('layouts.app')

@section('title', $title)

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }} </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item">User Management</li> --}}
                    <li class="breadcrumb-item active">{{ $title }} </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Information</h5>
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
                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST" action="{{ route('save.admin.bank_details') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input type="file" name="logo" id="logo"  class="form-control">
                                    @isset($details->logo)
                                       <img src="{{ asset('storage/documents/admin_bank_details').'/'.$details->logo }}" alt="" style="width: 100px; height:100px; "> 
                                    @endisset
                                </div>

                                <div class="col-12">
                                    <label for="bank_name" class="form-label">Bank Name</label>
                                    <input type="text" name="bank_name" id="bank_name"  class="form-control" value="{{ $details->bank_name ?? '' }}">
                                </div>

                                <div class="col-12">
                                    <label for="acnt_holder_name" class="form-label">Account Holder Name</label>
                                    <input type="text" name="acnt_holder_name" id="acnt_holder_name"  class="form-control" value="{{ $details->acnt_holder_name ?? '' }}">
                                </div>

                                <div class="col-12">
                                    <label for="account_num" class="form-label">Account No.</label>
                                    <input type="text" name="account_num" id="account_num"  class="form-control" value="{{ $details->account_num ?? '' }}">
                                </div>

                                <div class="col-12">
                                    <label for="ifsc" class="form-label">IFSC Code.</label>
                                    <input type="text" name="ifsc" id="ifsc"  class="form-control" value="{{ $details->ifsc ?? '' }}">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- Vertical Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('script-push')
    <script>
        function getName(get_email){
            $.ajax({
                type:"POST",
                url:"{{ route('admin.get.user.name') }}",
                data:{
                    user_email:get_email
                },
                success:function(response){
                    console.log(response);
                    $("#user_fetch_email").html(response.name);
                }
            });  
        }
    </script>
@endpush