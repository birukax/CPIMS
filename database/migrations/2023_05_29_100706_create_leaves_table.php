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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('lt_id')->constarained()->onDelete('cascade');
            $table->longText('reason');
            $table->foreignId('status_id')->cascadeOnDelete()->default(1);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('leave_days');
            $table->string('evidence')->nullable();
            $table->string('evidence_path')->nullable();
            $table->longText('co_decision')->nullable();
            $table->longText('admin_decision')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
