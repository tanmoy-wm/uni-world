@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> University's Courses
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('university-courses.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add University's Courses </a>
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                </li>
            </ul>
        </nav>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
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
                        @forelse ($universityCourses as $universityCourse)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $universityCourse->title }}</td>
                                <td>{{ $universityCourse->slug }}</td>
                                <td>{{ $universityCourse->category->name }}</td>
                                <td>{{ $universityCourse->university->name }}</td>
                                <td>
                                    @if ($universityCourse->is_active === 1)
                                        <a
                                            href="{{ route('university-courses.changeStatus', ['id' => $universityCourse->id]) }}">
                                            <lable class="badge badge-success">ACTIVE</lable>
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('university-courses.changeStatus', ['id' => $universityCourse->id]) }}">
                                            <lable class="badge badge-danger">INACTIVE</lable>
                                        </a>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('university-courses.edit', ['id' => $universityCourse->id]) }}">
                                        <button class="btn btn-primary btn-icon" type="button">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('university-courses.trashed', ['id' => $universityCourse->id]) }}"
                                        onclick="confirmDelete(event)">

                                        <button class="btn btn-danger btn-icon btndata" id="{{ $universityCourse->id }}"
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
