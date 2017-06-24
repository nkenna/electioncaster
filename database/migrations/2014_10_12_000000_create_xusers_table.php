<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXUsersTable extends Migration
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
            $table->string('username')->unique;
            $table->string('email')->unique();
            $table->string('password');
             $table->date('dod');
             $table->string('gender');
             $table->string('occupation');
             $table->string('favparty');
             $table->string('resident');
             $table->string('residentlga');
             $table->string('origin');
             $table->string('originlga');
             $table->string('president')->nullabe();
             $table->string('prestate')->nullabe();
             $table->date('prevote')->nullabe();
             $table->string('governor')->nullabe();
             $table->string('govstate')->nullabe();
             $table->string('govlga')->nullabe();
             $table->date('govvote')->nullabe();
             $table->string('senate')->nullabe();
             $table->string('senatelga')->nullabe();
             $table->date('senvote')->nullabe();
             $table->string('statehouse')->nullabe();
             $table->string('statehouselga')->nullabe();
             $table->date('shvote')->nullabe();
            $table->rememberToken();
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
