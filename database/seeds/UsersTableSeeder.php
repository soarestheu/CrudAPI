<?php
use Illuminate\Database\Seeder;
use App\User;
 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Matheus Ferreira',
            'email'     => 'contato@teste.com',
            'password'  => bcrypt('123123'),
        ]);
    }
}