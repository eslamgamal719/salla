@extends('dashboard.index')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>المدونات</h1>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-hover">
                    <h2 class="box-title" style="margin-bottom: 10px;"> تعديل المدونات </h2>
                </div>

                <div class="box-body">

                    <form action="{{route('blogs.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان المدونه</label>
                            <input type="text" name="title" class="form-control" value="{{ $blog->title }}"
                                   placeholder="">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">المقتطفات</label>
                            <textarea type="text" name="excerpt" class="form-control"
                                      placeholder="">{{ $blog->excerpt }}</textarea>
                            @error('excerpt')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">المحتوى</label>
                            <textarea type="text" name="content" class="form-control"
                                      placeholder="">{{ $blog->content }}</textarea>
                            @error('content')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">التصنيف</label>
                            <input type="text" name="classification" class="form-control"
                                   value="{{ $blog->classification }}" placeholder="">
                            @error('classification')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">اللينك</label>
                            <input type="text" name="link" class="form-control" value="{{ $blog->link }}"
                                   placeholder="">
                            @error('link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الصوره</label>
                            <input type="file" name="image" class="form-control" placeholder="">
                            <img src="{{ Storage::url($blog->image) }}" class="img-thumbnail"
                                 style="height: 100px; width: 100px;">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="حفظ">
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>


@endsection
