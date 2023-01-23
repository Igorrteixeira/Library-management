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
        Schema::create('book_loans', function (Blueprint $table) {
            $table->uuid('book_loans_id')->primary();
            $table->date('delivery_date')->nullable();
            $table->boolean("loan_status");
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreignId('book_id')
            ->constrained()
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
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
        Schema::dropIfExists('book_loans');
    }
};
