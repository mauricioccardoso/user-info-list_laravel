@props(['id'])

<div class="modal" id="{{$id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('user-create') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">
                        Edit User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editAge" class="form-label">Age</label>
                        <input type="number" class="form-control" id="editAge" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" placeholder="name@example.com" required>
                    </div>
                    <input type="number" class="form-control visually-hidden" id="editId" name="id" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@pushonce('scripts')
    <script type="text/javascript">
        const modalEdit = document.querySelector('#modal-edit');
        const modalEditBody = document.querySelector('#modal-edit .modal-body');

        modalEdit.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const userId = button.getAttribute('data-id');
            const userName = button.getAttribute('data-name');
            const userAge = button.getAttribute('data-age');
            const userEmail = button.getAttribute('data-email');

            const idInput = modalEditBody.querySelector('#editId');
            const nameInput = modalEditBody.querySelector('#editName');
            const ageInput = modalEditBody.querySelector('#editAge');
            const emailInput = modalEditBody.querySelector('#editEmail');

            idInput.value = userId;
            nameInput.value = userName;
            ageInput.value = userAge;
            emailInput.value = userEmail;
        });

    </script>
@endpushonce
