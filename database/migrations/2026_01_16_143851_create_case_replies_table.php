<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::create('case_replies', function (Blueprint $table) {
        $table->id();

        $table->foreignId('case_id')
              ->constrained('cases')
              ->cascadeOnDelete();

        $table->foreignId('lawyer_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->text('body');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_replies');
    }
};
