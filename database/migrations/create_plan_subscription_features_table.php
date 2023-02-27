<?php

declare(strict_types=1);

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
    public function up(): void
    {
        Schema::create(config('laravel-subscriptions.tables.plan_subscription_features'), function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_subscription_id')->constrained(config('laravel-subscriptions.tables.plan_subscriptions'))->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('plan_feature_id')->nullable()->constrained(config('laravel-subscriptions.tables.plan_features'))->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('tag');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('value');
            $table->unsignedSmallInteger('resettable_period')->default(0);
            $table->string('resettable_interval')->default('month');
            $table->unsignedMediumInteger('sort_order')->default(0);
            $table->timestamps();

            $table->unique(['plan_subscription_id', 'tag']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config('laravel-subscriptions.tables.plan_subscription_features'));
    }
};
