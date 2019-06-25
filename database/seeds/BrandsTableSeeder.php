<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name' =>'Ball']);
        DB::table('brands')->insert(['name' =>'Braun']);
        DB::table('brands')->insert(['name' =>'Calvin Klein']);
        DB::table('brands')->insert(['name' =>'Casio']);
        DB::table('brands')->insert(['name' =>'DKYN']);
        DB::table('brands')->insert(['name' =>'Diesel']);
        DB::table('brands')->insert(['name' =>'Ebel']);
    }
}
