<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOcrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ocr', function (Blueprint $table) {
            $table->string('Email')->after('content');
            $table->string('PhoneNo')->after('Email');
            $table->string('TimeSheetNo')->after('PhoneNo');
            $table->string('Declaration')->after('TimeSheetNo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ocr', function (Blueprint $table) {
            $table->dropColumn(['Email','PhoneNo','TimeSheetNo','Declaration']);
        });
    }
}
