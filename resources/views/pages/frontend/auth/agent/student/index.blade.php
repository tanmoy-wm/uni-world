@extends('layouts.fe-auth')
@section('content')
    <div class="container m-4">
        <div class="row d-flex">
            <h3 class="m-3">Students</h3>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Mobile Number </th>
                                <th> Country of Citizen </th>
                                <th> Referral Source </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->full_mobile_number }}</td>
                                    <td>{{ $student->country }}</td>
                                    <td>{{ $student->referral_source }}</td>
                                    <td>{{ $student->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Records Found..</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
