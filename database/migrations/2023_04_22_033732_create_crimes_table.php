<?php

use App\Models\User;
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
        Schema::create('crimes', function (Blueprint $table) {
            $table->id();
            $table->string('crime');
            $table->longText('description');
            $table->foreignId('status_id')->cascadeOnDelete()->default(1);
            $table->string('offender_name');
            $table->string('offender_id');
            $table->string('offender_phone_number');
            $table->longText('offender_statement');
            $table->string('victim_name')->nullable();
            $table->string('victim_id')->nullable();
            $table->string('victim_phone_number')->nullable();
            $table->longText('victim_statement')->nullable();
            $table->longText('co_decision')->nullable();
            $table->longText('dc_decision')->nullable();
            $table->foreignIdFor(User::class, 'reported_by');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crimes');
    }
};
