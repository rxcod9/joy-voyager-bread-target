<?php

namespace Joy\VoyagerBreadTarget\Database\Seeders;

use Joy\VoyagerBreadTarget\Models\Target;
use Illuminate\Database\Seeder;

class TargetsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Target::query()->count() > 0) {
            return false;
        }

        $count = 100;
        Target::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Target ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Target Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
