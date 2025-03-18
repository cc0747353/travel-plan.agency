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
        // \App\Models\User::factory(10)->create();



        // $this->call(CompanySeeder::class);

        // call the CountrySeeder
        $this->call(CountrySeeder::class);

        // call the LocationSeeder
        $this->call(LocationSeeder::class);

        $this->call(JobSeeder::class);

        $this->call(JobSeeder01::class);


        // $this->call(JobApplicationSeeder::class);

        //create 10 users and foreach of the user create a visa, so each user has a visa



        // call the FormInputSeeder
        $this->call(FormInputSeeder::class);



    }
}
