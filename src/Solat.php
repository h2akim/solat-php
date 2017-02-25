<?php

namespace Solat;

use Goutte\Client;

class Solat
{

    /**
     * e-solat url
     *
     * @var string
     */
    protected static $url = "http://www.e-solat.gov.my/web/my_waktusolat/mod_waktusolatget.php?negeri=";

    /**
     * Full solat time
     *
     * @var array
     */
    protected static $timeFull = [

        "JHR01" => [
            "codes" => "2.416666666667;99.999999999999;Pulau Aur dan Pemanggil ;8;Pulau Aur Johor;JHR01",
            "location" => "JOHOR -- Pulau Aur dan Pemanggil",
        ],

        "JHR02" => [
            "codes" => "1.716666666667;99.999999999999;Kota Tinggi, Mersing, Johor Bahru;8;Kota Tinggi;JHR02",
            "location" => "JOHOR -- Kota Tinggi, Mersing, Johor Bahru",
        ],

        "JHR03" => [
            "codes" => "1.650000000000;99.999999999999;Kluang dan Pontian;8;Pontian;JHR03",
            "location" => "JOHOR -- Kluang dan Pontian",
        ],

        "JHR04" => [
            "codes" => "2.266666666667;99.999999999999;Batu Pahat, Muar, Segamat, Gemas;8;Muar;JHR04",
            "location" => "JOHOR -- Batu Pahat, Muar, Segamat, Gemas",
        ],

        "KDH01" => [
            "codes" => "6.266666666667;99.999999999999;Kota Setar, Kubang Pasu, Pokok Sena;8;Masjid Zahir Alor Setar;KDH01",
            "location" => "KEDAH -- Kota Setar, Kubang Pasu, Pokok Sena",
        ],

        "KDH02" => [
            "codes" => "6.283333333333;99.999999999999;Pendang, Kuala Muda, Yan;8;Pendang, Kuala Muda, Yan;KDH02",
            "location" => "KEDAH -- Pendang, Kuala Muda, Yan",
        ],

        "KDH03" => [
            "codes" => "6.150000000000;99.999999999999;Padang Terap, Sik;8;Padang Terap, Sik;KDH03",
            "location" => "KEDAH -- Padang Terap, Sik",
        ],

        "KDH04" => [
            "codes" => "6.366666666667;99.683333333333;Baling;8;Baling;KDH04",
            "location" => "KEDAH -- Baling",
        ],

        "KDH05" => [
            "codes" => "0.000000000000;0.000000000000;Kulim, Bandar Bahru;8;Kulim, Bandar Bahru;KDH05",
            "location" => "KEDAH -- Kulim, Bandar Bahru",
        ],

        "KDH06" => [
            "codes" => "0.000000000000;0.000000000000;Langkawi;8;Langkawi;KDH06",
            "location" => "KEDAH -- Langkawi",
        ],

        "KDH07" => [
            "codes" => "0.000000000000;0.000000000000;Gunung Jerai;8;Gunung Jerai;KDH07",
            "location" => "KEDAH -- Gunung Jerai",
        ],

        "KTN01" => [
            "codes" => "6.016666666667;99.999999999999;K.Bharu,Bachok,Pasir Puteh,Tumpat,Pasir Mas,Tnh. Merah,Machang,Kuala Krai,Mukim Chiku;8;Kota Bharu Kelantan;KTN01",
            "location" => "KELANTAN -- K.Bharu,Bachok,Pasir Puteh,Tumpat,Pasir Mas,Tnh. Merah,Machang,Kuala Krai,Mukim Chiku",
        ],

        "KTN03" => [
            "codes" => "4.950000000000;99.999999999999;Jeli, Gua Musang (Mukim Galas, Bertam);8;Gua Musang;KTN03",
            "location" => "KELANTAN -- Jeli, Gua Musang (Mukim Galas, Bertam)",
        ],

        "MLK01" => [
            "codes" => "2.383333333333;99.999999999999;Bandar Melaka, Alor Gajah, Jasin, Masjid Tanah, Merlimau, Nyalas;8;Bandar Melaka;MLK01",
            "location" => "MELAKA -- Bandar Melaka, Alor Gajah, Jasin, Masjid Tanah, Merlimau, Nyalas",
        ],

        "NGS01" => [
            "codes" => "2.900000000000;99.999999999999;Jempol, Tampin;8;Jempol, Tampin;NGS01",
            "location" => "NEGERI_SEMBILAN -- Jempol, Tampin",
        ],

        "NGS02" => [
            "codes" => "2.533333333333;99.999999999999;Port Dickson, Seremban, Kuala Pilah, Jelebu, Rembau;8;Port Dickson;NGS02",
            "location" => "NEGERI_SEMBILAN -- Port Dickson, Seremban, Kuala Pilah, Jelebu, Rembau",
        ],

        "PHG01" => [
            "codes" => "2.766666666667;99.999999999999;Pulau Tioman;8;Pulau Tioman;PHG01",
            "location" => "PAHANG -- Pulau Tioman",
        ],

        "PHG02" => [
            "codes" => "3.083333333333;99.999999999999;Kuantan, Pekan, Rompin, Muadzam Shah;8;Kuantan Pahang;PHG02",
            "location" => "PAHANG -- Kuantan, Pekan, Rompin, Muadzam Shah",
        ],

        "PHG03" => [
            "codes" => "3.466666666667;99.999999999999;Maran, Chenor, Temerloh, Bera, Jerantut;8;Temerloh Pahang;PHG03",
            "location" => "PAHANG -- Maran, Chenor, Temerloh, Bera, Jerantut",
        ],

        "PHG04" => [
            "codes" => "3.983333333333;99.999999999999;Bentong, Raub, Kuala Lipis;8;Bentong Pahang;PHG04",
            "location" => "PAHANG -- Bentong, Raub, Kuala Lipis",
        ],

        "PHG05" => [
            "codes" => "3.716666666667;99.999999999999;Genting Sempah, Janda Baik, Bukit Tinggi;8;Janda Baik Pahang;PHG05",
            "location" => "PAHANG -- Genting Sempah, Janda Baik, Bukit Tinggi",
        ],

        "PHG06" => [
            "codes" => "4.466666666667;99.999999999999;Bukit Fraser, Genting Higlands, Cameron Higlands;8;Genting Higlands;PHG06",
            "location" => "PAHANG -- Bukit Fraser, Genting Higlands, Cameron Higlands",
        ],

        "PLS01" => [
            "codes" => "6.433333333333;99.999999999999;Kangar, Padang Besar, Arau;8;Kangar, Padang Besar, Arau;PLS01",
            "location" => "PERLIS -- Kangar, Padang Besar, Arau",
        ],

        "PNG01" => [
            "codes" => "5.416666666667;99.999999999999;Seluruh Negeri Pulau Pinang;8;Seluruh Negeri Pulau Pinang;PNG01",
            "location" => "PULAU_PINANG -- Seluruh Negeri Pulau Pinang",
        ],

        "PRK01" => [
            "codes" => "4.766666666667;99.999999999999;Tapah,Slim River dan Tanjung Malim;8;Tanjung Malim;PRK01",
            "location" => "PERAK -- Tapah,Slim River dan Tanjung Malim",
        ],

        "PRK02" => [
            "codes" => "5.133333333333;99.999999999999;Ipoh, Batu Gajah, Kampar, Sg. Siput dan Kuala Kangsar;8;Ipoh;PRK02",
            "location" => "PERAK -- Ipoh, Batu Gajah, Kampar, Sg. Siput dan Kuala Kangsar",
        ],

        "PRK03" => [
            "codes" => "4.866666666667;99.999999999999;Pengkalan Hulu, Grik dan Lenggong;8;Pengkalan Hulu Perak;PRK03",
            "location" => "PERAK -- Pengkalan Hulu, Grik dan Lenggong",
        ],

        "PRK04" => [
            "codes" => "0.000000000000;0.000000000000;Temengor dan Belum;8;Temengor Perak;PRK04",
            "location" => "PERAK -- Temengor dan Belum",
        ],

        "PRK05" => [
            "codes" => "0.000000000000;0.000000000000;Teluk Intan, Bagan Datoh, Kg.Gajah,Sri Iskandar, Beruas,Parit,Lumut,Setiawan dan Pulau Pangkor;8;Teluk Intan Perak;PRK05",
            "location" => "PERAK -- Teluk Intan, Bagan Datoh, Kg.Gajah,Sri Iskandar, Beruas,Parit,Lumut,Setiawan dan Pulau Pangkor",
        ],

        "PRK06" => [
            "codes" => "0.000000000000;0.000000000000;Selama, Taiping, Bagan Serai dan Parit Buntar;8;Taiping;PRK06",
            "location" => "PERAK -- Selama, Taiping, Bagan Serai dan Parit Buntar",
        ],

        "PRK07" => [
            "codes" => "0.000000000000;0.000000000000;Bukit Larut;8;Bukit Larut;PRK07",
            "location" => "PERAK -- Bukit Larut",
        ],

        "SBH01" => [
            "codes" => "5.500000000000;99.999999999999;Zon 1 - Sandakan, Bdr. Bkt. Garam, Semawang, Temanggong, Tambisan;8;Sandakan Sabah;SBH01",
            "location" => "SABAH -- Zon 1 - Sandakan, Bdr. Bkt. Garam, Semawang, Temanggong, Tambisan",
        ],

        "SBH02" => [
            "codes" => "5.216666666667;99.999999999999;Zon 2 - Pinangah, Terusan, Beluran, Kuamut, Telupit;8;Beluran Sabah;SBH02",
            "location" => "SABAH -- Zon 2 - Pinangah, Terusan, Beluran, Kuamut, Telupit",
        ],

        "SBH03" => [
            "codes" => "5.016666666667;99.999999999999;Zon 3 - Lahad Datu, Kunak, Silabukan, Tungku, Sahabat, Semporna;8;Lahad Datu Sabah;SBH03",
            "location" => "SABAH -- Zon 3 - Lahad Datu, Kunak, Silabukan, Tungku, Sahabat, Semporna",
        ],

        "SBH04" => [
            "codes" => "4.416666666667;99.999999999999;Zon 4 - Tawau, Balong, Merotai, Kalabakan;8;Tawau Sabah;SBH04",
            "location" => "SABAH -- Zon 4 - Tawau, Balong, Merotai, Kalabakan",
        ],

        "SBH05" => [
            "codes" => "6.883333333333;99.999999999999;Zon 5 - Kudat, Kota Marudu, Pitas, Pulau Banggi;8;Kudat Sabah;SBH05",
            "location" => "SABAH -- Zon 5 - Kudat, Kota Marudu, Pitas, Pulau Banggi",
        ],

        "SBH06" => [
            "codes" => "6.083333333333;99.999999999999;Zon 6 - Gunung Kinabalu;8;Gunung Kinabalu Sabah;SBH06",
            "location" => "SABAH -- Zon 6 - Gunung Kinabalu",
        ],

        "SBH07" => [
            "codes" => "5.733333333333;99.999999999999;Zon 7 - Papar, Ranau, Kota Belud, Tuaran, Penampang, Kota Kinabalu;8;Kota Belud Sabah;SBH07",
            "location" => "SABAH -- Zon 7 - Papar, Ranau, Kota Belud, Tuaran, Penampang, Kota Kinabalu",
        ],

        "SBH08" => [
            "codes" => "5.333333333333;99.999999999999;Zon 8 - Pensiangan, Keningau, Tambunan, Nabawan;8;Keningau Sabah;SBH08",
            "location" => "SABAH -- Zon 8 - Pensiangan, Keningau, Tambunan, Nabawan",
        ],

        "SBH09" => [
            "codes" => "5.083333333333;99.999999999999;Zon 9 - Sipitang, Membakut, Beaufort, Kuala Penyu, Weston, Tenom, Long Pa Sia;8;Beaufort Sabah;SBH09",
            "location" => "SABAH -- Zon 9 - Sipitang, Membakut, Beaufort, Kuala Penyu, Weston, Tenom, Long Pa Sia",
        ],

        "SGR01" => [
            "codes" => "3.250000000000;99.999999999999;Gombak,H.Selangor,Rawang, H.Langat,Sepang,Petaling,  S.Alam;8;Kajang Selangor;SGR01",
            "location" => "SELANGOR -- Gombak,H.Selangor,Rawang, H.Langat,Sepang,Petaling,  S.Alam",
        ],

        "SGR02" => [
            "codes" => "3.766666666667;99.999999999999;Sabak Bernam, Kuala Selangor,  Klang, Kuala Langat;8;Sabak Bernam;SGR02",
            "location" => "SELANGOR -- Sabak Bernam, Kuala Selangor,  Klang, Kuala Langat",
        ],

        "SGR03" => [
            "codes" => "3.250000000000;99.999999999999;Kuala Lumpur;8;Masjid Negara ;SGR03",
            "location" => "KUALA LUMPUR -- Kuala Lumpur",
        ],

        "SGR04" => [
            "codes" => "2.935300000000;99.999999999999;Putrajaya;8;Masjid Putra Putrajaya;SGR04",
            "location" => "PUTRAJAYA -- Putrajaya",
        ],

        "SWK01" => [
            "codes" => "0.000000000000;0.000000000000;Zon 1 - Limbang, Sundar, Trusan, Lawas;8;Limbang Sarawak;SWK01",
            "location" => "SARAWAK -- Zon 1 - Limbang, Sundar, Trusan, Lawas",
        ],

        "SWK02" => [
            "codes" => "0.000000000000;0.000000000000;Zon 2 - Niah, Bekenu, Miri, Sibuti, Marudi;8;Miri Sarawak;SWK02",
            "location" => "SARAWAK -- Zon 2 - Niah, Bekenu, Miri, Sibuti, Marudi",
        ],

        "SWK03" => [
            "codes" => "0.000000000000;0.000000000000;Zon 3 - Tatau, Suai, Belaga, Pandan, Sebauh, Bintulu;8;Bintulu Sarawak;SWK03",
            "location" => "SARAWAK -- Zon 3 - Tatau, Suai, Belaga, Pandan, Sebauh, Bintulu",
        ],

        "SWK04" => [
            "codes" => "0.000000000000;0.000000000000;Zon 4 - Igan, Oya, Balingian, Mukah, Dalat, Sibu, Kanowit, Kapit, Song;8;Sibu Sarawak;SWK04",
            "location" => "SARAWAK -- Zon 4 - Igan, Oya, Balingian, Mukah, Dalat, Sibu, Kanowit, Kapit, Song",
        ],

        "SWK05" => [
            "codes" => "0.000000000000;0.000000000000;Zon 5 - Tanjung Manis, Belawai, Matu, Daro, Sarikei, Julau, Bintangor, Rajang;8;Sarikei Sarawak;SWK05",
            "location" => "SARAWAK -- Zon 5 - Tanjung Manis, Belawai, Matu, Daro, Sarikei, Julau, Bintangor, Rajang",
        ],

        "SWK06" => [
            "codes" => "0.000000000000;0.000000000000;Zon 6 - Kabong, Lingga, Sri Aman, Engkelili, Lubok Antu, Betong, Spaoh, Pusa, Saratok, Roban, Debak;8;Sri Aman Sarawak;SWK06",
            "location" => "SARAWAK -- Zon 6 - Kabong, Lingga, Sri Aman, Engkelili, Lubok Antu, Betong, Spaoh, Pusa, Saratok, Roban, Debak",
        ],

        "SWK07" => [
            "codes" => "0.000000000000;0.000000000000;Zon 7 - Samarahan, Simunjan, Serian, Sebuyau, Meludam;8;Samarahan Sarawak;SWK07",
            "location" => "SARAWAK -- Zon 7 - Samarahan, Simunjan, Serian, Sebuyau, Meludam",
        ],

        "SWK08" => [
            "codes" => "1.816666666667;99.999999999999;Zon 8 - Kuching, Bau, Lundu,Sematan;8;Kuching Sarawak;SWK08",
            "location" => "SARAWAK -- Zon 8 - Kuching, Bau, Lundu,Sematan",
        ],

        "SWK09" => [
            "codes" => "0.000000000000;0.000000000000;Zon 9 - Zon Khas ;8;Kuching Sarawak;SWK09",
            "location" => "SARAWAK -- Zon 9 - Zon Khas",
        ],

        "TRG01" => [
            "codes" => "5.250000000000;99.999999999999;Kuala Terengganu, Marang;8;Kuala Terengganu, Marang;TRG01",
            "location" => "TERENGGANU -- Kuala Terengganu, Marang",
        ],

        "TRG02" => [
            "codes" => "5.416666666667;99.999999999999;Besut, Setiu;8;Besut, Setiu;TRG02",
            "location" => "TERENGGANU -- Besut, Setiu",
        ],

        "TRG03" => [
            "codes" => "5.000000000000;99.999999999999;Hulu Terengganu;8;Hulu Terengganu;TRG03",
            "location" => "TERENGGANU -- Hulu Terengganu",
        ],

        "TRG04" => [
            "codes" => "4.500000000000;99.999999999999;Kemaman Dungun;8;Dungun Terengganu;TRG04",
            "location" => "TERENGGANU -- Kemaman Dungun",
        ],

        "WLY02" => [
            "codes" => "5.283333333333;99.999999999999;Labuan;8;Labuan;WLY02",
            "location" => "LABUAN -- Labuan",
        ],

    ];

    /**
     * Gather solat time based on the location given
     *
     * @param $location
     *
     * @return JSON
     */
    public function location($location = null)
    {

        if ($location) {
            if (array_key_exists($location, self::$timeFull)) {
                $location = self::$timeFull[$location];
            } else {
                $text = "Oops! Location not found. Please refer to below location list\n\n";
                return $text . $this->timeList();
            }
        } else {

        }

        $client = new Client();
        $crawler = $client->request('GET', self::$url . $location);

        $solatTime = [];
        $solatNow = null;
        $time = false;
        $crawler->filter('td')->each(function ($node) use (&$solatTime, &$solatNow, &$time) {
            if (!$time) {
                $solatNow = trim($node->text());
                $time = true;
            } else {
                $solatTime[$solatNow] = trim($node->text());
                $time = false;
            }
        });

        return json_encode($solatTime);

    }

    /**
     * Show location list
     *
     * @return string
     */
    public function timeList()
    {

        $usage = [];

        foreach (self::$timeFull as $key => $value) {

            $usage[] = "[$key] -> " . $value['location'];

        }

        $usage = implode("\n", $usage);

        return $usage;

    }

}
