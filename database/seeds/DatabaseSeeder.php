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
            $sobe = ['apartman','studio'];
            $smestaj->naziv = "Smestaj ".($i+1);
            $smestaj->tip_objekta = 'Hotel';
            $smestaj->broj_zvezdica =random_int(1,5);
            $smestaj->vrsta_soba =$sobe[array_rand($sobe)];
            $smestaj->tip_soba = '1/4,1/5,1/6';
            $smestaj->broj_ljudi = '4,5,6,7';
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
                    array_push($smestaj_slike, new \App\Image(['url' => 'items/smestaj/'.$smestaj->naziv.'/SmestajImage_Cover.jpeg','avatar'=>1]));
                }
                array_push($smestaj_slike, new \App\Image(['url' => 'items/smestaj/'.$smestaj->naziv.'/SmestajImage_1.jpeg' ]));
            }
            $smestaj->gallery()->saveMany($smestaj_slike);
            $smestaj->cover()->save($smestaj_slike[0]);

        }
        $category = new \App\Category();
        $category->name = 'Leto za Mlade';
        $category->save();
        $category1 = new \App\Category();
        $category1->name = 'Leto classic';
        $category1->save();
        $category2 = new \App\Category();
        $category2->name = 'Studentske ekskurzije';
        $category2->save();
        $category3 = new \App\Category();
        $category3->name = 'Prolece';
        $category3->save();
        $category4 = new \App\Category();
        $category4->name = 'Doček Nove godine';
        $category4->save();
        $category5 = new \App\Category();
        $category5->name = 'Jesen';
        $category5->save();
        $category6 = new \App\Category();
        $category6->name = 'Party putovanja';
        $category6->save();
        for ($i = 0; $i < 10; $i++){
            $putovanje = new \App\Putovanja();
            $opisPutovanje = new \App\OpisPutovanje();
            $cenovnik = new \App\Cenovnik();
            $opisCenovnik = new \App\OpisCenovnik();
            $plan = new \App\PlanPuta();
            $put_smestaj = \App\Smestaj::find(1);

            $images = ['images/hotel.jpeg','images/pexels-photo-221532.jpeg','images/pexels-photo-386009.jpeg'];


            $putovanje->naziv = 'Putovanje '. ($i+1);
            $putovanje->status = "aktivno";
            $putovanje->cena_od = 50;
            $putovanje->precrtana_cena = 100;
            $putovanje->broj_dana = 5;
            $putovanje->broj_noci = 4;
            $putovanje->vrsta_prevoza = 'auto,bus';
            $putovanje->obroci = 'dorucak';
            $putovanje->grupa = 'provod'; //OVDE MORA SE IZMENI
            $putovanje->drzava = $faker->country;
            $putovanje->grad = $faker->city;
            $putovanje->lat = $faker->latitude;
            $putovanje->lng = $faker->longitude;
            $putovanje->cena_do_vreme =\DateTime::createFromFormat('d/m/Y - H:i','19/06/2018 - 15:04');
            if ($i <4 ){
                $putovanje->glavni_slajder = '1';
                $putovanje->slajder = '1';
            }else{
                $putovanje->glavni_slajder = '0';
                $putovanje->slajder = '0';
            }
            $putovanje->save();

            $opisPutovanje->kratak_opis = $faker->realText(100);
            $opisPutovanje->destinacija = $faker->realText(100);
            $opisPutovanje->napomena = $faker->realText(100);
            $opisPutovanje->dodatna_napomena = $faker->realText(100);
            $opisPutovanje->rok_prijava = $faker->realText(100);
            $opisPutovanje->min_putnika = $faker->realText(100);
            $opisPutovanje->rok_otkaz = $faker->realText(100);
            $opisPutovanje->organizator = $faker->realText(100);
            $opisPutovanje->program = $faker->realText(100);
            $opisPutovanje->licenca = $faker->realText(100);
            $opisPutovanje->garancija = $faker->realText(100);
            $opisPutovanje->putovanje_id = $putovanje->id;
            $opisPutovanje->save();

            for ($k = 1 ; $k <4 ;$k++){
                $cenovnik = new \App\Cenovnik();
                $cenovnik->smestaj_id = $k;
                $cenovnik->putovanje_id = $putovanje->id;
                $cenovnik->tip = '1/4';
                $cenovnik->datum_od = \Carbon\Carbon::now();
                $cenovnik->datum_do = \Carbon\Carbon::now();
                $cenovnik->cena = 100;
                $cenovnik->save();
                $cenovnik = new \App\Cenovnik();
                $cenovnik->smestaj_id = $k;
                $cenovnik->putovanje_id = $putovanje->id;
                $cenovnik->tip = '1/3';
                $cenovnik->datum_od = \Carbon\Carbon::now();
                $cenovnik->datum_do = \Carbon\Carbon::now();
                $cenovnik->cena = 70;
                $cenovnik->save();
                $cenovnik = new \App\Cenovnik();
                $cenovnik->smestaj_id = $k;
                $cenovnik->putovanje_id = $putovanje->id;
                $cenovnik->tip = '1/5';
                $cenovnik->datum_od = \Carbon\Carbon::now();
                $cenovnik->datum_do = \Carbon\Carbon::now();
                $cenovnik->cena = 120;
                $cenovnik->save();
                $cenovnik = new \App\Cenovnik();
                $cenovnik->smestaj_id = $k;
                $cenovnik->putovanje_id = $putovanje->id;
                $cenovnik->tip = '1/6';
                $cenovnik->datum_od = \Carbon\Carbon::now();
                $cenovnik->datum_do = \Carbon\Carbon::now();
                $cenovnik->cena = 200;
                $cenovnik->save();
            }
            $opisCenovnik->napomena_cenovnik = $faker->realText(100);
            $opisCenovnik->obuhvata = $faker->realText(100);
            $opisCenovnik->neobuhvata = $faker->realText(100);
            $opisCenovnik->dinamika_placanja = $faker->realText(100);
            $opisCenovnik->nacin_placanja = $faker->realText(100);
            $opisCenovnik->nacin_prijave = $faker->realText(100);
            $opisCenovnik->putovanje_id = $putovanje->id;
            $opisCenovnik->save();

            for ($j = 1 ; $j <= 5;$j++){
                $plan->dan = $j;
                $plan->opis = $faker->realText(100);
                    $plan->putovanje_id = $putovanje->id;
                    $plan->save();
            }
            $putovanje_slike = [];
            for ($k= 0; $k < 3 ; $k++){
                if ($k == 0){
                    array_push($putovanje_slike, new \App\Image(['url' => 'items/putovanje/'.$putovanje->naziv.'/PutovanjeImage_Cover.jpeg','avatar'=>1]));
                }
                array_push($putovanje_slike, new \App\Image(['url' => 'items/putovanje/'.$putovanje->naziv.'/PutovanjeImage_1.jpeg' ]));
            }
            $putovanje->gallery()->saveMany($putovanje_slike);
            $putovanje->cover()->save($putovanje_slike[0]);
        }
        for($i = 0; $i < 10; $i++){
            $baner = new \App\Baner();
            if ($i < 2){
                $baner->veliki = true;
            }else{
                $baner->mali = true;
            }
            $baner->url = 'https://laravel.com/'.$i;
            $baner->slika = 'http://eskipaper.com/images/image-2.jpg';
            $baner->save();

        }
    }
}
