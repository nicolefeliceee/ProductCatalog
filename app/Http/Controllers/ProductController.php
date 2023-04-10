<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $arrProduk = [
            [
                "name" => "Monopoly",
                "slug" => "monopoly",
                "description" => "Dalam permainan ini, pemain berusaha untuk mengumpulkan properti dan membangun bangunan di atasnya, sambil mengumpulkan uang dan menghindari bangkrut. Pemain dapat membeli dan menjual properti, serta membayar sewa kepada pemain lain yang memiliki properti yang sama.",
                "status" => "SR",
                "price" => "50000"
            ],
            [
                "name" => "Settlers of Catan",
                "slug" => "settlers-of-catan",
                "description" => "Dalam permainan ini, pemain berusaha untuk membangun koloni dan mengumpulkan sumber daya (kayu, batu, wol, dll.) yang diperlukan untuk membangun dan berkembang. Pemain dapat memperoleh sumber daya melalui perdagangan dengan pemain lain atau melalui dadu.",
                "status" => "SSR",
                "price" => "100000"
            ],
            [
                "name" => "Scrabble",
                "slug" => "scrabble",
                "description" => "Dalam permainan ini, pemain mencoba untuk membuat kata-kata dari huruf-huruf yang diberikan di tangan mereka pada papan permainan. Pemain mendapatkan poin untuk setiap kata yang mereka buat, dan poin tersebut dihitung berdasarkan jumlah dan nilai huruf dalam kata tersebut.",
                "status" => "R",
                "price" => "120000"
            ],
            [
                "name" => "Chess",
                "slug" => "chess",
                "description" => "Dalam permainan ini, pemain menggerakkan bidak-bidak mereka pada papan permainan, dengan tujuan untuk menyerang dan mengambil bidak-bidak lawan. Pemain berusaha untuk melindungi raja mereka sendiri, sambil berusaha untuk menyerang raja lawan dan mengamankan kemenangan.",
                "status" => "SSR",
                "price" => "200000"
            ],
            [
                "name" => "Risk",
                "slug" => "risk",
                "description" => "Dalam permainan ini, pemain mengambil alih negara dan berusaha untuk menguasai dunia dengan mengirim pasukan mereka untuk menyerang negara-negara lain. Pemain dapat memperoleh kartu yang memberikan bonus pasukan atau kesempatan untuk menyerang lebih banyak negara.",
                "status" => "R",
                "price" => "10000"
            ]
        ];
        return view('productCatalogue', compact('arrProduk'));
    }

    public function details(Request $request, $slug){
        $arrProduk = [
            [
                "name" => "Monopoly",
                "slug" => "monopoly",
                "image" => "monopoly.jpg",
                "description" => "Dalam permainan ini, pemain berusaha untuk mengumpulkan properti dan membangun bangunan di atasnya, sambil mengumpulkan uang dan menghindari bangkrut. Pemain dapat membeli dan menjual properti, serta membayar sewa kepada pemain lain yang memiliki properti yang sama.",
                "status" => "SR",
                "price" => "50000"
            ],
            [
                "name" => "Settlers of Catan",
                "slug" => "settlers-of-catan",
                "image" => "catan.jpg",
                "description" => "Dalam permainan ini, pemain berusaha untuk membangun koloni dan mengumpulkan sumber daya (kayu, batu, wol, dll.) yang diperlukan untuk membangun dan berkembang. Pemain dapat memperoleh sumber daya melalui perdagangan dengan pemain lain atau melalui dadu.",
                "status" => "SSR",
                "price" => "100000"
            ],
            [
                "name" => "Scrabble",
                "slug" => "scrabble",
                "image" => "scrabble.jpg",
                "description" => "Dalam permainan ini, pemain mencoba untuk membuat kata-kata dari huruf-huruf yang diberikan di tangan mereka pada papan permainan. Pemain mendapatkan poin untuk setiap kata yang mereka buat, dan poin tersebut dihitung berdasarkan jumlah dan nilai huruf dalam kata tersebut.",
                "status" => "R",
                "price" => "120000"
            ],
            [
                "name" => "Chess",
                "slug" => "chess",
                "image" => "chess.jpg",
                "description" => "Dalam permainan ini, pemain menggerakkan bidak-bidak mereka pada papan permainan, dengan tujuan untuk menyerang dan mengambil bidak-bidak lawan. Pemain berusaha untuk melindungi raja mereka sendiri, sambil berusaha untuk menyerang raja lawan dan mengamankan kemenangan.",
                "status" => "SSR",
                "price" => "200000"
            ],
            [
                "name" => "Risk",
                "slug" => "risk",
                "image" => "risk.jpg",
                "description" => "Dalam permainan ini, pemain mengambil alih negara dan berusaha untuk menguasai dunia dengan mengirim pasukan mereka untuk menyerang negara-negara lain. Pemain dapat memperoleh kartu yang memberikan bonus pasukan atau kesempatan untuk menyerang lebih banyak negara.",
                "status" => "R",
                "price" => "10000"
            ]
        ];
        return view('productDetail', compact('arrProduk', 'slug'));
    }


}
