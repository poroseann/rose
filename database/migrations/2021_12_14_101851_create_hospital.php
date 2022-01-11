<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->text('hospital_name');
            $table->longText('hospital_desc');
            $table->text('hospital_addr');
            $table->text('category');
            $table->text('map_link');
            $table->text('picture')->nullable();
            $table->string('level',10);
            $table->boolean('is_delete')->nullable()->default(1)->comment('1 = False; 0 = True;');
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
        Schema::dropIfExists('hospitals');
    }
}
