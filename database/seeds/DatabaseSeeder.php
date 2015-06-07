<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Mistress\User;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
    }

}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();
        User::create([
            'name'       => 'Eric',
            'email'      => 'ehutson@gmail.com',
            'password'   => Hash::make('letmein'),
            'submissive' => false,
        ]);

        User::create([
            'name'       => 'freyr',
            'email'      => 'freyr@diybdsm.com',
            'password'   => Hash::make('letmein'),
            'submissive' => true,
        ]);

        User::create([
            'name'       => 'sub1',
            'email'      => 'sub1@diybdsm.com',
            'password'   => Hash::make('letmein'),
            'submissive' => true,
        ]);

        User::create([
            'name'       => 'sub2',
            'email'      => 'sub2@diybdsm.com',
            'password'   => Hash::make('letmein'),
            'submissive' => true,
        ]);

        $dom   = User::where('name', '=', 'Eric')->firstOrFail();
        $domId = $dom->id;

        $sub1              = User::where('name', '=', 'freyr')->firstOrFail();
        $sub1->mistress_id = $domId;
        $sub1->save();

        $sub2              = User::where('name', '=', 'sub1')->firstOrFail();
        $sub2->mistress_id = $domId;
        $sub2->save();
    }

}
