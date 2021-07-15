<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AccountSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \DB::table('accounts')->delete();
    \DB::statement("ALTER TABLE accounts AUTO_INCREMENT =  1");
    \DB::table('accounts')->insert([
      [
        'code' => 'P2C01',
        'acn' => '',
        'name' => 'Parcel2Courier Website',
        'contact_name' => 'John Goggin',
        'address1' => 'Unit 2, 300 Macaulay Road',
        'address2' => '',
        'suburb' => 'North Melbourne',
        'state' => 'VIC',
        'postcode' => '3051',
        'country_code' => 'AU',
        'residential' => 0,
        'telephone' => '0386795433',
        'email' => 'support@parcel2courier.com',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
    \DB::table('users')->delete();
    \DB::statement("ALTER TABLE users AUTO_INCREMENT =  1");
    \DB::table('users')->insert([
      [
        'account_id' => 1,
        'firstname' => 'Admin',
        'lastname' => 'P2C',
        'telephone' => '0386795433',
        'email' => 'support@parcel2courier.com',
        'password' => '$2y$10$pHSWUy91m.HMqcBr8CGEau56Ml51xHqwh7Lx74o.q72IUPot7WNKa',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]
    ]);
  }

}
