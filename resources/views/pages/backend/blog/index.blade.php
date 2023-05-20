@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Blogs
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('blogs.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add Blog </a>
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
                            <th> Active Status </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }} </td>
                                <td>{{ $blog->is_active }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', ['id' => $blog->id]) }}">
                                        <button class="btn btn-primary btn-icon" type="button">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('blogs.trashed', ['id' => $blog->id]) }}"
                                        onclick="confirmDelete(event)">
                                        <button class="btn btn-danger btn-icon btndata" id="{{ $blog->id }}"
                                            type="button">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Categories Found</td>
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
