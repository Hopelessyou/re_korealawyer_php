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
        Schema::create('lawyer_profiles', function (Blueprint $t) {
            $t->foreignUuid('user_id')->primary()->constrained('users');
            $t->string('license_no');
            $t->string('verification_status')->default('pending');
            $t->json('meta')->default('{}');
            $t->timestamps();
        });

        Schema::create('lawfirm_profiles', function (Blueprint $t) {
            $t->foreignUuid('org_id')->primary()->constrained('orgs');
            $t->text('intro')->nullable();
            $t->json('meta')->default('{}');
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
        Schema::dropIfExists('lawfirm_profiles');
        Schema::dropIfExists('lawyer_profiles');
    }
};
