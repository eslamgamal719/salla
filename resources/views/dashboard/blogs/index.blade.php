@extends('dashboard.index')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>المدونات </h1>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-hover">
                    <h2 class="box-title" style="margin-bottom: 10px;">المدونات</h2>
                </div>

                <div class="box-body">

                    @include('dashboard.includes.message')

                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>العنوان</th>
                            <th>التصنيف</th>
                            <th>اللينك</th>
                            <th>الصوره</th>
                            <th>التاريخ</th>
                            <th>العمليات</th>
                        </tr>

                        @isset($blogs)
                            @foreach($blogs as $index => $blog)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->classification }}</td>
                                    <td>{{ $blog->link }}</td>
                                    <td><img src="{{ Storage::url($blog->image) }}" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>
                                     <a class="btn btn-primary" href="{{ route('blogs.edit', $blog->id) }}" >تعديل</a>

                                    <form method="post" action="{{ route('blogs.destroy', $blog->id) }}"  style="display: inline-block;"  >
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="حذف">
                                    </form>
                                    </td>

                                </tr>
                            @endforeach
                        @endisset
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </section>
    </div>




@endsection
