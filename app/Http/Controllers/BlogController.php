<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogs/create');
    }

    public function list()
    {
        $blog = Blog::all();
        return view('blogs/index', compact('blog'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $blog = new blog;
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');

        if ($request->hasfile('feature_image')) {
            $file = $request->file('feature_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload/featureImages', $filename);
            $blog->feature_image = $filename;
        }
        $blog->save();
        return redirect()->route('dashboard.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('components/frontend/blog-show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        // if (isset($blog->published_at)) {
        //     $date = $blog->published_at->format('Y-m-d');
        // }

        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::query()->findOrFail($id);

        if ($request->hasfile('feature_image')) {
            $file = $request->file('feature_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload/featureImages', $filename);
            // $blog->feature_image = $filename;
        }
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->feature_image = $filename;
        $blog->update();
        return redirect()->route('dashboard.index')
            ->with('success', 'Post created successfully.');
        // $data = $request->validated();
        // $blog->update([
        //     'title'            => $data['title'],
        //     // 'feature_image'    => $newFileLocation,
        //     'description' => $data['description'],
        // ]);

        // return redirect()->back()->with('success', 'Blog updated successfully.', compact('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$blog = Blog::query()->find($id)) {
            return response()->json(['error' => 'Article not found.'], 404);
        }

        if ($blog->feature_image) {
            Storage::disk('public')->delete($blog->feature_image);
        }

        $blog->delete();
        return redirect()->route('dashboard.index')
            ->with('success', 'Post deleted successfully.');
    }
}
