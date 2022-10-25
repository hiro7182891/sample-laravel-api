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
        Schema::create('tr_receipts', function (Blueprint $table) {
            $table->increments('id'); // 主キー
            $table->string('name'); // 宛名 
            $table->string('issue_no');
            $table->date('issue_date');
            $table->date('company_id'); // FK
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
        //
    }
};
