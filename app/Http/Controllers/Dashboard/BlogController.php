<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Http\traits\UploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\BlogRequest;


class BlogController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('dashboard.blogs.index', compact('blogs'))->with('title', 'المدونات');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create')->with('title', 'انشاء مدونه جديده');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        try {
            $data = $request->except('image');
            if ($request->hasFile('image')) {
                $data['image'] = $this->upload('image', 'blogs');
            }

            Blog::create($data);

            return success('blogs.index', 'تمت الاضافه بنجاح');
        } catch (\Exception $ex) {
            return error('blogs.index', 'عفوا هناك خطأ ما');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blogs.edit', compact('blog'))->with('title', 'نعديل المدونه');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $data = $request->except('image');

            if ($request->hasFile('image')) {
                $data['image'] = $this->upload('image', 'blogs', $blog->image);
            }

            $blog->update($data);

            return success('blogs.index', 'تم التعديل بنجاح');
        } catch (\Exception $ex) {
            return error('blogs.index', 'عفوا هناك خطأ ما');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);

            if ($blog->image) {
                Storage::delete($blog->image);
                $blog->delete();
            }

            $blog->delete();

            return success('blogs.index', 'تم الحذف بنجاح');
        } catch (\Exception $ex) {
            return error('blogs.index', 'عفوا هناك خطأ ما');
        }
    }
}
