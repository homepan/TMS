<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeZoneSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
     \DB::table('time_zones')->delete();
  }

}
