@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="fs-3 text-uppercase">
            List of users
        </span>

        <button type="button" class="btn btn-success">
            <i class="fa-solid fa-plus"></i>
            New
        </button>
    </div>

    <x-users.table/>
@endsection
