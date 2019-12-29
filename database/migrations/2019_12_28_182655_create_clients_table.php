<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName')->nullable($value = true);
            $table->string('companyWebsite')->nullable($value = true);
            $table->string('companyPhone')->nullable($value = true);
            $table->string('companyAddress1')->nullable($value = true);
            $table->string('companyAddress2')->nullable($value = true);
            $table->string('companyCity')->nullable($value = true);
            $table->string('companyState')->nullable($value = true);
            $table->string('companyZip')->nullable($value = true);
            $table->string('domainRegistrar')->nullable($value = true);
            $table->string('nameServers')->nullable($value = true);
            $table->string('webHost')->nullable($value = true);
            $table->text('emailProvider')->nullable($value = true);
            $table->string('monthlyBilling')->nullable($value = true);
            $table->text('billingNotes')->nullable($value = true);
            $table->string('ownerFirst');
            $table->string('ownerLast')->nullable($value = true);
            $table->string('ownerEmail')->unique();
            $table->string('ownerPhone')->nullable($value = true);
            $table->string('secondFirst')->nullable($value = true);
            $table->string('secondLast')->nullable($value = true);
            $table->string('secondEmail')->unique();
            $table->string('secondPhone')->nullable($value = true);
            $table->string('thirdFirst')->nullable($value = true);
            $table->string('thirdLast')->nullable($value = true);
            $table->string('thirdEmail')->unique();
            $table->string('thirdPhone')->nullable($value = true);
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
        Schema::dropIfExists('clients');
    }
}
