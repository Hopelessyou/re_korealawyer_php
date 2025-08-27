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
        Schema::create('orgs', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->enum('type', ['lawfirm','corporate','happymint']);
            $t->string('name');
            $t->string('slug');
            $t->json('meta')->default('{}');
            $t->timestamps();
            $t->unique(['slug','type']);
        });

        Schema::create('memberships', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->foreignUuid('user_id')->constrained('users');
            $t->foreignUuid('org_id')->constrained('orgs');
            $t->enum('role_in_org', ['owner','admin','member']);
            $t->timestamp('started_at')->useCurrent();
            $t->timestamp('ended_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
        Schema::dropIfExists('orgs');
    }
};
