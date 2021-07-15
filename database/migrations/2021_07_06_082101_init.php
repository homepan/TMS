<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Init extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		if(Schema::hasColumn('users', 'account_id')) {
      Schema::table('users', function (Blueprint $table) {
					$table->dropForeign(['account_id']);
        $table->dropColumn('account_id');
      });
    }
    Schema::table('model_has_roles', function (Blueprint $table) {
      $table->string('model_type', 191)->nullable()->default('App\Models\User')->change();
    });
    Schema::dropIfExists('account_plans');
    Schema::dropIfExists('invoice_payment');
    Schema::dropIfExists('payments');
    Schema::dropIfExists('invoices');
    Schema::dropIfExists('invoice_types');
    Schema::dropIfExists('branches');
    Schema::dropIfExists('accounts');
    Schema::dropIfExists('plan_feature');
    Schema::dropIfExists('features');
    Schema::dropIfExists('addons');
    Schema::dropIfExists('plans');
    Schema::dropIfExists('period_types');
    Schema::dropIfExists('au_locations');
    Schema::dropIfExists('inter_states');
    Schema::dropIfExists('countries');
    Schema::dropIfExists('time_zones');
    
    Schema::create('time_zones', function (Blueprint $table) {
      $table->increments('id');
      $table->string('state')->index();
      $table->string('time_diff');
      $table->timestamps();
    });
    
    Schema::create('countries', function (Blueprint $table) {
      $table->string('code', 2)->index();
      $table->string('name', 45);
      $table->string('code_iso3', 10);
      $table->boolean('prohibited')->default(0);
      $table->boolean('review')->default(0);
      $table->primary('code');
      $table->unique('code');
    });

    Schema::create('inter_states', function (Blueprint $table) {
      $table->increments('id');
      $table->string('country_code', 2)->index();
      $table->string('country_name', 45);
      $table->string('state', 45);
      $table->boolean('status')->default(1);
    });

    Schema::create('au_locations', function (Blueprint $table) {
      $table->increments('id');
      $table->string('postcode', 20)->index();
      $table->string('suburb', 200);
      $table->string('state', 20);
      $table->string('comments', 255);
      $table->string('delivery_office', 255);
      $table->integer('pre_sort_indicator');
      $table->string('parcel_zone', 10);
      $table->integer('bsp_number');
      $table->string('bsp_name', 100);
      $table->string('category', 100);
      $table->string('new_eta_zone', 10);
    });

    Schema::create('period_types', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('name', 30);
      $table->string('description');
      $table->integer('payment_period');
      $table->integer('discount_percentage');
    });

    Schema::create('plans', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('name', 30);
      $table->string('title');
      $table->longText('description')->nullable();
      $table->decimal('cost', 9, 2);
      $table->integer('address_limit')->default(10);
      $table->integer('shipment_limit')->default(0);
      $table->integer('api_limit')->default(200);
      $table->decimal('sms_cost', 9, 2)->default(0);
      $table->integer('freight_discount');
      $table->boolean('satchel')->default(0);
      $table->boolean('hidden')->default(0);
      $table->decimal('admin_fee', 9, 2)->default(0);
      $table->boolean('active')->default(1);
      $table->enum('status', ['current', 'deprecated', 'closed'])->default('current');
      $table->timestamps();
    });

    Schema::create('addons', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('name', 30);
      $table->string('title');
      $table->longText('description')->nullable();
      $table->decimal('cost', 9, 2);
      $table->decimal('freight_discount', 9, 2)->default(0);
      $table->boolean('active')->default(1);
      $table->boolean('hidden')->default(0);
      $table->timestamps();
    });

    Schema::create('features', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('name', 30);
      $table->longText('description')->nullable();
      $table->boolean('active')->default(1);
    });

    Schema::create('plan_feature', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->integer('plan_id')->unsigned();
      $table->foreign('plan_id')->references('id')->on('plans')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('feature_id')->unsigned();
      $table->foreign('feature_id')->references('id')->on('features')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->primary(['plan_id', 'feature_id']);
    });

    Schema::create('accounts', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');     
      $table->string('code', 10)->nullable();
      $table->string('acn', 10)->nullable();
      $table->string('name', 30);
      $table->string('contact_name', 30);
      $table->string('address1', 30);
      $table->string('address2', 30)->nullable();
      $table->string('suburb', 30);
      $table->string('state', 30)->nullable();
      $table->string('postcode', 10);
      $table->string('country_code', 2);
      $table->boolean('residential')->default(1);
      $table->string('telephone', 30);
      $table->string('email')->unique();
      $table->boolean('active')->default(1);
      $table->string('ip')->nullable();
      $table->integer('parent_id')->unsigned()->nullable();
      $table->foreign('parent_id')->references('id')->on('accounts')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->index('country_code');
      $table->timestamps();
    });
    
    if (!Schema::hasColumn('users', 'account_id')) {
      Schema::table('users', function (Blueprint $table) {
        $table->integer('account_id')->unsigned()->nullable();
        $table->foreign('account_id')->references('id')->on('accounts')
        ->onUpdate('cascade')->onDelete('cascade');
      });
    }
    
    Schema::create('branches', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('account_id')->unsigned();
      $table->foreign('account_id')->references('id')->on('accounts')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->string('name', 50);
      $table->string('contact_name', 30);
      $table->string('address1', 30);
      $table->string('address2', 30)->nullable();
      $table->string('suburb', 30);
      $table->string('state', 30)->nullable();
      $table->string('postcode', 10);
      $table->string('country_code', 2);
      $table->boolean('residential')->default(0);
      $table->string('telephone', 30)->nullable();
      $table->string('fax', 30)->nullable();
      $table->string('email')->nullable();
      $table->boolean('active')->default(1);
      $table->timestamps();
    });
    
    Schema::create('invoice_types', function(Blueprint $table) {
      $table->increments('id');
      $table->string('name', 30)->unique();
      $table->string('title', 255);
      $table->text('description')->nullable();
      $table->boolean('active')->default(1);
      $table->timestamps();
    });
    
    Schema::create('invoices', function(Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('account_id')->unsigned();
      $table->foreign('account_id')->references('id')->on('accounts')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('invoice_type_id')->unsigned();
      $table->foreign('invoice_type_id')->references('id')->on('invoice_types')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->decimal('total_amount', 9, 2);
      $table->decimal('paid_amount', 9, 2)->default('0.00');
      $table->dateTime('invoice_date')->nullable();
      $table->dateTime('invoice_due_date')->nullable();
      $table->enum('status', ['initd', 'paid', 'part', 'waiting', 'pending', 'hold', 'processing', 'cancelled', 'account', 'refunded']);
      $table->integer('ref_id')->unsigned()->nullable();
      $table->text('note')->nullable();
      $table->text('admin_comments')->nullable();
      $table->decimal('admin_fee', 9, 2)->nullable()->default('0.00');
      $table->text('extra')->nullable();
      $table->boolean('reminder')->default(0);
      $table->timestamps();
    });

    Schema::create('payments', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('account_id')->unsigned();
      $table->foreign('account_id')->references('id')->on('accounts')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->decimal('total', 9, 2);
      $table->enum('payment_method', ['Account', 'eWay', 'Top Up', 'Reward Token', 'Payway', 'Paypal', 'Admin']);
      $table->enum('payment_status', ['paid', 'processing', 'pending', 'declined', 'cancelled', 'failed']);
      $table->dateTime('payment_date');
      $table->string('transaction', 255)->nullable();
      $table->string('ref1', 255)->nullable();
      $table->string('ref2', 255)->nullable();
      $table->longText('note')->nullable();
      $table->timestamps();
    });

    Schema::create('invoice_payment', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->integer('invoice_id')->unsigned();
      $table->foreign('invoice_id')->references('id')->on('invoices')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('payment_id')->unsigned();
      $table->foreign('payment_id')->references('id')->on('payments')
              ->onUpdate('cascade')->onDelete('cascade');
    });
    
    Schema::create('account_plans', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('plan_id')->unsigned();
      $table->foreign('plan_id')->references('id')->on('plans')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('account_id')->unsigned();
      $table->foreign('account_id')->references('id')->on('accounts')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('period_type_id')->unsigned();
      $table->foreign('period_type_id')->references('id')->on('period_types')
              ->onUpdate('cascade')->onDelete('cascade');
      $table->integer('invoice_id')->unsigned()->nullable();
      $table->foreign('invoice_id')->references('id')->on('invoices')
              ->onUpdate('cascade')->onDelete('set null');
      $table->dateTime('start_date');
      $table->dateTime('end_date');
      $table->dateTime('stop_date')->nullable();
      $table->integer('shipment_count')->default(0);
      $table->string('comments')->nullable();
      $table->enum('status', ['new', 'current', 'pending', 'overdue', 'review', 'cancelled', 'closed', 'queueing'])->default('new');
      $table->boolean('auto_renew')->default(1);
      $table->boolean('reminder')->default(0);
      $table->boolean('active')->default(1);
      $table->timestamps();
    });
    
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    if(Schema::hasColumn('users', 'account_id')) {
      Schema::table('users', function (Blueprint $table) {
					$table->dropForeign(['account_id']);
        $table->dropColumn('account_id');
      });
    }
    Schema::dropIfExists('account_plans');
    Schema::dropIfExists('invoice_payment');
    Schema::dropIfExists('payments');
    Schema::dropIfExists('invoices');
    Schema::dropIfExists('invoice_types');
    Schema::dropIfExists('branches');
    Schema::dropIfExists('accounts');
    Schema::dropIfExists('plan_feature');
    Schema::dropIfExists('features');
    Schema::dropIfExists('addons');
    Schema::dropIfExists('plans');
    Schema::dropIfExists('period_types');
    Schema::dropIfExists('au_locations');
    Schema::dropIfExists('inter_states');
    Schema::dropIfExists('countries');
    Schema::dropIfExists('time_zones');
  }

}
