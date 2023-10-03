@props(['id'])

<div class="modal" id="{{$id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">
                        Add New User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>


@pushonce('scripts')
    <script type="text/javascript">
        const modalAdd = document.querySelector('#modal-add');
        const modalAddBody = document.querySelector('#modal-add .modal-body');

        modalAdd.addEventListener('hidden.bs.modal', function () {
            const nameInput = modalAddBody.querySelector('#name');
            const ageInput = modalAddBody.querySelector('#age');
            const emailInput = modalAddBody.querySelector('#email');

            nameInput.value = '';
            ageInput.value = null;
            emailInput.value = '';
        });

    </script>
@endpushonce
