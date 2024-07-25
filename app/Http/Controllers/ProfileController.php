<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('pages/profile', compact('user'));
    }

    public function imageUpdate(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);

        if ($request->hasfile('profile_image')) {
            $file = $request->file('profile_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload/profileImages', $filename);
            // $blog->feature_image = $filename;
        }
        // $user->title = $request->input('title');
        // $user->description = $request->input('description');
        $user->profile_image = $filename;
        $user->update();
        return redirect()->route('dashboard.index')
            ->with('success', 'Post created successfully.');
    }

    public function ChangePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password'        => 'required',
            'new_password'         => 'required|min:8|max:30',
            'confirm_password' => 'required|same:new_password'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'validations fails',
                'errors' => $validator->errors()
            ], 422);
        }
        $user = $request->user();

        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);


            return redirect()->route('dashboard.index')
                ->with('success', 'Password update successfully.');
        } else {
            return response()->json([
                'message' => 'old password does not match',
                'errors' => $validator->errors()
            ], 422);
        }
    }
}
