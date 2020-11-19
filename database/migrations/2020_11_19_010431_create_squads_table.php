<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squads', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // TODO: Optimal length for name
            $table->string('code', 8); // TODO: How are we defining the code?
            $table->text('password_hash'); //TODO: Maybe varchar for length
            $table->string('country', 420); // TODO: Convert to ENUM
            $table->tinyInteger('season_length');
            $table->foreignId('admin_id')->constrained('users');
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
        Schema::dropIfExists('squads');
    }
}
