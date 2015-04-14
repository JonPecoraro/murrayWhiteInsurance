<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("team_members", function($table)
		{
			$table->increments("team_member_id");
			$table->string("first_name");
			$table->string("last_name");
			$table->string("suffix")->nullable();
			$table->string("email");
			$table->string("extension")->nullable();
			$table->string("position")->nullable();
			$table->string("qualifications")->nullable();
			$table->string("description", 1023)->nullable();
			$table->string("image")->nullable();
			$table->date("employment_date")->nullable();
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
		Schema::drop("team_members");
	}
}
