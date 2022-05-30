<?php

use App\Models\Cart;
use App\Models\Variant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->uuid()->default(DB::raw('(UUID())'))->unique();
            $table->foreignIdFor(Cart::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Variant::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
