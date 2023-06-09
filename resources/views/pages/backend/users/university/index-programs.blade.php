@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Programs
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('university.create-program', ['username' => auth()->user()->profile->username]) }}"
                        class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add Program </a>
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                </li>
            </ul>
        </nav>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Slug </th>
                                <th> Category </th>
                                <th> University </th>
                                <th> Active Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($programs as $program)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $program->title }}</td>
                                    <td>{{ $program->slug }}</td>
                                    <td>{{ $program->category->name }}</td>
                                    <td>{{ $program->university->name }}</td>
                                    <td>
                                        @if ($program->is_active === 1)
                                            <a
                                                href="{{ route('university.change-status', ['id' => $program->id, 'username' => Auth::user()->profile->username]) }}">
                                                <lable class="badge badge-success">ACTIVE</lable>
                                            </a>
                                        @else
                                            <a
                                                href="{{ route('university.change-status', ['id' => $program->id, 'username' => Auth::user()->profile->username]) }}">
                                                <lable class="badge badge-danger">INACTIVE</lable>
                                            </a>
                                        @endif
                                    </td>

                                    <td>
                                        <a
                                            href="{{ route('university.programs-edit', ['id' => $program->id, 'username' => Auth::user()->profile->username]) }}">
                                            <button class="btn btn-primary btn-icon" type="button">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>
                                        </a>

                                        <a href="{{ route('programs.trashed', ['id' => $program->id]) }}"
                                            onclick="confirmDelete(event)">

                                            <button class="btn btn-danger btn-icon btndata" id="{{ $program->id }}"
                                                type="button">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Courses Found.</td>
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
