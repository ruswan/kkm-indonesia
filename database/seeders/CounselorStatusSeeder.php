<?php

namespace Database\Seeders;

use App\Models\CounselorStatus;
use Illuminate\Database\Seeder;

/**
 * Class CounselorStatusSeeder
 *
 * Seeds the counselor_statuses table with default status options.
 */
class CounselorStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'name' => 'Active',
            ],
            [
                'name' => 'Inactive',
            ],
            [
                'name' => 'On Leave',
            ],
            [
                'name' => 'Suspended',
            ],
            [
                'name' => 'Retired',
            ],
            [
                'name' => 'Terminated',
            ],
        ];

        foreach ($statuses as $status) {
            CounselorStatus::updateOrCreate(
                ['name' => $status['name']],
                $status
            );
        }
    }
}
