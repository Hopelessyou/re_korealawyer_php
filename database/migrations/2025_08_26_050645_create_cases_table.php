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
        Schema::create('cases', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->foreignUuid('org_id')->nullable()->constrained('orgs'); // 로펌
            $t->string('title');
            $t->text('summary')->nullable();
            $t->longText('body')->nullable();
            $t->enum('outcome_type',['acquittal','reduction','settlement','win','other'])->nullable();
            $t->uuid('court_region_id')->nullable();
            $t->integer('result_sentence_months')->nullable();
            $t->decimal('result_amount_numeric',14,2)->nullable();
            $t->enum('status',['draft','review','published','hidden'])->default('draft');
            $t->timestamp('published_at')->nullable();
            $t->foreignUuid('created_by')->nullable()->constrained('users');
            $t->json('meta')->default('{}');
            $t->timestamps();
            $t->index(['org_id','published_at']);
        });

        Schema::create('case_lawyers', function (Blueprint $t) {
            $t->foreignUuid('case_id')->constrained('cases')->cascadeOnDelete();
            $t->foreignUuid('lawyer_user_id')->constrained('users');
            $t->enum('role',['lead','member'])->default('lead');
            $t->primary(['case_id','lawyer_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_lawyers');
        Schema::dropIfExists('cases');
    }
};
