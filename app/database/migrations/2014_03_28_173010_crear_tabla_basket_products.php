<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBasketProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('basket_products', function(Blueprint $table)
		{
			$table->integer('basket_id')->unsigned();
			$table->integer('product_id')->unsigned();

			$table->foreign('basket_id')
				  ->references('id')
				  ->on('baskets');

			$table->foreign('product_id')
				  ->references('id')
				  ->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('basket_products');
	}

}
