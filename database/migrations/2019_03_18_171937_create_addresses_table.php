<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    use \Zemis\ZLaravel\Eloquent\HistoryDataTrait;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('person_id');
            $table->boolean('default_address');

            $table->string('name');
            $table->string('address');
            $table->string('zipcode')->nullable();
            $table->string('number', 50)->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->unsignedInteger('state_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $this->addColumnsHistory($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
