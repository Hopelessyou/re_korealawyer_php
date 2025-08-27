<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qna_questions', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->foreignUuid('author_user_id')->nullable()->constrained('users');
            $t->string('title');
            $t->longText('body');
            $t->enum('status',['open','answered','closed'])->default('open');
            $t->uuid('accepted_answer_id')->nullable();
            $t->integer('view_count')->default(0);
            $t->integer('vote_count')->default(0);
            $t->timestamps();
            $t->softDeletes();
        });

        Schema::create('qna_answers', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->foreignUuid('question_id')->constrained('qna_questions')->cascadeOnDelete();
            $t->foreignUuid('author_user_id')->nullable()->constrained('users');
            $t->longText('body');
            $t->boolean('is_solution')->default(false);
            $t->integer('vote_count')->default(0);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qna_answers');
        Schema::dropIfExists('qna_questions');
    }
};
