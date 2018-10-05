<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->enum('role',[0,1,2,3])->unique();
      $table->integer('department')->nullable();
      $table->integer('rollno')->nullable();
      $table->rememberToken();
      $table->timestamps();
    });

    DB::table('users')->insert([
      'name' => 'admin',
      'email' => 'admin',
      'email_verified_at' => date('Y-m-d H:i:s'),
      'password' => Hash::make('admin'),
      'role' => '0',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
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
