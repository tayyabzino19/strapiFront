<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->string('CompanyName');
            $table->string('Email');
            $table->string('Phone');
            $table->string('ZipCode');
            $table->string('HeliumHotspot');
            $table->text('access');
            $table->string('hotSpots');
            $table->string('deployIndoors');
            $table->string('ReservationID');
            $table->string('PaymentStatus');
            $table->string('UniqueIdentifier');
            $table->string('OrderInline');
            $table->text('AdditionalNotes');
            $table->string('Batch');
            $table->string('UserID');
            $table->string('EntryKey');
            $table->string('published_at');
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
        Schema::dropIfExists('entries');
    }
}
