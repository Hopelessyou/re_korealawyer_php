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
        Schema::create('taxonomies', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->enum('type', ['field','issue','stage','region','keyword']);
            $t->string('name_ko');
            $t->string('slug')->index();
            $t->uuid('parent_id')->nullable()->index();
            $t->integer('sort')->default(0);
            $t->json('meta')->default('{}');
            $t->timestamps();
        });

        Schema::create('taggings', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->foreignUuid('taxonomy_id')->constrained('taxonomies');
            $t->string('resource_type'); // 'case','qna_question','wiki_article' ...
            $t->uuid('resource_id');
            $t->float('weight')->default(1);
            $t->timestamps();
            $t->index(['resource_type','resource_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggings');
        Schema::dropIfExists('taxonomies');
    }
};
