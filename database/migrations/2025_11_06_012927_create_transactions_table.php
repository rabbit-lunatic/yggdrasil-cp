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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('billing_id')->unique(); // ID da cobrança no AbacatePay
            $table->integer('amount'); // Valor em centavos
            $table->integer('points'); // Pontos Ygg que o usuário vai receber
            $table->string('status')->default('pending'); // pending, paid, cancelled
            $table->string('payment_method')->nullable(); // PIX, CARD
            $table->text('payment_url')->nullable(); // URL do AbacatePay para pagamento
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
