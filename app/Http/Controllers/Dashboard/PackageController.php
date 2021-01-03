<?php

namespace App\Http\Controllers\Dashboard;

use DB;
use App\Models\Package;
use App\Models\Marketing;
use App\Models\BasicFeature;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PackageRequest;


class PackageController extends Controller
{

    public function index()
    {
        $packages = Package::select('id', 'package_name', 'subscription', 'type')->paginate(10);
        return view('dashboard.packages.index', compact('packages'))->with('title', 'الباقات');
    }


    public function create()
    {
        return view('dashboard.packages.create');
    }


    public function store(PackageRequest $request)
    {

        try {

            DB::beginTransaction();

            $package = Package::create([
                'package_name' => $request->package_name,
                'subscription' => $request->subscription,
                'type' => $request->type,
            ]);

            Marketing::create([
                'discount_coupon' => $request->discount_coupon,
                'marketing_campaigns' => $request->marketing_campaigns,
                'abandoned_baskets' => $request->abandoned_baskets,
                'special_offers' => $request->special_offers,
                'marketing_coupon' => $request->marketing_coupon,
                'improveSEO' => $request->improveSEO,
                'package_id' => $package->id

            ]);

            BasicFeature::create([
                'domain_link' => $request->domain_link,
                'online_payment' => $request->online_payment,
                'shipping_companies' => $request->shipping_companies,
                'currency' => $request->currency,
                'users' => $request->users,
                'branches' => $request->branches,
                'unlimited_products' => $request->unlimited_products,
                'unlimited_orders' => $request->unlimited_orders,
                'unlimited_clients' => $request->unlimited_clients,
                'questions_and_reviews' => $request->questions_and_reviews,
                'ssl' => $request->ssl,
                'daily_customer' => $request->daily_customer,
                'sales_commission' => $request->sales_commission,
                'android_ios_administration' => $request->android_ios_administration,
                'android_ios' => $request->android_ios,
                'language' => $request->language,
                'package_id' => $package->id
            ]);

            DB::commit();

            return success('packages.index', 'تمت الاضافه بنجاح');
        } catch (\Exception $ex) {
            DB::rollback();
            return error('packages.index', 'عفوا هناك خطأ ما');
        }

    }


    public function edit($id)
    {
        $package = Package::with('marketing')->with('basicFeature')->findOrFail($id);
        return view('dashboard.packages.edit', compact('package'))->with('title', 'تعديل الباقه');
    }


    public function update(PackageRequest $request, $id)
    {

        try {
            DB::beginTransaction();

            $package = Package::findOrFail($id);
            $marketing = Marketing::where('package_id', $package->id)->first();
            $basicFeature = BasicFeature::where('package_id', $package->id)->first();

            $package->update([
                'package_name' => $request->package_name,
                'subscription' => $request->subscription,
                'type' => $request->type,
            ]);


            $marketing->update([
                'discount_coupon' => $request->discount_coupon,
                'marketing_campaigns' => $request->marketing_campaigns,
                'abandoned_baskets' => $request->abandoned_baskets,
                'special_offers' => $request->special_offers,
                'marketing_coupon' => $request->marketing_coupon,
                'improveSEO' => $request->improveSEO,
                'package_id' => $package->id,
            ]);

            $basicFeature->update([
                'domain_link' => $request->domain_link,
                'online_payment' => $request->online_payment,
                'shipping_companies' => $request->shipping_companies,
                'currency' => $request->currency,
                'users' => $request->users,
                'branches' => $request->branches,
                'unlimited_products' => $request->unlimited_products,
                'unlimited_orders' => $request->unlimited_orders,
                'unlimited_clients' => $request->unlimited_clients,
                'questions_and_reviews' => $request->questions_and_reviews,
                'ssl' => $request->ssl,
                'daily_customer' => $request->daily_customer,
                'sales_commission' => $request->sales_commission,
                'android_ios_administration' => $request->android_ios_administration,
                'android_ios' => $request->android_ios,
                'language' => $request->language,
                'package_id' => $package->id,
            ]);
            DB::commit();

            return success('packages.index', 'تم التعديل بنجاح');
        } catch (\Exception $ex) {
            DB::rollback();
            return error('packages.index', 'عفوا هناك خطأ ما');
        }

    }


    public function destroy($id)
    {

        $package = Package::findOrFail($id);

        $package->delete();

        return success('packages.index', 'تم الحذف بنجاح');
    }
}
