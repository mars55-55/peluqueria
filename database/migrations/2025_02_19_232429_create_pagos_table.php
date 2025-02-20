<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barbero_id')->constrained('barberos')->onDelete('cascade');
            $table->foreignId('cita_id')->constrained('citas')->onDelete('cascade');
            $table->decimal('total_cobrado', 8, 2);
            $table->decimal('ganancia_barbero', 8, 2);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};
