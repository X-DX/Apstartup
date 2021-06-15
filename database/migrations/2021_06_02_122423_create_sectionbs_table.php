<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionbs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('dpiit_radiobox');
            $table->string('dpittno')->nullable();
            $table->string('dpittcr')->nullable();
            $table->string('nameentity'); 
            $table->string('legalentity');            
            $table->string('cin');            
            $table->string('incorporationdate');
            $table->string('incorporationcertificate')->nullable(); 
            $table->string('pan');            
            $table->string('copypan')->nullable();            
            $table->string('gst');            
            $table->string('copygst')->nullable();            
            $table->string('aadhaar');            
            $table->string('copyaadhaar')->nullable();    
            
            $table->string('roadd1'); 
            $table->string('roadd2');          
            $table->string('rocity');          
            $table->string('rodistrict');            
            $table->string('rostate');            
            $table->string('ropincode');  
            
            $table->string('hoadd1'); 
            $table->string('hoadd2');          
            $table->string('hocity');          
            $table->string('hodistrict');            
            $table->string('hostate');            
            $table->string('hopincode');
            $table->string('sector');
            $table->string('industry');
            
            $table->string('nofounder');
            $table->string('sharecer')->nullable();
            $table->string('noofemployees');
            $table->string('declaration')->nullable();

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
        Schema::dropIfExists('sectionbs');
    }
}
