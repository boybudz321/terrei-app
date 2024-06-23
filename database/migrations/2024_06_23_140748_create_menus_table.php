<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_name');
            $table->integer('size')->default(5);
            $table->integer('y_axis');
            $table->integer('x_axis');
            $table->integer('spin');
            $table->timestamps();
        });

        DB::table('menus')->insert([
            [
                'menu_name' => 'Menu 1',
                'size' => 5,
                'y_axis' => 400,
                'x_axis' => 300,
                'spin' => 0
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
