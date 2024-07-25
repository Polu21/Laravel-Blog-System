<x-admin-layout>
    <x-slot name="title">
        Profile | {{ config('app.name') }}
    </x-slot>

    <section class="personal-account-section">
        <div class="container">
            <form
            method="POST"
            action="{{ route("update.profile", ["id" => $user->id]) }}"
            enctype="multipart/form-data"
            >
                {{ csrf_field() }}
                @method("PUT")
                <input type='file' class="form-control" name="profile_image"  id="file-input" />
                <button class="w-100">Update</button>

            </form>
        </div>
        <div class="container">
            <form method="POST" action="/change/password">
                {{ csrf_field() }}

                    <div class="change-password-box menu_content_box_inner is-hidden" data-id="cpassword">
                        <div class="dashbord_heading">
                            <h3>Change password</h3>
                        </div>

                        <div class="form-group">
                            <label for="old-password">Old Password:</label>
                            <input type="password" class="form-control" id="password" name="old_password">
                        </div>

                        <div class="form-group">
                            <label for="new-password">New Password:</label>
                            <input type="password" class="form-control" id="password" name="new_password">
                        </div>

                        <div class="form-group">
                            <label for="confirmed-password">Confirmed Password:</label>
                            <input type="password" class="form-control" id="password" name="confirm_password">
                        </div>

                        <button class="w-100">Update</button>

                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
