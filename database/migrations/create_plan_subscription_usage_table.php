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
        Schema::create(config('laravel-subscriptions.tables.plan_subscription_usage'), function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_subscription_feature_id')->unique()->constrained(config('laravel-subscriptions.tables.plan_subscription_features'))->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('used');
            $table->timestamp('valid_until')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config('laravel-subscriptions.tables.plan_subscription_usage'));
    }
};
