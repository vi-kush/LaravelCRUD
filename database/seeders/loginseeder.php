<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loginseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->insert([
            'username'=>'vipul',
            'useremail'=>'vipul@kumar.com',
            'userpass'=>md5('vipulkumar')
        ]);
    }
}
