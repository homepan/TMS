<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::dropIfExists('users');
		Schema::create('users', function (Blueprint $table) {
      $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('firstname', 30);
			$table->string('lastname', 30);
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('telephone');
			$table->string('password')->nullable();
			$table->string('avatar')->nullable();
			$table->rememberToken();
      $table->integer('parent_id')->unsigned()->nullable();
      $table->foreign('parent_id')->references('id')->on('users')
              ->onUpdate('cascade')->onDelete('set null');
      $table->boolean('active')->default(1);
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
    Schema::dropIfExists('users');
  }

}
