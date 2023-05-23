@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> University
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('universities.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add University </a>
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Username </th>
                                <th> Email </th>
                                <th> Mobile Number </th>
                                <th> Status </th>
                                <th> Country </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($universities as $university)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $university->name }} </td>
                                    <td> {{ $university->username }} </td>
                                    <td> {{ $university->email }} </td>
                                    <td> {{ $university->country_code }} {{ $university->mobile_number }} </td>
                                    <td>
                                        @if ($university->status === 'pending')
                                            <label class="badge badge-warning">Pending</label>
                                        @elseif ($university->status === 'active')
                                            <label class="badge badge-success">Active</label>
                                        @elseif ($university->status === 'active')
                                            <label class="badge badge-danger">Inactive</label>
                                        @endif
                                    </td>
                                    <td> {{ $university->country }} </td>
                                    <td>
                                        <a href="{{ route('universities.edit', ['id' => $university->id]) }}">
                                            <button class="btn btn-primary btn-icon" type="button">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>
                                        </a>

                                        <a href="{{ route('universities.trashed', ['id' => $university->id]) }}"
                                            onclick="confirmDelete(event)">
                                            <button class="btn btn-danger btn-icon btndata" id="{{ $university->id }}"
                                                type="button">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center"> No Universities Found </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function confirmDelete(e) {
            e.preventDefault();

            let urlToRedirect = e.currentTarget.getAttribute('href');

            swal({
                title: "Are you sure you want to delete the record?",
                text: "Once deleted, you will not be able to recover this record!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
@endsection
