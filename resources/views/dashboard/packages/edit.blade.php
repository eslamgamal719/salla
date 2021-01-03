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

                    <form action="{{route('packages.update', $package->id)}}" method="post" >
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم الباقه</label>
                            <input type="text" name="package_name" class="form-control" value="{{ $package->package_name }}">
                            @error('package_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">سعر الباقه</label>
                            <input type="text" name="subscription" class="form-control" value="{{ $package->subscription }}">
                            @error('subscription')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">مستوى الباقه</label>
                            <select name="type" class="form-control">
                                <option value="basic" {{ $package->type == 'basic' ? 'selected' : '' }} >الباقه الاساسيه</option>
                                <option value="advanced" {{ $package->type == 'advanced' ? 'selected' : '' }}>الباقه المتقدمه</option>
                                <option value="professional" {{ $package->type == 'professional' ? 'selected' : '' }}>الباقه الاحترافيه</option>
                            </select>
                        </div>


                        <br><h3 class="center-block">التسويق</h3>

                        <div class="form-group">
                            <label for="exampleInputPassword1">كوبونات التخفيض</label>
                            <select name="discount_coupon" class="form-control">
                                <option value="1" {{ $package->marketing->discount_coupon == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->marketing->discount_coupon == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الحملات التسويقية لعملاء المتجر</label>
                            <select name="marketing_campaigns" class="form-control">
                                <option value="1" {{ $package->marketing->marketing_campaigns == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->marketing->marketing_campaigns == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">السلّات المتروكة</label>
                            <select name="abandoned_baskets" class="form-control">
                                <option value="1" {{ $package->marketing->abandoned_baskets == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->marketing->abandoned_baskets == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">تحسين محركات البحث SEO</label>
                            <select name="improveSEO" class="form-control">
                                <option value="1" {{ $package->marketing->improveSEO == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->marketing->improveSEO == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">العروض الخاصة</label>
                            <select name="special_offers" class="form-control">
                                <option value="1" {{ $package->marketing->special_offers == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->marketing->special_offers == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الكوبون التسويقي</label>
                            <select name="marketing_coupon" class="form-control">
                                <option value="1" {{ $package->marketing->marketing_coupon == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->marketing->marketing_coupon == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>



                        <br><h3 class="center-block">المميزات الأساسية</h3>

                        <div class="form-group">
                            <label for="exampleInputPassword1">حجز رابط خاص (دومين)</label>
                            <select name="domain_link" class="form-control">
                                <option value="1" {{ $package->basicFeature->domain_link == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->domain_link == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الدفع الالكتروني</label>
                            <select name="online_payment" class="form-control">
                                <option value="1" {{ $package->basicFeature->online_payment == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->online_payment == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الربط مع شركات الشحن</label>
                            <select name="shipping_companies" class="form-control">
                                <option value="1" {{ $package->basicFeature->shipping_companies == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->shipping_companies == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">دعم العملات</label>
                            <select name="currency" class="form-control">
                                <option value="1" {{ $package->basicFeature->currency == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->currency == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">دعم اللغات</label>
                            <select name="language" class="form-control">
                                <option value="1" {{ $package->basicFeature->language == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->language == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عدد المستخدمين</label>
                            <input type="text" name="users" class="form-control" value="{{ $package->basicFeature->users }}">
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عدد الفروع</label>
                            <input type="text" name="branches" class="form-control" value="{{ $package->basicFeature->branches }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">منتجات لا محدودة</label>
                            <select name="unlimited_products" class="form-control">
                                <option value="1" {{ $package->basicFeature->unlimited_products == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->unlimited_products == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">طلبات لا محدودة</label>
                            <select name="unlimited_orders" class="form-control">
                                <option value="1" {{ $package->basicFeature->unlimited_orders == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->unlimited_orders == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عملاء لا محدودين</label>
                            <select name="unlimited_clients" class="form-control">
                                <option value="1" {{ $package->basicFeature->unlimited_clients == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->unlimited_clients == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">الاسئلة والتقييمات</label>
                            <select name="questions_and_reviews" class="form-control">
                                <option value="1" {{ $package->basicFeature->questions_and_reviews == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->questions_and_reviews == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">شهادة SSL مجانية</label>
                            <select name="ssl" class="form-control">
                                <option value="1" {{ $package->basicFeature->ssl == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->ssl == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">خدمة عملاء على مدار اليوم</label>
                            <select name="daily_customer" class="form-control">
                                <option value="1" {{ $package->basicFeature->daily_customer == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->daily_customer == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">عمولة المبيعات</label>
                            <input type="text" name="sales_commission" class="form-control" value="{{ $package->basicFeature->sales_commission }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">تطبيق إدارة المتجر iOS و Android</label>
                            <select name="android_ios_administration" class="form-control">
                                <option value="1" {{ $package->basicFeature->android_ios_administration == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->android_ios_administration == '0' ? 'selected' : '' }}>no</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">تطبيق المتجر iOS و Android</label>
                            <select name="android_ios" class="form-control">
                                <option value="1" {{ $package->basicFeature->android_ios == '1' ? 'selected' : '' }}>yes</option>
                                <option value="0" {{ $package->basicFeature->android_ios == '0' ? 'selected' : '' }}>no</option>
                            </select>
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
