@props(['id'])

<div class="modal" id="{{$id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form  action="{{ route('user-create') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">
                        Delete User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="number" class="form-control visually-hidden" id="deleteId" name="id" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

@pushonce('scripts')
    <script type="text/javascript">
        const modalDelete = document.querySelector('#modal-delete');
        const modalDeleteBody = document.querySelector('#modal-delete .modal-body');

        const spanElement = document.createElement('span');
        const idInput = modalDeleteBody.querySelector('#deleteId');

        modalDelete.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const userId = button.getAttribute('data-id');
            const userName = button.getAttribute('data-name');

            idInput.value = userId;

            spanElement.innerText = `Are you sure you want to delete the user "${userName}" ?`
            modalDeleteBody.appendChild(spanElement);
        });

    </script>
@endpushonce
