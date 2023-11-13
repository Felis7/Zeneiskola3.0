<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
        [
            'id' => '1',
            'name' => 'Gipsz Jakab',
            'email' => 'teszt@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '1',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '2',
            'name' => 'Gipsz Ádám',
            'email' => 'teszt1@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '2',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '3',
            'name' => 'Teszt Tamás',
            'email' => 'teszt2@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '3',
            'remember_token' =>'2022-03-10 11:11:11',
            'admin_vertificated' => '0'
        ],[
            'id' => '4',
            'name' => 'Kiss Jakab',
            'email' => 'teszt3@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '4',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '5',
            'name' => 'Gipsz Jakab',
            'email' => 'teszt4@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '5',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '6',
            'name' => 'Gipsz Jakab',
            'email' => 'teszt5@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '6',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '7',
            'name' => 'Gipsz Jakab',
            'email' => 'teszt6@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '7',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '8',
            'name' => 'Gipsz Jakab',
            'email' => 'teszt7@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'tid' => '8',
            'remember_token' => '',
            'admin_vertificated' => '0'
        ],[
            'id' => '9',
            'name' => 'Admin',
            'email' => 'teszt9@teszt.com',
            'email_verified_at' => '2022-03-10 11:11:11',
            'password' => Hash::make("123456"),
            'remember_token' => '',
            'admin_vertificated' => '1'
        ]
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
