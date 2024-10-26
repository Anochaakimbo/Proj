<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("company_name");
            $table->integer("company_price");
            $table->timestamps();
        });
        Schema::table('companies',function(Blueprint $table){
            // user_id
            $table->unsignedBigInteger('owner_id');


            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
