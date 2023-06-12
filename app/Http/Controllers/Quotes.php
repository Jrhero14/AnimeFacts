<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Collection;

class Quotes extends Controller
{
    private static string $urlAPI = "https://tsunderesimulatorchat.000webhostapp.com/api/";

    private static array $animeQuotes = [
        array('naruto'=>['Budi', 'Dono', 'Indro'])
    ];

    private static array $animeName = [
        [
            "dragon_ball",
            "https://m.media-amazon.com/images/M/MV5BMGMyOThiMGUtYmFmZi00YWM0LWJiM2QtZGMwM2Q2ODE4MzhhXkEyXkFqcGdeQXVyMjc2Nzg5OTQ@._V1_FMjpg_UX1000_.jpg"
        ],
        [
            "bleach",
            "https://m.media-amazon.com/images/M/MV5BZjE0YjVjODQtZGY2NS00MDcyLThhMDAtZGQwMTZiOWNmNjRiXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg"
        ],
        [
            "black_clover",
            "https://m.media-amazon.com/images/M/MV5BNTAzYTlkMWEtOTNjZC00ZDU0LWI5ODUtYTRmYzY0MTAzYWZlXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_FMjpg_UX1000_.jpg"
        ],
        [
            "jujutsu_kaisen",
            "https://m.media-amazon.com/images/M/MV5BNGY4MTg3NzgtMmFkZi00NTg5LWExMmEtMWI3YzI1ODdmMWQ1XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg"
        ],
        [
            "fma_brotherhood",
            "https://m.media-amazon.com/images/M/MV5BZmEzN2YzOTItMDI5MS00MGU4LWI1NWQtOTg5ZThhNGQwYTEzXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg"
        ],
        [
            "naruto",
            "https://m.media-amazon.com/images/M/MV5BZmQ5NGFiNWEtMmMyMC00MDdiLTg4YjktOGY5Yzc2MDUxMTE1XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg"
        ],
        [
            "gintama",
            "https://m.media-amazon.com/images/M/MV5BMDkxZTJjZTEtMDRjMy00Yzk1LWI5YjItMjIwYmVlYzhlZWZhXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_FMjpg_UX1000_.jpg"
        ],
//        [
//            "one_piece",
//            "https://m.media-amazon.com/images/M/MV5BODcwNWE3OTMtMDc3MS00NDFjLWE1OTAtNDU3NjgxODMxY2UyXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg"
//        ],
//        [
//            "demon_slayer",
//            "https://m.media-amazon.com/images/M/MV5BZjZjNzI5MDctY2Y4YS00NmM4LTljMmItZTFkOTExNGI3ODRhXkEyXkFqcGdeQXVyNjc3MjQzNTI@._V1_.jpg"
//        ],
//        [
//            "attack_on_titan",
//            "https://flxt.tmsimg.com/assets/p10701949_b_v8_ah.jpg"
//        ],
//        [
//            "hunter_x_hunter",
//            "https://m.media-amazon.com/images/M/MV5BZjNmZDhkN2QtNDYyZC00YzJmLTg0ODUtN2FjNjhhMzE3ZmUxXkEyXkFqcGdeQXVyNjc2NjA5MTU@._V1_FMjpg_UX1000_.jpg"
//        ],
//        [
//            "boku_no_hero_academia",
//            "https://i.pinimg.com/736x/0f/7f/ee/0f7feeb4655ffc029d1b9823bafb2ff8.jpg"
//        ]
    ];

    private function getQuotes(string $title){
        $url = self::$urlAPI;
        $api_response_test = Http::get("https://tsunderesimulatorchat.000webhostapp.com/");
        $api_response = Http::get($url . '/' . $title . '.json');
        $response = json_decode($api_response->body(), true);
        Log::debug($response);
        $quotesFinal = collect($response)->random(1)[0]['quotes'];
        return $quotesFinal;
    }

    private function random(){
        $colAnime = collect(self::$animeName);
        $getRandom = $colAnime->random(1);
        return [$getRandom[0][0], $getRandom[0][1]];
    }

    public function getFinalQuotes(){
        $data = self::random();
        $bg = collect(["cover.webp","bg.webp","bg1.webp","bg2.webp","bg3.webp","bg4.webp"])->random(1);
        $dumpData = [
            "anime" => str_replace("_"," ",$data[0]),
            "quotes" => self::getQuotes($data[0]),
            "img" => $data[1],
            "bgImg" => $bg[0]
        ];
        return collect($dumpData);
    }

    public function index(){
        return view('quotes',$this::getFinalQuotes());
    }
}
