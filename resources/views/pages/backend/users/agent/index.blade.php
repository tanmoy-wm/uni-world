@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Agent
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('agents.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add Agent </a>
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
                            <th> Email </th>
                            <th> Mobile Number </th>
                            <th> Country </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($agents as $agent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $agent->name }}</td>
                                <td>{{ $agent->email }}</td>
                                <td>+{{ $agent->country_code }} {{ $agent->mobile_number }}</td>
                                <td>{{ $agent->country }}</td>
                                <td>
                                    <a href="{{ route('agents.edit', ['id' => $agent->id]) }}">
                                        <button class="btn btn-primary btn-icon" type="button">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </a>

                                    <a href="{{ route('agents.trashed', ['id' => $agent->id]) }}"
                                        onclick="confirmDelete(event)">
                                        <button class="btn btn-danger btn-icon btndata" id="{{ $agent->id }}"
                                            type="button">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Agents Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
