<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ! Añadir una columna a una tabla ya exitente sin borrar los datos
        // ! php artisan make:migration add_avatar_to_users_table

        // Table se usa cuando queremos modificar un tabla que ya existe
        Schema::table('users', function (Blueprint $table) {
            // nullable: indica que esta vacio por defecto
            // affter: indica en que posicion de las columnas queremos que coloque la nueva columna
            $table->string('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Borrar columna en caso de exitir al migrar
            $table->dropColumn('avatar');
        });
    }
};
