@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Pages
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('pages.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add Page </a>
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
                            <th> Status </th>
                            <th> Active Status </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pages as $page)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $page->title }} </td>
                                <td>


                                    @if ($page->is_active === 1)
                                        <a href="{{ route('pages.changeStatus', ['id' => $page->id]) }}">
                                            <lable class="badge badge-success">ACTIVE</lable>
                                        </a>
                                    @else
                                        <a href="{{ route('pages.changeStatus', ['id' => $page->id]) }}">
                                            <lable class="badge badge-danger">INACTIVE</lable>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('pages.edit', ['id' => $page->id]) }}">
                                        <button class="btn btn-primary btn-icon" type="button">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('blogs.trashed', ['id' => $page->id]) }}"
                                        onclick="confirmDelete(event)">
                                        <button class="btn btn-danger btn-icon btndata" id="{{ $page->id }}"
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
