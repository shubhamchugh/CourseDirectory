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
        Schema::create('udemy_sitemap_urls', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('sitemap_url');
            $table->string('is_fetch')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('udemy_sitemap_urls');
    }
};
