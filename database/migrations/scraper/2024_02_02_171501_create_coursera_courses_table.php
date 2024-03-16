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
        Schema::create('coursera_courses', function (Blueprint $table) {
            $table->id();
            $table->json('content');
            $table->json('review_star_1');
            $table->json('review_star_2');
            $table->json('review_star_3');
            $table->json('review_star_4');
            $table->json('review_star_5');
            $table->string('source_url');
            $table->string('is_post')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coursera_courses');
    }
};
