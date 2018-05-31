<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => env('ROOT_NAME'),
            'email' => env('ROOT_USERNAME'),
            'password' => bcrypt(env('ROOT_PASSWORD')),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'DEDE',
            'email' => 'dede@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'ALAMSYAH',
            'email' => 'alamsyah@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'SUWONDO',
            'email' => 'wondo@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'JULIAWAN',
            'email' => 'juliawan@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'MGT',
            'email' => 'mgt@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'INDRA',
            'email' => 'indra@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'DRAJAT',
            'email' => 'drajat@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'REMBRANT',
            'email' => 'rembrant@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'Afif',
            'email' => 'afif@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'Anang',
            'email' => 'anang@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'Rohim',
            'email' => 'rohim@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'Rudi',
            'email' => 'rudi@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'Sarah',
            'email' => 'sarah@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'name' => 'Heru',
            'email' => 'heru@macbrame.com',
            'password' => bcrypt('12345'),
            'role' => [],
            'accessPermissions' => [],
            'modulePermissions' => [],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);

        $parent = DB::table('roles')->whereIn('name',['Sales'])->get();
        DB::table('users')->whereIn('email', ['rembrant@macbrame.com','dede@macbrame.com','alamsyah@macbrame.com','wondo@macbrame.com','juliawan@macbrame.com','mgt@macbrame.com','indra@macbrame.com','drajat@macbrame.com'])
            ->update(['role' => $parent->toArray()]);

        $parent = DB::table('roles')->whereIn('name',['Production'])->get();
        DB::table('users')->whereIn('email', ['afif@macbrame.com','anang@macbrame.com','rohim@macbrame.com','rudi@macbrame.com','sarah@macbrame.com','heru@macbrame.com'])
            ->update(['role' => $parent->toArray()]);

        //add sales permission
        $parent = DB::table('permissions')->whereIn('name',['Transaction'])->get();
        $parent = $parent->toArray();
        $child = DB::table('permissions')->whereIn('slug',['buat-so'])->get();
        $parent[0]['_id'] = (string)$parent[0]['_id'];
        $child = $child->toArray();
        $child[0]['_id'] = (string)$child[0]['_id'];
        $parent[0]['child'] = $child;
        DB::table('users')->whereIn('email', ['dede@macbrame.com','alamsyah@macbrame.com','wondo@macbrame.com','juliawan@macbrame.com','mgt@macbrame.com','indra@macbrame.com','drajat@macbrame.com'])
            ->update(['modulePermissions' => $parent]);
            
        $parent = DB::table('permissions')->whereIn('name',['Transaction'])->get();
        $parent = $parent->toArray();
        $child = DB::table('permissions')->whereIn('slug',['production'])->get();
        $parent[0]['_id'] = (string)$parent[0]['_id'];
        $child = $child->toArray();
        $child[0]['_id'] = (string)$child[0]['_id'];
        $parent[0]['child'] = $child;
        DB::table('users')->whereIn('email', ['afif@macbrame.com','anang@macbrame.com','rohim@macbrame.com','rudi@macbrame.com','sarah@macbrame.com','heru@macbrame.com'])
            ->update(['modulePermissions' => $parent]);

    }
}
