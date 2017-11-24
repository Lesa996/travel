<?php

use Illuminate\Database\Seeder;

class SmestajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                    array_push($smestaj_slike, new \App\Image(['url' => array_rand($images),'avatar'=>1]));
                }
                array_push($smestaj_slike, new \App\Image(['url' => array_rand($images)]));
            }
            $smestaj->gallery()->saveMany($smestaj_slike);
            $smestaj->cover()->save($smestaj_slike[0]);

        }

    }
}
