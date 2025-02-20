<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('barbero_especialidad', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barbero_id')->constrained('barberos')->onDelete('cascade');
            $table->foreignId('especialidad_id')->constrained('especialidades')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('barbero_especialidad');
    }
};
