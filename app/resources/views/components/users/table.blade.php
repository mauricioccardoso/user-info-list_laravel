<div class="table-responsive bg-white rounded p-3">
    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div class="d-flex justify-content-evenly align-items-center">
                        <button
                            data-bs-toggle="modal" data-bs-target="#modal-delete"
                            data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                            type="button" class="btn btn-sm btn-danger py-0 me-2">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <button
                            data-bs-toggle="modal" data-bs-target="#modal-edit"
                            data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-age="{{ $user->age }}" data-email="{{ $user->email }}"
                            type="button" class="btn btn-sm btn-primary py-0">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
</div>
