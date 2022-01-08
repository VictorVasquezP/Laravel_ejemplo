<div id="modal-create" class="modal-create">
    <div class="modal-content">
        <form action="{{route('categories.store')}}" method="POST">
            <div class="modal-header">
                <span id="close-create" class="close">&times;</span> Create
            </div>
            <div class="modal-body">    
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" >
                    @error('name')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-submit">Save</button>
            </div>
        </form>
    </div>
</div>
