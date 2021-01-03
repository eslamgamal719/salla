<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing', function (Blueprint $table) {
            $table->id();
            $table->boolean('discount_coupon');                  //كوبونات التخفيض
            $table->boolean('marketing_campaigns');                       //الحملات التسويقيه
            $table->boolean('abandoned_baskets');                //السلات المتروكه
            $table->boolean('special_offers');                     //العروض الخاصه
            $table->boolean('marketing_coupon');                  //الكوبون التسويقى
            $table->boolean('improveSEO');                   //تحسين محركات SEO
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
        Schema::dropIfExists('marketing');
    }
}
