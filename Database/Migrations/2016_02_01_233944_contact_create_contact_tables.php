<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactCreateContactTables extends Migration
{
    public function __construct()
    {
        // Get the prefix
        $this->prefix = config('cms.contact.config.table-prefix', 'contact_');
    }

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create($this->prefix.'mail', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->text('body');

            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop($this->prefix.'mail');
    }
}
