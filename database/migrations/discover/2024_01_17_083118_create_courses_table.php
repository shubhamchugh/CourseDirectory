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
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('user_id')->unsigned();

            $table->tinyInteger('course_type_id')->unsigned();

            $table->integer('university_id')->unsigned()->nullable();
            $table->integer('institution_id')->unsigned()->nullable();
            $table->integer('platform_id')->unsigned()->nullable();

            $table->string('slug')->unique();
            $table->string('title');
            $table->unsignedBigInteger('views')->default(0);

            $table->longText('description')->nullable();
            $table->string('headline')->nullable();

            $table->boolean('is_featured')->default(0);

            $table->enum('format', ['video', 'audio', 'live', 'text', 'interactive', 'offline', 'hybrid'])->default('video');
            $table->enum('level', ['beginner', 'intermediate', 'advanced', 'professional', 'all_levels'])->default('beginner');

            $table->boolean('is_paid')->nullable();
            $table->boolean('is_certificate')->nullable();
            $table->boolean('has_exercises')->nullable();
            $table->boolean('is_subtitles')->nullable();

            $table->unsignedSmallInteger('expected_duration')->nullable();
            $table->enum('expected_duration_unit', ['minutes', 'hours', 'days', 'weeks', 'months'])->default('hours')->nullable();

            $table->unsignedSmallInteger('num_lectures')->nullable();
            $table->unsignedSmallInteger('num_reviews')->nullable();
            $table->unsignedTinyInteger('avg_rating')->nullable();

            $table->integer('num_subscribers')->nullable();
            $table->integer('favorite_time')->nullable();

            $table->timestamp('enrollment_at')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();

            $table->enum('status', ['draft', 'pending_review', 'published', 'scheduled', 'rejected'])->default('pending_review');
            $table->timestamp('published_at')->useCurrent();

            $table->string('source')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('course_type_id')->references('id')->on('course_types')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
