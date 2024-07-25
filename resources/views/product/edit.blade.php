<x-admin-layout>
    <div class="modal-dialog">
        <div class="modal-content">
            <form
            method="POST"
            action="{{ route("product.update", ["id" => $product->id]) }}"
            enctype="multipart/form-data"
        >
            {{ csrf_field() }}
                @method("PUT")
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" value="{{ $product->description }}" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
                    <div class="form-group">
                        <label>Compare Price</label>
                        <input type="text" name="compare_price" class="form-control" value="{{ $product->compare_price }}">
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="stock" min="1" max="100000" class="form-control" value="{{ $product->stock }}">
                    </div>
                </div>

                <input type='file' class="form-control" name="feature_image"  id="file-input" />
                <div id='img_contain'>
                    @if($product->feature_image)
                <img id="image-preview" src="{{ asset('upload/productImages/' . $product->feature_image) }}" alt="your-image" title=''/>
                </div>
                @else
                <img id="image-preview" src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png" alt="your image" width="100" height="100" title=''/>
                </div>
                @endif
                <div class="modal-footer">
                   <a href="{{ route('product.index')}}" class="btn btn-default"><i class="material-icons">&#xE147;</i> <span>Cancel</span></a>
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
