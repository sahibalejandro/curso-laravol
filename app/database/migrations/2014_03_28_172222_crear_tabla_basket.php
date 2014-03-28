<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBasket extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('baskets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			// Creas el campo foreign key
			$table->integer('users_id')
				  ->unsigned();

			// Crear el indice
			$table->foreign('users_id')
				  ->references('id')
				  ->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('baskets');
	}

}
