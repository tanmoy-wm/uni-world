@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Students
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('students.create') }}" class="btn btn-gradient-primary btn-icon">
                        <i class="mdi mdi-account-plus"></i>
                    </a>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Country</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="text-danger"> {{ $student->mobile_number }}</td>
                                <td>{{ $student->country }}</td>
                                <td>
                                    <a href="#" data-bs-toggle="tooltip" title="Edit">
                                        <button class="btn btn-primary btn-icon" type="button">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </a>

                                    {{-- <button class="btn btn-danger btn-icon btndata" id="{{ $student->id }}" type="button"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="mdi mdi-delete"></i>
                                    </button> --}}

                                    <a href="{{ route('students.trashed', ['id' => $student->id]) }}"
                                        onclick="confirmDelete(event)">
                                        <button class="btn btn-danger btn-icon btndata" id="{{ $student->id }}"
                                            type="button">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Data To Show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal Start --}}

    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" value="" id="delete-id">
                    <h6>Are You Sure To Delete The Record....?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
