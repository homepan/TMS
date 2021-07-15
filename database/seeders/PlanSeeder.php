<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlanSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \DB::table('period_types')->delete();
    \DB::statement("ALTER TABLE period_types AUTO_INCREMENT =  1");
    \DB::table('period_types')->insert([
      [
        'name' => 'Monthly',
        'description' => 'Monthly',
        'payment_period' => 1,
        'discount_percentage' => 0,
      ],
      [
        'name' => 'Quarterly',
        'description' => 'Quarterly',
        'payment_period' => 3,
        'discount_percentage' => 5,
      ],
      [
        'name' => 'Quarterly',
        'description' => 'Quarterly',
        'payment_period' => 3,
        'discount_percentage' => 5,
      ],
      [
        'name' => 'Yearly',
        'description' => 'Yearly',
        'payment_period' => 12,
        'discount_percentage' => 15,
      ]
    ]);
    
    \DB::table('plans')->delete();
    \DB::statement("ALTER TABLE plans AUTO_INCREMENT =  1");
    \DB::table('plans')->insert([
      [
        'name' => 'starter-plan',
        'title' => 'Starter Plan',
        'description' => '<p>Ideal for&nbsp;<strong>low volume shippers</strong>, access to our already&nbsp;<strong>discounted rates&nbsp;</strong>on domestic shipments, with no monthly subscription fees</p>
<p style="text-align: left;"><strong>Quickly process up to 5 shipments to different addresses in 1 transaction</strong>! Unlimited transactions per month</p>',
        'cost' => '0.00',
        'address_limit' => 5,
        'shipment_limit' => 0,
        'api_limit' => 1000,
        'sms_cost' => '0.75',
        'freight_discount' => 0,
        'satchel' => 0,
        'hidden' => 0,
        'admin_fee' => '5.00',
        'status' => 'current',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'standard-plan',
        'title' => 'Standard Plan',
        'description' => '<p>Ideal for <strong>low to mid volume shippers</strong>, access to <strong>satchel rates</strong> and a slightly higher <strong>5% freight discount&nbsp;</strong>from&nbsp;our&nbsp;website pricing<strong>&nbsp;</strong>on domestic shipments.</p>
<p style="text-align: center;"><strong>Quickly process up to</strong><strong>&nbsp;10 shipments in 1 transaction</strong>!</p>',
        'cost' => '9.95',
        'address_limit' => 10,
        'shipment_limit' => 0,
        'api_limit' => 5000,
        'sms_cost' => '0.50',
        'freight_discount' => 5,
        'satchel' => 1,
        'hidden' => 0,
        'admin_fee' => '5.00',
        'status' => 'deprecated',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'premium-plan',
        'title' => 'Premium Plan',
        'description' => '<p>Ideal for<strong> mid&nbsp;volume shippers</strong>, access to&nbsp;an extra 5<strong>% freight discount&nbsp;</strong>from&nbsp;our&nbsp;website pricing<strong>&nbsp;</strong>on domestic shipments.</p>
<p style="text-align: center;"><strong>Quickly process up to&nbsp;</strong><strong>10 shipments&nbsp;</strong><strong>to different addresses&nbsp;</strong><strong>in 1 transaction</strong>! Unlimited transactions per month</p>',
        'cost' => '24.95',
        'address_limit' => 10,
        'shipment_limit' => 0,
        'api_limit' => 10000,
        'sms_cost' => '0.50',
        'freight_discount' => 10,
        'satchel' => 1,
        'hidden' => 0,
        'admin_fee' => '5.00',
        'status' => 'current',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'enterprise-plan',
        'title' => 'Enterprise Plan',
        'description' => '<p>Ideal for<strong>&nbsp;high&nbsp;volume shippers</strong>, access to our highest rate of an extra&nbsp;<strong>10% freight discount&nbsp;</strong>from&nbsp;our&nbsp;website pricing<strong>&nbsp;</strong>on domestic shipments.</p>
<p style="text-align: center;"><strong>Quickly process up to&nbsp;</strong><strong>20 shipments t</strong><strong>o different addresses i</strong><strong>n 1 transaction</strong>! Unlimited transactions per month</p>',
        'cost' => '39.95',
        'address_limit' => 20,
        'shipment_limit' => 0,
        'api_limit' => 0,
        'sms_cost' => '0.00',
        'freight_discount' => 10,
        'satchel' => 1,
        'hidden' => 0,
        'admin_fee' => '5.00',
        'status' => 'current',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'name' => 'website-plan',
        'title' => 'Website Plan',
        'description' => '<p>No discount plan</p>',
        'cost' => '0.00',
        'address_limit' => 100,
        'shipment_limit' => 0,
        'api_limit' => 0,
        'sms_cost' => '0.50',
        'freight_discount' => 0,
        'satchel' => 1,
        'hidden' => 1,
        'admin_fee' => '0.00',
        'status' => 'current',
        'active' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
    ]);
    
    \DB::table('features')->delete();
    \DB::statement("ALTER TABLE features AUTO_INCREMENT =  1");
    \DB::table('features')->insert([
      [
        'name' => 'Unlimited Users',
        'description' => '<p>Unlimited Users</p>',
        'active' => 1,
      ],
      [
        'name' => 'Unlimited Dispatch Locations',
        'description' => '<p>Unlimited Dispatch Loctions</p>',
        'active' => 1,
      ],
      [
        'name' => 'Pre-Saved Packaging Types',
        'description' => '<p>Pre-Saved Packaging Types</p>',
        'active' => 1,
      ],
      [
        'name' => 'Satchel Rates',
        'description' => '<p>Satchel Rates</p>',
        'active' => 1,
      ],
      [
        'name' => 'Priority Support',
        'description' => '<p>Priority Support</p>',
        'active' => 1,
      ],
      [
        'name' => 'AU Domestic Shipments Only',
        'description' => '<p>AU Domestic Shipments Only</p>',
        'active' => 1,
      ],
      [
        'name' => 'Stored Payment Information',
        'description' => '<p>Stored Payment Information</p>',
        'active' => 1,
      ],
      [
        'name' => 'International Shipping -Add On',
        'description' => '<p>International Shipping -Add On</p>',
        'active' => 1,
      ],
      [
        'name' => 'SHOPPING CART - ADD ON',
        'description' => '<p>Shopping Cart - Add On</p>',
        'active' => 1,
      ],
    ]);
  }

}
