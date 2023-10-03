@props(['id'])

<div class="modal" id="{{$id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">
                        Delete User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

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

        modalDelete.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const userId = button.getAttribute('data-id');
            const userName = button.getAttribute('data-name');

            modalDeleteBody.innerText = `Are you sure you want to delete the user "${userName}" ?`
        });

    </script>
@endpushonce
