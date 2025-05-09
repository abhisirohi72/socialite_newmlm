@extends('layouts.app')

@section('title', $title)

@section('content')
    <style>
        .datatable-container {
            overflow: auto;
        }
    </style>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">User Management</li>
                    <li class="breadcrumb-item active">User Details</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Details</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Id</th>
                                        <th>Sponsor Email</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th>Wallet</th>
                                        {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>ZipCode</th>
                                        <th>Is Verified</th>
                                        <th>Status</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($details as $detail)
                                        <tr>
                                            <td>{{ $detail->name }}</td>
                                            <td>{{ $detail->unique_id }}</td>
                                            <td>{{ $detail->sponsor->email }}</td>
                                            <td>{{ $detail->email }}</td>
                                            <td>{{ $detail->main_pass }}</td>
                                            <td>{{ $detail->phone ?? 'N/A' }}</td>
                                            <td>{{ $detail->wallet }}</td>
                                            <td>{{ $detail->address ?? 'N/A' }}</td>
                                            <td>{{ $detail->city ?? 'N/A' }}</td>
                                            <td>{{ $detail->state ?? 'N/A' }}</td>
                                            <td>{{ $detail->zipcode ?? 'N/A' }}</td>
                                            <td>{{ $detail->email_verified_at != null ? $detail->email_verified_at : 'N/A' }}
                                            </td>
                                            <td>
                                                @if ($detail->status=='1')
                                                    <span class="badge bg-success">Active</span>
                                                @elseif($detail->status=='2')
                                                <span class="badge bg-warning">Blocked</span>
                                                @elseif($detail->status=='3')
                                                <span class="badge bg-danger">Deleted</span>
                                                @elseif($detail->status=='0')
                                                <span class="badge bg-primary">Inactive</span>
                                                    
                                                @endif
                                            </td>
                                            
                                            <td>
                                                <ul class="d-flex align-items-left">
                                                    <li class="nav-item dropdown pe-3" style="list-style:none">

                                                        <a class="nav-link nav-profile d-flex align-items-center pe-0"
                                                            href="#" data-bs-toggle="dropdown">
                                                            <span
                                                                class="d-none d-md-block dropdown-toggle ps-2">Action</span>
                                                        </a><!-- End Profile Iamge Icon -->

                                                        <ul
                                                            class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="{{ route('admin.user.edit', ['id' => $detail->id]) }}">
                                                                    <i class="bi bi-person"></i>
                                                                    <span>Edit Profile</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>

                                                            <li>
                                                                @if ($detail->status == '1')
                                                                    <a class="dropdown-item d-flex align-items-center"
                                                                        href="{{ route('admin.user.status.change', ['id' => $detail->id, 'status' => '2']) }}">
                                                                        <i class="bi bi-person"></i>
                                                                        <span>Block User</span>
                                                                    </a>
                                                                @else
                                                                    <a class="dropdown-item d-flex align-items-center"
                                                                        href="{{ route('admin.user.status.change', ['id' => $detail->id, 'status' => '1']) }}">
                                                                        <i class="bi bi-person"></i>
                                                                        <span>Unblock User</span>
                                                                    </a>
                                                                @endif
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>

                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                        href="{{ route('admin.user.status.change', ['id' => $detail->id, 'status' => '3']) }}">
                                                                        <i class="bi bi-person"></i>
                                                                        <span>Delete User</span>
                                                                    </a>
                                                            </li>


                                                        </ul><!-- End Profile Dropdown Items -->
                                                    </li><!-- End Profile Nav -->
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
