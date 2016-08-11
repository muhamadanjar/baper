<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder {

	public function run(){
		
		DB::table('users')->delete();
        date_default_timezone_set('Asia/Jakarta');
        //DB::statement("TRUNCATE TABLE role_user");
        //DB::statement("TRUNCATE TABLE Users");
        $users = array(
            array(
                'name'     => 'Administrator',
                'username' => 'admin',
                'email'    => 'admin@gmail.com',
                'password' => Hash::make('xcWI3128'),
                'isactive' => 1,
				'photo' => 'images/users/otamegane.gif',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'     => 'Operator 1',
                'username' => 'kusomegane',
                'email'    => 'kusomegane@gmail.com',
                'password' => Hash::make('kusomegane'),
                'isactive' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            
        );

        foreach ($users as $key) {
           DB::table('users')->insert($key);
            //\App\User::create($key);
        }
		
	}

}
