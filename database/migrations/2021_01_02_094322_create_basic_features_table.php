<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basicFeatures', function (Blueprint $table) {
            $table->id();
            $table->boolean('domain_link');
            $table->boolean('online_payment');
            $table->boolean('shipping_companies');
            $table->boolean('currency');
            $table->boolean('language');
            $table->integer('users');                         //integer
            $table->integer('branches');                      //integer
            $table->boolean('unlimited_products');
            $table->boolean('unlimited_orders');
            $table->boolean('unlimited_clients');
            $table->boolean('questions_and_reviews');
            $table->boolean('ssl');
            $table->boolean('daily_customer');
            $table->string('sales_commission');               //string
            $table->boolean('android_ios_administration');
            $table->boolean('android_ios');
            $table->unsignedBigInteger('package_id');

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basicFeatures');
    }
}
