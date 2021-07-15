<?php

namespace Database\Seeders;

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
    \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    $this->call(InitSeeder::class);
    $this->call(TimeZoneSeeder::class);
    $this->call(CountrySeeder::class);
    $this->call(InterStateSeeder::class);
    $this->call(AuLocationSeeder::class);
    $this->call(PlanSeeder::class);
    $this->call(AccountSeeder::class);
    \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }

}
