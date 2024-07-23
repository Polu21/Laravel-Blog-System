<x-admin-layout>
    <div class="modal-dialog">
        <div class="modal-content">
           <form
            method="POST"
            action="{{ route("blog.update", ["id" => $blog->id]) }}"
            enctype="multipart/form-data"
        >
                {{ csrf_field() }}
                @method("PUT")
                <div class="modal-header">
                    <h4 class="modal-title">Add Blog</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"  class="form-control" required>{{ $blog->description }}</textarea>
                    </div>
                </div>

                <input type='file' class="form-control" name="feature_image"  id="file-input" />
                 {{-- <x-error :messages="$errors->get('feature_image')" /> --}}
                <div id='img_contain'>
                <img id="image-preview" src="{{ asset('upload/featureImages/' . $blog->feature_image) }}" alt="your-image" title=''/>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('dashboard.index')}}" class="btn btn-default"><i class="material-icons">&#xE147;</i> <span>Cancel</span></a>
                    {{-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> --}}
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#image-preview').attr('src', e.target.result);
            $('#image-preview').hide();
            $('#image-preview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
        }

        $("#file-input").change(function() {
        readURL(this);
        });
    </script>

</x-admin-layout>
