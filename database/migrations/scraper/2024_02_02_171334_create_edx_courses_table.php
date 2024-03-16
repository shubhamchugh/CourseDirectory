<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The database connection that should be used by the migration.
     *
     * @var string
     */
    protected $connection = 'mysql_scraper';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('edx_courses', function (Blueprint $table) {
            $table->id();
            $table->string('edx_path')->unique();
            $table->string('title')->nullable();
            $table->json('content')->nullable();
            $table->string('is_post')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edx_courses');
    }
};
