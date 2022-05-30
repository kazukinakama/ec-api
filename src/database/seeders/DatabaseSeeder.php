<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Image;
use App\Models\Owner;
use App\Models\Product;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'id' => 1,
                'name' => 'メンズ',
            ],
            [
                'id' => 2,
                'name' => 'レディース',
            ],
            [
                'id' => 3,
                'name' => 'キッズ',
            ],
        ]);

        $owners = Owner::factory(5)->create();

        $owners->map(function ($owner) {
            for ($i = 1; $i <= 10; $i++) {
                Product::factory()
                    ->create([
                        'owner_id' => $owner->id,
                        'category_id' => rand(1, 3)
                    ]);
            }
        });

        $owners->map(function ($owner) {
            $owner->products->map(function ($product) {
                Variant::factory(6)
                    ->for($product)
                    ->create();
                for ($i = 1; $i <= 10; $i++) {
                    Image::factory()
                        ->for($product)
                        ->create([
                            'display_order' => $i,
                            'filename' => 'image' . (string) rand(1, 7) . '.jpg',
                        ]);
                }
            });
        });

        Admin::factory()->count(3)->create();
        User::factory()->count(10)->create();
    }
}
