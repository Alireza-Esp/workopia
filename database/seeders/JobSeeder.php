<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobListings = require database_path('/seeders/data/job_listings.php');

        $testUserId = User::where('email', 'test@email.com')->value('id');

        $userIds = User::where('email', '!=', 'test@email.com')->pluck('id')->toArray();

        foreach ($jobListings as $index => &$listing) {
            if ($index < 2) {
                $listing['user_id'] = $testUserId;
            } else {
                $listing['user_id'] = $userIds[array_rand($userIds, 1)];
            }

            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        DB::table('job_listings')->insert($jobListings);
        echo "Jobs created successfully"; 
    }
}
