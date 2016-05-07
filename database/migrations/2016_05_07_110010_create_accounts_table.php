<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->unsignedInteger('timezone_id')->nullable();
            $table->unsignedInteger('date_format_id')->nullable();
            $table->unsignedInteger('datetime_format_id')->nullable();
            $table->unsignedInteger('currency_id')->nullable();
			
			$table->softDeletes();
			
			$table->string('name')->nullable();
            $table->string('ip');
            $table->string('account_key')->unique();
            $table->timestamp('last_login')->nullable();
			
			$table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
			
            $table->unsignedInteger('country_id')->nullable();     
            $table->text('invoice_terms')->nullable();
            $table->text('email_footer')->nullable();
			$table->unsignedInteger('industry_id')->nullable();
            $table->unsignedInteger('size_id')->nullable();
			
			$table->boolean('invoice_taxes')->default(true);
            $table->boolean('invoice_item_taxes')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}
