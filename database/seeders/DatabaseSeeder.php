<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call(CompanySeeder::class);

        // call the CountrySeeder
        $this->call(CountrySeeder::class);

        // call the LocationSeeder
        $this->call(LocationSeeder::class);

        $this->call(JobSeeder::class);

        $this->call(JobSeeder01::class);


        // $this->call(JobApplicationSeeder::class);


        $this->call(RolePermissionSeeder::class);

        //create 10 users and foreach of the user create a visa, so each user has a visa

        \App\Models\User::factory(10)->create()->each(function ($user) {
            // For each user, create a visa application
            \App\Models\Visa::factory()->create([
                'user_id' => $user->id, // Associate the visa with the user
            ]);
        });

        // call the FormInputSeeder
        $this->call(FormInputSeeder::class);



    }
}
