<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed {
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run() {
        $data = [
            [
                'username'    => 'akeel',
                'password'    => 'Akeel',
                'email'    => 'akeel26@gmail.com',
                'first_name'    => 'Akeel',
                'last_name'    => 'Ameen',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'ameen',
                'password'    => 'AMEEN',
                'email'    => 'akeel_mn@yahoo.com',
                'first_name'    => 'Akeel',
                'last_name'    => 'Ameen',
                'created' => date('Y-m-d H:i:s'),
            ]
        ];

        $users = $this->table('users');
        $users->insert($data)
              ->save();
    }
}
