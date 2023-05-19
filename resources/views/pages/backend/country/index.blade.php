@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Country
        </h3>
        {{-- <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('categories.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add Category </a>
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                </li>
            </ul>
        </nav> --}}
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Code </th>
                            <th> Dail Code </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($countries as $country)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $country->name }}</td>
                                <td>{{ $country->code }}</td>
                                <td>{{ $country->dial_code }}</td>
                                <td>
                                    @if ($country->is_active === 1)
                                        <a href="{{ route('countries.changeStatus', ['id' => $country->id]) }}">
                                            <lable class="badge badge-success">ACTIVE</lable>
                                        </a>
                                    @else
                                        <a href="{{ route('countries.changeStatus', ['id' => $country->id]) }}">
                                            <lable class="badge badge-danger">INACTIVE</lable>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Categories Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $countries->links() }}
            </div>
        </div>
    </div>
@endsection
