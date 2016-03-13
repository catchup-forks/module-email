<?php

namespace Cms\Modules\Contact\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        //$this->call(__NAMESPACE__.'\');
    }
}
