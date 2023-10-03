@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-3">
        <span class="fs-3 text-white">
            List of users
        </span>

        <button
            data-bs-toggle="modal" data-bs-target="#modal-add" data-action="add"
            type="button" class="btn btn-success"
        >
            <i class="fa-solid fa-plus"></i>
            New
        </button>
    </div>

    <x-users.table :users="$users"/>

    <x-users.modal-add id="modal-add"></x-users.modal-add>
    <x-users.modal-edit id="modal-edit"></x-users.modal-edit>
    <x-users.modal-delete id="modal-delete"></x-users.modal-delete>
@endsection
