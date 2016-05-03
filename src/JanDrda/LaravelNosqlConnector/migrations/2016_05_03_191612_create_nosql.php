<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosql extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosql', function(Blueprint $table)
		{
			$table->string('name')->index()->unique();
			$table->text('value')->nullable();                      
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
        Schema::drop('nosql');
    }
}
