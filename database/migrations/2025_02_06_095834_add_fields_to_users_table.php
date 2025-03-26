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
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string("last_name")->after("first_name");
            $table->string("gender")->after("last_name")->nullable();
            $table->string('profile_image')->after('email')->nullable();
            $table->string('phone')->unique()->after('profile_image')->nullable();
            $table->integer('otp')->after('phone')->nullable();
            $table->integer('user_type')->after('phone')->default(4)->comment('1 Admin,2 Sub Admin,3 Driver,4 Customer');
            $table->integer('register_type')->after("user_type")->default(0)->comment("1 => App,2 => Web");
            $table->integer('register_method')->after("register_type")->default(0)->comment("1 => System,2 => Facebook,3 => Google, 4 => Apple");
            $table->enum('is_approved',['0','1','2'])->after("register_method")->default(0)->comment("1 => Pending,2 => Approved,3 => Block");
            $table->integer('is_verify_otp')->after('is_approved')->comment("0 not verify,1 verify")->default(0);
            $table->longText('token')->after("password")->comment('for login generate token by passport')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('first_name', 'name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('profile_image');
            $table->dropColumn('phone');
            $table->dropColumn('otp');
            $table->dropColumn('user_type');
            $table->dropColumn('token');
            $table->dropColumn('register_type');
            $table->dropColumn('register_method');
            $table->dropColumn('is_approved');
            $table->dropColumn('is_verify_otp');
        });
    }
};
