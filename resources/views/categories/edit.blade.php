<div id="modal-edit" class="modal-edit">
    <div class="modal-content">
        <form action="{{route('editCategory')}}" method="POST">
            <div class="modal-header">
                <span id="close-edit" class="close">&times;</span> Edit
            </div>
            <div class="modal-body">
                @csrf
                <input type="hidden" name="id" id="id" value="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-submit">Save</button>
            </div>
        </form>
    </div>
</div>
