<x-admin-layout>
 <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Blogs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route("blog.index") }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Blog</span></a>
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
                    @foreach ( $blog as $blogs )
                    {{-- {{ $blogs }} --}}
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{ $blogs->title }}</td>
                        <td>{{ $blogs->description }}</td>
                        <td>@if ($blogs->feature_image)
                            <img src="{{ asset('upload/featureImages/'.$blogs->feature_image) }}"
                                alt="{{ $blogs->title }}" width="400" height="100" />
                            @else
                            <p class="text-muted fw-normal">No image uploaded.</p>
                            @endif
                        </td>
						<td><a href="{{ route("blog.edit", ["id" => $blogs->id]) }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Update</span></a></td>
                        <td><a href="{{ route("blog.delete", ["id" => $blogs->id]) }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Delete</span></a></td>
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
