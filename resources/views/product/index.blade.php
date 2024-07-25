<x-admin-layout>
 <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Blogs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route("product.create") }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
						{{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> --}}
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Name</th>
                        <th>Description</th>
						<th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $products as $product )
                    {{-- {{ $blogs }} --}}
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>@if ($product->feature_image)
                            <img src="{{ asset('upload/productImages/'.$product->feature_image) }}"
                                alt="{{ $product->title }}" width="200" height="200" />
                            @else
                            <p class="text-muted fw-normal">No image uploaded.</p>
                            @endif
                        </td>
						<td><a href="{{ route("product.edit", ["id" => $product->id]) }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Update</span></a></td>
                        <td><a href="{{ route("product.delete", ["id" => $product->id]) }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Delete</span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
			{{-- <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</x-admin-layout>
