<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin Adventura',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'phone' => '123',
            'gender' => 'Male',
            'date_of_birth' => '2002-03-12',
            'roles' => 'ADMIN'
        ]);

        User::create([
            'name' => 'Udin Samsudin',
            'email' => 'udin@gmail.com',
            'password' => bcrypt('udin123'),
            'phone' => '123',
            'gender' => 'Male',
            'date_of_birth' => '2001-01-20',
            'roles' => 'USER'
        ]);

        TravelPackage::create([
            'title' => '5D Amazing Labuan Bajo',
            'slug' => '5d-amazing-labuan-bajo',
            'tripType' => 'Open Trip',
            'description' => 'Nikmati liburan dengan orang tercinta bersama adventura tour and travel.',
            'price' => 3200000,
            'accomodation' => 'Hotel 4 Night',
            'transportation' => 'Garuda Indonesia',
            'duration' => '5 Day 4 Night',
            'tripDate' => '2022-10-28',
        ]);

        TravelPackage::create([
            'title' => '3D Kepulauan Seribu Indonesia',
            'slug' => '3d-kepulauan-seribu-indonesia',
            'tripType' => 'Open Trip',
            'description' => 'Nikmati liburan dengan orang tercinta bersama adventura tour and travel.',
            'price' => 1200000,
            'accomodation' => 'Guest House 2 Night',
            'transportation' => 'Air Asia',
            'duration' => '3 Day 2 Night',
            'tripDate' => '2022-12-30',
        ]);

        TravelPackage::create([
            'title' => '3D Trip to Beautiful Bali',
            'slug' => '3d-trip-to-beatiful-bali',
            'tripType' => 'Open Trip',
            'description' => 'Nikmati liburan dengan orang tercinta bersama adventura tour and travel.',
            'price' => 1400000,
            'accomodation' => 'Hotel 2 Night',
            'transportation' => 'Citilink Indonesia',
            'duration' => '3 Day 2 Night',
            'tripDate' => '2021-10-2',
        ]);

        Transaction::create([ 
            'travel_packages_id' => 1,
            'users_id' => 2,
            'transaction_total' => 3200000,
            'transaction_status' => 'PENDING'
        ]);

        TransactionDetail::create([ 
            'transactions_id' => 1,
            'username' => 'Wildan Shafa',
            'gender' => 'Male',
            'date_birth' => '2021-10-2'
        ]);
    }
}
