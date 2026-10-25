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
        Schema::table('posts', function (Blueprint $table) {
            $table->text('body')->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //rollback elimina el ultimo cambio de las migration en la bases de datos, fresh elimina todos los registros de la base de datos
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('body');
        });
    }
};

//si up es para crear, el down es para eliminar