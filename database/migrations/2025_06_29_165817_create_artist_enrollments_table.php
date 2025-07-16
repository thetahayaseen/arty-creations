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
        Schema::create('artist_enrollments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');           
            $table->string('name');
            $table->string('father_name');
            $table->string('nic_number')->unique();
            $table->string('address');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->text('educational_qualifications');
            $table->string('present_job');
            $table->text('experience');
            $table->string('facebook');
            $table->string('instagram');
            $table->boolean('is_accepted')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_enrollments');
    }
};
