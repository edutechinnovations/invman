<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			$table->unsignedInteger('account_id')->index();
			
			$table->string('confirmation_code')->nullable();
            $table->boolean('registered')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->integer('theme_id')->nullable();
			$table->boolean('notify_sent')->default(true);
            $table->boolean('notify_viewed')->default(false);
            $table->boolean('notify_paid')->default(true);
			
			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');

            $table->unsignedInteger('public_id')->nullable();
            $table->unique( array('account_id','public_id') );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
			$table->dropForeign('users_account_id_foreign');
			
			$table->dropUnique('users_account_id_public_id_unique');
			
			$table->dropColumn('confirmation_code');
			$table->dropColumn('registered');
			$table->dropColumn('confirmed');
			$table->dropColumn('theme_id');
			$table->dropColumn('notify_sent');
			$table->dropColumn('notifiy_viewed');
			$table->dropColumn('notify_paid');
			$table->dropColumn('account_id');
			$table->dropColumn('public_id');
        });
    }
}
