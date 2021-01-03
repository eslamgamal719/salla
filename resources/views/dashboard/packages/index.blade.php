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
                            <th>الباقه</th>
                            <th>سعر الباقه</th>
                            <th>نوع الباقه</th>
                            <th>عرض البيانات الاضافيه والتعديل</th>
                        </tr>
                        @isset($packages)
                            @foreach($packages as $index=>$package)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $package->package_name }}</td>
                                    <td>{{ $package->subscription }}</td>
                                    <td>{{ $package->type }}</td>
                                    <td>
                                        <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary">العرض والتعديل</a>
                                        <form action="{{ route('packages.destroy', $package->id) }}" method="post" style="display: inline-block;">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger" >حذف الباقه</button>

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
