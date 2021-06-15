<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectioncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectioncs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('final_product')->nullable();
            $table->text('about_idea')->nullable();
            $table->text('problem')->nullable();
            $table->text('solution')->nullable();
            $table->text('uniqueness')->nullable();
            $table->text('innovative')->nullable();
            $table->text('business_model')->nullable();
            $table->text('revenue_model')->nullable();
            $table->text('employment')->nullable();
            $table->text('stage')->nullable();

            $table->text('patent')->nullable();
            $table->text('patent_certf')->nullable();

            $table->text('awards')->nullable();
            $table->text('awards_describe')->nullable();
            $table->text('awards_certificate')->nullable();

            $table->text('fund')->nullable();
            $table->text('fund_describe')->nullable();
            $table->text('fund_certificate')->nullable();

            $table->text('incu')->nullable();
            $table->text('incu_dec')->nullable();
            $table->text('incu_period')->nullable();

            $table->text('moa')->nullable();
            $table->text('businessplan')->nullable();
            $table->text('financialproject')->nullable();
            $table->text('pitchdeck')->nullable();
            $table->text('websitelink')->nullable();
            $table->text('videolink')->nullable();
            $table->text('othercrt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectioncs');
    }
}
