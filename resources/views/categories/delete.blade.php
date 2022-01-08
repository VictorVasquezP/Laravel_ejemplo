<div id="modal-delete" class="modal-delete">
    <div class="modal-content">
        <form action="{{route('deleteCategory')}}" method="POST">
            <div class="modal-header">
                <span id="close-delete" class="close">&times;</span> Delete
            </div>
            <div class="modal-body">    
                @csrf
                <input type="hidden" name="id" id="id_delete">
                <div class="form-group">
                    <p>
                        Esta seguro de eliminar a <span id="category"></span>
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-submit">Save</button>
            </div>
        </form>
    </div>
</div>