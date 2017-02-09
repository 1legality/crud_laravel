<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => '1',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique vulputate justo, at tristique urna porttitor eget. Maecenas erat arcu, varius ut amet.',
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'text' => 'Suspendisse ut mauris eu quam convallis ultrices iaculis in justo. Quisque blandit urna diam, eget pretium ligula rhoncus quis. Nullam sodales maximus volutpat.',
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'text' => 'Aenean arcu ligula, vehicula sit amet mi nec, fermentum laoreet neque. Aliquam eros erat, lacinia ut fringilla ac, varius in sapien. In hac habitasse cras amet.',
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'text' => 'unc mattis magna quis nisl sagittis, sed vulputate risus elementum. Morbi molestie risus quis urna pulvinar, ac rutrum eros commodo. Proin fermentum dolor sed.',
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'text' => 'Etiam vitae elementum risus. Proin mollis pulvinar tortor quis ultricies. Vestibulum sed nisi magna. Sed iaculis augue at sollicitudin efficitur. Vivamus metus.',
        ]);
    }
}
