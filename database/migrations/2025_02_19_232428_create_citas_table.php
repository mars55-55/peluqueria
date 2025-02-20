<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('barbero_id')->constrained('barberos')->onDelete('cascade');
            $table->dateTime('fecha_hora');
            $table->decimal('precio', 8, 2);
            $table->enum('estado', ['pendiente', 'completada', 'cancelada'])->default('pendiente');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
