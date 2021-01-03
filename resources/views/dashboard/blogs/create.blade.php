@extends('dashboard.index')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>المدونات</h1>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-hover">
                    <h2 class="box-title" style="margin-bottom: 10px;"> اضافح مدونه جديده</h2>
                </div>

                <div class="box-body">

                    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان المدونه</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">المقتطفات</label>
                        <textarea type="text" name="excerpt" class="form-control"  placeholder="">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">المحتوى</label>
                        <textarea type="text" name="content" class="form-control"  placeholder="">{{ old('content') }}</textarea>
                        @error('content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">التصنيف</label>
                        <input type="text" name="classification" class="form-control" value="{{ old('classification') }}" placeholder="">
                        @error('classification')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">اللينك</label>
                        <input type="text" name="link" class="form-control" value="{{ old('link') }}" placeholder="">
                        @error('link')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">الصوره</label>
                        <input type="file" name="image" class="form-control"  placeholder="">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="انشاء">
                    </div>

                    </form>
                </div>
            </div>
        </section>
    </div>


@endsection
