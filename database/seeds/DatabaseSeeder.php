<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([

            ['title' => 'Administrator', 'slug' => 'admin'],
            ['title' => 'Redactor', 'slug' => 'redac'],
            ['title' => 'User', 'slug' => 'user']

        ]);

        DB::table('users')->insert([

            ['username' => 'GreatAdmin',
            'email' => 'admin@la.fr',
            'password' => bcrypt('admin'),
            'seen' => true,
            'role_id' => 1,
            'valid' => true,
            'confirmed' => true],

            ['username' => 'GreatRedactor',
            'email' => 'redac@la.fr',
            'password' => bcrypt('redac'),
            'seen' => true,
            'role_id' => 2,
            'valid' => true,
            'confirmed' => true],

            ['username' => 'Walker',
            'email' => 'walker@la.fr',
            'password' => bcrypt('walker'),
            'seen' => false,
            'role_id' => 3,
            'valid' => false,
            'confirmed' => true],

            ['username' => 'Slacker',
            'email' => 'slacker@la.fr',
            'password' => bcrypt('slacker'),
            'seen' => false,
            'role_id' => 3,
            'valid' => false,
            'confirmed' => true]

        ]);

        DB::table('contacts')->insert([

            ['name' => 'Dupont',
            'email' => 'dupont@la.fr',
            'message' => Lipsum::short()->text(2),
            'seen' => false],

            ['name' => 'Durand',
            'email' => 'durand@la.fr',
            'message' => Lipsum::short()->text(2),
            'seen' => false],

            ['name' => 'Martin',
            'email' => 'martin@la.fr',
            'message' => Lipsum::short()->text(2),
            'seen' => true]
            
        ]);

        DB::table('tags')->insert([

            ['tag' => 'Tag1'],
            ['tag' => 'Tag2'],
            ['tag' => 'Tag3'],
            ['tag' => 'Tag4']

        ]);

        DB::table('posts')->insert([

            ['title' => 'Post 1',
            'slug' => 'post-1',
            'summary' => '<img alt="" src="/files/user2/mega-champignon.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->html(2) . '<pre>
<code class="language-php">protected function getUserByRecaller($recaller)
{
    if ($this-&gt;validRecaller($recaller) &amp;&amp; ! $this-&gt;tokenRetrievalAttempted)
    {
        $this-&gt;tokenRetrievalAttempted = true;

        list($id, $token) = explode("|", $recaller, 2);

        $this-&gt;viaRemember = ! is_null($user = $this-&gt;provider-&gt;retrieveByToken($id, $token));

        return $user;
    }
}</code></pre>' . Lipsum::medium()->html(2),
            'active' => true,
            'user_id' => 1],

            ['title' => 'Post 2',
            'slug' => 'post-2',
            'summary' => '<img alt="" src="/files/user2/goomba.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2],

            ['title' => 'Post 3',
            'slug' => 'post-3',
            'summary' => '<img alt="" src="/files/user2/rouge-shell.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2],

            ['title' => 'Post 4',
            'slug' => 'post-4',
            'summary' => '<img alt="" src="/files/user2/rouge-shyguy.png" style="float:left; height:128px; width:128px" />' . Lipsum::short()->html(2),
            'content' => Lipsum::medium()->link()->html(8),
            'active' => true,
            'user_id' => 2]

        ]);

        DB::table('post_tag')->insert([

            ['post_id' => 1, 'tag_id' => 1],
            ['post_id' => 1, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 1],
            ['post_id' => 2, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 3],
            ['post_id' => 3, 'tag_id' => 1],
            ['post_id' => 3, 'tag_id' => 2],
            ['post_id' => 3, 'tag_id' => 4]

        ]);

        DB::table('comments')->insert([

            ['content' => Lipsum::medium()->text(3),
            'user_id' => 2,
            'post_id' => 1],

            ['content' =>Lipsum::medium()->text(2),
            'user_id' => 2,
            'post_id' => 2],

            ['content' => Lipsum::medium()->text(3),
            'user_id' => 3,
            'post_id' => 1]

        ]);
         $faker = Faker\Factory::create();
        $base_url = 'items/smestaj/';
        for ($i = 0; $i < 10; $i++){
            $opis = new \App\OpisSmestaj();
            $smestaj = new \App\Smestaj();
            $images = ['images/hotel.jpeg','images/pexels-photo-221532.jpeg','images/pexels-photo-386009.jpeg'];

            $smestaj->naziv = $faker->company;
            $smestaj->tip_objekta = 'Hotel';
            $smestaj->broj_zvezdica =random_int(1,5);
            $smestaj->vrsta_soba =array_rand(['apartman','studio']);
            $smestaj->tip_soba = array_rand(['1/4','1/5','1/6','1/7']);
            $smestaj->broj_ljudi = array_rand(['1/4','1/5','1/6','1/7']);
            $smestaj->struktura_sobe = $faker->realText(20);
            $smestaj->sadrzaj_sobe = $faker->realText(20);
            $smestaj->udaljenost_centar = random_int(0,1000);
            $smestaj->udaljenost_plaza =random_int(0,1000);
            $smestaj->udaljenost_stanica =random_int(0,1000);
            $smestaj->udaljenost_zicara =random_int(0,1000);
            $smestaj->dodatni_sadrzaj = $faker->realText(150);
            $smestaj->napomena_hotel = $faker->realText(150);
            $smestaj->drzava = $faker->country;
            $smestaj->grad = $faker->city;
            $smestaj->lat =$faker->latitude;
            $smestaj->lng =$faker->longitude;
            if ($i < 4 ){
                $smestaj->slajder = '1';
                $smestaj->tip_objekta = 'Hotell';
            }
            $smestaj->save();

            $opis->kratak_opis = $faker->realText(50);
            $opis->opis = $faker->realText(200);
            $opis->adresa = $faker->address;
            $opis->link = $faker->url;
            $opis->smestaj_id = $smestaj->id;
            $opis->save();

            $smestaj_slike = [];
            for ($k= 0; $k < 3 ; $k++){
                if ($k == 0){
                    array_push($smestaj_slike, new \App\Image(['url' => $images[array_rand($images)],'avatar'=>1]));
                }
                array_push($smestaj_slike, new \App\Image(['url' => $images[array_rand($images)] ]));
            }
            $smestaj->gallery()->saveMany($smestaj_slike);
            $smestaj->cover()->save($smestaj_slike[0]);

        }
    }
}
