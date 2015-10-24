<?php

use App\TourDestination;
use Illuminate\Database\Seeder;

class TourDestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$destinations =[
		  [
		    'name' => 'Ha Noi',
		    'alias' => 'ha-noi',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Ho Chi Minh',
		    'alias' =>  'ho-chi-minh',
		    'thumbnail' =>  '',
		    'region' =>  'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' =>1,
		  ],
		  [
		    'name' => 'Hue',
		    'alias' => 'hue',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1
		  ],
		  [
		    'name' => 'Da Nang',
		    'alias' => 'da-nang',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Nha Trang',
		    'alias' => 'nha-trang',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Vung Tau',
		    'alias' => 'vung-tau',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Phu Quoc',
		    'alias' => 'phu-quoc',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Da Lat',
		    'alias' => 'da-lat',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Buon Me Thuot',
		    'alias' =>  'buon-me-thuot',
		    'thumbnail' =>  '',
		    'region' =>  'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' =>1,
		  ],
		  [
		    'name' => 'Phan Thiet',
		    'alias' => 'phan-thiet',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Hoi An',
		    'alias' => 'hoi-an',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Quy Nhon',
		    'alias' => 'quy-nhon',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Bac Kan',
		    'alias' => 'bac-Kan',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Mai Chau',
		    'alias' => 'mai-chau',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Ha Long',
		    'alias' => 'ha-long',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Ha Giang',
		    'alias' => 'ha-giang',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Sapa',
		    'alias' => 'sapa',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1
		  ],
		  [
		    'name' => 'Hoa Binh',
		    'alias' => 'hoa-binh',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Quang Tri',
		    'alias' => 'quang-tri',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Quang Ninh',
		    'alias' => 'quang-ninh',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Yen Minh',
		    'alias' => 'yen-minh',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Dong Van',
		    'alias' => 'dong-van',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Bac Ha',
		    'alias' => 'bac-ha',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Dien Bien',
		    'alias' => 'dien-bien',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Lai Chau',
		    'alias' => 'lai-chau',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Son La',
		    'alias' => 'son-la',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Hai Phong',
		    'alias' => 'hai-phong',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Co To island',
		    'alias' =>  'co-to-island',
		    'thumbnail' =>  '',
		    'region' =>  'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' =>1,
		  ],
		  [
		    'name' => 'Ninh Binh',
		    'alias' => 'ninh-binh',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Can Tho',
		    'alias' => 'can-tho',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Soc Trang',
		    'alias' => 'soc-trang',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Tay Ninh',
		    'alias' => 'tay-ninh',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Cu Chi',
		    'alias' => 'cu-chi',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Chau Doc',
		    'alias' => 'chau-doc',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Ha Tien',
		    'alias' => 'ha-tien',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'My Tho',
		    'alias' => 'my-tho',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Mekong Delta',
		    'alias' => 'mekong-delta',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Tien Giang',
		    'alias' => 'tien-giang',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Vinh Long',
		    'alias' => 'vinh-long',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Con Dao',
		    'alias' => 'con-dao',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Dong Thap',
		    'alias' => 'dong-thap',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Cai Be',
		    'alias' => 'cai-be',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Quang Nam',
		    'alias' => 'quang-nam',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Ca Mau',
		    'alias' => 'cai-be',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Bac Lieu',
		    'alias' => 'bac-lieu',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Long Hai',
		    'alias' => 'long-hai',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Cao Bang',
		    'alias' => 'cao-bang',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Phong Nha - Ke Bang',
		    'alias' => 'phong-nha-ke-bang',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1
		  ],
		  [
		    'name' => 'Quang Binh',
		    'alias' => 'quang-binh',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Can Gio',
		    'alias' => 'can-gio',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Lao Cai',
		    'alias' => 'lao-cai',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Vinh Phuc',
		    'alias' => 'vinh-phuc',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Bac Giang',
		    'alias' => 'bac-giang',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Vinh',
		    'alias' => 'vinh',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1
		  ],
		  [
		    'name' => 'Kon Tum',
		    'alias' => 'Kon-Tum',
		    'thumbnail' => '',
		    'region' => 'Southern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1
		  ],
		  [
		    'name' => 'Lang Son',
		    'alias' => 'Lang-Son',
		    'thumbnail' => '',
		    'region' => 'Northern Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1
		  ],
		  [
		    'name' => 'Quang Ngai',
		    'alias' => 'quang-ngai',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ],
		  [
		    'name' => 'Ninh Thuan',
		    'alias' => 'ninh-thuan',
		    'thumbnail' => '',
		    'region' => 'Central Vietnam',
		    'glat' => NULL,
		    'glong' => NULL,
		    'active' => 1,
		  ]
		];

        DB::table('tour_destinations')->delete();
	    foreach ($destinations as $destination){
	        TourDestination::create($destination);
	    }
    }
}
