<x-admin-layout>
    <x-slot name="title">Manage Users | {{ config('app.name') }}</x-slot>

    <div class="d-flex justify-content-between mb-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">Users</a></li>
            </ol>
        </nav>

        <a href="#" class="btn btn-primary">Create User</a>
    </div>

    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Users</h5>
                <div class="table-responsive">

                <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="border-bottom-0">{{ $loop->iteration }}</td>
                                <td class="border-bottom-0">{{  $user->name }}</td>
                                <td class="border-bottom-0">{{  $user->email }}</td>

                                <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span
                                                class="badge rounded-3 fw-semibold {{ $user->role === 'admin' ? 'bg-primary' : 'bg-success' }}">{{ ucfirst($user->role) }}</span>
                                        </div>
                                    </td>



                                    <td class="border-bottom-0">
                                        <a href="" class="btn btn-light">
                                            <i class="fa-regular fa-pen-to-square text-info fs-6 mr-4"></i>
                                        </a>

                                        <button type="button" class="btn btn-light delete-btn"
                                            data-id="{{ $user->id }}">
                                            <i class="fa-regular fa-trash-can fs-6 text-danger"></i>
                                        </button>
                                    </td>

                            </tr>

                            @empty
                            <tr>
                                <td colspan="6">
                                    <h6 class="fw-semibold mb-0 text-center">No articles found.</h6>
                                </td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- @push('script')
        <script>
            $(document).ready(function () {
            $('#myTable').DataTable();

            $('.delete-btn').click(function() {
                var user_id = $(this).data('id');
                var delete_button = $(this);
                const deleteUrl = "{{ route('users.destroy', ':id') }}".replace(':id', user_id);

                $.confirm({
                    title: 'Confirm!',
                    content: "You won't be able to revert this!",
                    buttons: {
                        danger : {
                            btnClass: 'btn-red',
                            text: 'Delete',
                            action: function() {
                                $.ajax({
                                    url: deleteUrl,
                                    type: 'DELETE',
                                    dataType: "json",
                                    success: function(data) {
                                        if (data.success) {
                                            $.alert(data.success);
                                            delete_button.closest('tr').remove();
                                        }
                                    },
                                    error: function(data) {
                                        if (data.status === 403) {
                                            $.alert(data.responseJSON.error);
                                        } else {
                                            $.alert('Something went wrong!')
                                        }
                                    }
                                });
                            },
                        },
                        cancel: function() {
                            $.alert('Canceled!');
                        },
                    }
                });
            });
        });
        </script>
    @endpush --}}
</x-admin-layout>
