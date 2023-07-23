<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sectiontranslations', function(Blueprint $table) {

            $table->id();
            $table->string('locale')->index();
            $table->longText('description')->nullable();
            // Foreign key to the main model
            $table->unique(['section_id', 'locale']);
            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');

            // fields you want to translate
            $table->string('name');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
