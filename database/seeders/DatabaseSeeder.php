<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\RandomUserSeeder;
use Database\Seeders\TestUserSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();
        DB::table('job_user_bookmarks')->truncate();
        DB::table('applicants')->truncate();

        $this->call(TestUserSeeder::class);
        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(BookmarkSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
