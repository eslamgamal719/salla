@extends('dashboard.index')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>الباقات</h1>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-hover">
                    <h2 class="box-title" style="margin-bottom: 10px;"> اضافح باقه جديده</h2>
                </div>

                <div class="box-body">
                    <h3>اضافه البيانات الاساسيه</h3>

                    <form action="{{route('packages.store')}}" method="post" >
                        @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">اسم الباقه</label>
                        <input type="text" name="package_name" class="form-control" value="{{ old('package_name') }}">
                        @error('package_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">سعر الباقه</label>
                        <input type="text" name="subscription" class="form-control" value="{{ old('subscription') }}">
                        @error('subscription')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">مستوى الباقه</label>
                        <select name="type" class="form-control">
                            <option value="basic">الباقه الاساسيه</option>
                            <option value="advanced">الباقه المتقدمه</option>
                            <option value="professional">الباقه الاحترافيه</option>
                        </select>
                    </div>


                        <br><h3 class="center-block">التسويق</h3>

                        <div class="form-group">
                            <label for="exampleInputPassword1">كوبونات التخفيض</label>
                            <select name="discount_coupon" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الحملات التسويقيه لعملاء المتجر</label>
                            <select name="marketing_campaigns" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">السلات المتروكه</label>
                            <select name="abandoned_baskets" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">تحسين محركات البحث SEO</label>
                            <select name="improveSEO" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">العروض الخاصه</label>
                            <select name="special_offers" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الكوبون التسويقى</label>
                            <select name="marketing_coupon" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>



                        <br><h3 class="center-block">المميزات الاساسيه</h3>

                        <div class="form-group">
                            <label for="exampleInputPassword1">حجز رابط خاص (دومين)</label>
                            <select name="domain_link" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الدفع الالكترونى</label>
                            <select name="online_payment" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> الربط مع شركات الشحن</label>
                            <select name="shipping_companies" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">دعم العملات</label>
                            <select name="currency" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">دعم اللغات</label>
                            <select name="language" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عدد المستخدمين</label>
                            <input type="text" name="users" class="form-control">
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عدد الفروع</label>
                            <input type="text" name="branches" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">منتجات لا محدودة</label>
                            <select name="unlimited_products" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">طلبات لا محدودة</label>
                            <select name="unlimited_orders" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عملاء لا محدودين</label>
                            <select name="unlimited_clients" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الاسئلة والتقييمات</label>
                            <select name="questions_and_reviews" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">شهادة SSL مجانية</label>
                            <select name="ssl" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">خدمة عملاء على مدار اليوم</label>
                            <select name="daily_customer" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عمولة المبيعات</label>
                           <input type="text" name="sales_commission" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">تطبيق إدارة المتجر iOS و Android</label>
                            <select name="android_ios_administration" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">تطبيق المتجر iOS و Android</label>
                            <select name="android_ios" class="form-control">
                                <option value="1">yes</option>
                                <option value="0">no</option>
                            </select>
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
