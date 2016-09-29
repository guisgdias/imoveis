<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imoveis', function(Blueprint $table) {
            $table->increments('id');
			$table->integer("status_id")->unsigned();
			$table->integer("type_id")->unsigned();
			$table->integer("user_id")->unsigned();

			$table->string("contact_name");
			$table->string("contact_phone");

			$table->string("address");
			$table->string("number");
			$table->string("complement")->nullable();
			$table->string("district");
			$table->string("city");
			$table->string("uf");

			$table->string("title");
			$table->text("description");
			$table->string("image");
			$table->string("price");
			$table->string("condominio")->default("0");
			$table->string("iptu")->default("0");
			$table->integer("area");
			$table->integer("amount_room");
			$table->integer("amount_bathroom");
			$table->integer("parking_space");

			$table->double("longitude")->nullable();
			$table->double("latitude")->nullable();

			$table->foreign('status_id')
				->references('id')->on('imovel_status')
				->onDelete('restrict')
				->onUpdate('cascade');

			$table->foreign('type_id')
				->references('id')->on('imovel_types')
				->onDelete('restrict')
				->onUpdate('cascade');

			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('cascade');

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
		Schema::drop('imoveis');
	}

}
