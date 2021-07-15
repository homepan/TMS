<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InitSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \DB::table('roles')->delete();
    \DB::statement("ALTER TABLE roles AUTO_INCREMENT =  1");
		\DB::table('roles')->insert([
			[
        'name' => 'Super User',
        'guard_name' => 'web',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Admin',
        'guard_name' => 'web',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Manager',
        'guard_name' => 'web',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'Member',
        'guard_name' => 'web',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
    
    \DB::table('invoice_types')->delete();
    \DB::statement("ALTER TABLE invoice_types AUTO_INCREMENT =  1");
    \DB::table('invoice_types')->insert([
      [
        'name' => 'order',
        'title' => 'Order',
        'description' => '',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'subscription',
        'title' => 'Subscription',
        'description' => '',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'shipment',
        'title' => 'Shipment',
        'description' => '',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'top-up',
        'title' => 'Top Up',
        'description' => '',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'adjustment',
        'title' => 'Order Adjustment',
        'description' => '',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'refund',
        'title' => 'Refund',
        'description' => ' Refund',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
     
  }

}
