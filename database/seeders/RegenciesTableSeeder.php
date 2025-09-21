<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegenciesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('regencies')->upsert([
            0 => [
                'id' => '1101',
                'province_id' => '11',
                'name' => 'KAB. ACEH SELATAN',
            ],
            1 => [
                'id' => '1102',
                'province_id' => '11',
                'name' => 'KAB. ACEH TENGGARA',
            ],
            2 => [
                'id' => '1103',
                'province_id' => '11',
                'name' => 'KAB. ACEH TIMUR',
            ],
            3 => [
                'id' => '1104',
                'province_id' => '11',
                'name' => 'KAB. ACEH TENGAH',
            ],
            4 => [
                'id' => '1105',
                'province_id' => '11',
                'name' => 'KAB. ACEH BARAT',
            ],
            5 => [
                'id' => '1106',
                'province_id' => '11',
                'name' => 'KAB. ACEH BESAR',
            ],
            6 => [
                'id' => '1107',
                'province_id' => '11',
                'name' => 'KAB. PIDIE',
            ],
            7 => [
                'id' => '1108',
                'province_id' => '11',
                'name' => 'KAB. ACEH UTARA',
            ],
            8 => [
                'id' => '1109',
                'province_id' => '11',
                'name' => 'KAB. SIMEULUE',
            ],
            9 => [
                'id' => '1110',
                'province_id' => '11',
                'name' => 'KAB. ACEH SINGKIL',
            ],
            10 => [
                'id' => '1111',
                'province_id' => '11',
                'name' => 'KAB. BIREUEN',
            ],
            11 => [
                'id' => '1112',
                'province_id' => '11',
                'name' => 'KAB. ACEH BARAT DAYA',
            ],
            12 => [
                'id' => '1113',
                'province_id' => '11',
                'name' => 'KAB. GAYO LUES',
            ],
            13 => [
                'id' => '1114',
                'province_id' => '11',
                'name' => 'KAB. ACEH JAYA',
            ],
            14 => [
                'id' => '1115',
                'province_id' => '11',
                'name' => 'KAB. NAGAN RAYA',
            ],
            15 => [
                'id' => '1116',
                'province_id' => '11',
                'name' => 'KAB. ACEH TAMIANG',
            ],
            16 => [
                'id' => '1117',
                'province_id' => '11',
                'name' => 'KAB. BENER MERIAH',
            ],
            17 => [
                'id' => '1118',
                'province_id' => '11',
                'name' => 'KAB. PIDIE JAYA',
            ],
            18 => [
                'id' => '1171',
                'province_id' => '11',
                'name' => 'KOTA BANDA ACEH',
            ],
            19 => [
                'id' => '1172',
                'province_id' => '11',
                'name' => 'KOTA SABANG',
            ],
            20 => [
                'id' => '1173',
                'province_id' => '11',
                'name' => 'KOTA LHOKSEUMAWE',
            ],
            21 => [
                'id' => '1174',
                'province_id' => '11',
                'name' => 'KOTA LANGSA',
            ],
            22 => [
                'id' => '1175',
                'province_id' => '11',
                'name' => 'KOTA SUBULUSSALAM',
            ],
            23 => [
                'id' => '1201',
                'province_id' => '12',
                'name' => 'KAB. TAPANULI TENGAH',
            ],
            24 => [
                'id' => '1202',
                'province_id' => '12',
                'name' => 'KAB. TAPANULI UTARA',
            ],
            25 => [
                'id' => '1203',
                'province_id' => '12',
                'name' => 'KAB. TAPANULI SELATAN',
            ],
            26 => [
                'id' => '1204',
                'province_id' => '12',
                'name' => 'KAB. NIAS',
            ],
            27 => [
                'id' => '1205',
                'province_id' => '12',
                'name' => 'KAB. LANGKAT',
            ],
            28 => [
                'id' => '1206',
                'province_id' => '12',
                'name' => 'KAB. KARO',
            ],
            29 => [
                'id' => '1207',
                'province_id' => '12',
                'name' => 'KAB. DELI SERDANG',
            ],
            30 => [
                'id' => '1208',
                'province_id' => '12',
                'name' => 'KAB. SIMALUNGUN',
            ],
            31 => [
                'id' => '1209',
                'province_id' => '12',
                'name' => 'KAB. ASAHAN',
            ],
            32 => [
                'id' => '1210',
                'province_id' => '12',
                'name' => 'KAB. LABUHANBATU',
            ],
            33 => [
                'id' => '1211',
                'province_id' => '12',
                'name' => 'KAB. DAIRI',
            ],
            34 => [
                'id' => '1212',
                'province_id' => '12',
                'name' => 'KAB. TOBA',
            ],
            35 => [
                'id' => '1213',
                'province_id' => '12',
                'name' => 'KAB. MANDAILING NATAL',
            ],
            36 => [
                'id' => '1214',
                'province_id' => '12',
                'name' => 'KAB. NIAS SELATAN',
            ],
            37 => [
                'id' => '1215',
                'province_id' => '12',
                'name' => 'KAB. PAKPAK BHARAT',
            ],
            38 => [
                'id' => '1216',
                'province_id' => '12',
                'name' => 'KAB. HUMBANG HASUNDUTAN',
            ],
            39 => [
                'id' => '1217',
                'province_id' => '12',
                'name' => 'KAB. SAMOSIR',
            ],
            40 => [
                'id' => '1218',
                'province_id' => '12',
                'name' => 'KAB. SERDANG BEDAGAI',
            ],
            41 => [
                'id' => '1219',
                'province_id' => '12',
                'name' => 'KAB. BATU BARA',
            ],
            42 => [
                'id' => '1220',
                'province_id' => '12',
                'name' => 'KAB. PADANG LAWAS UTARA',
            ],
            43 => [
                'id' => '1221',
                'province_id' => '12',
                'name' => 'KAB. PADANG LAWAS',
            ],
            44 => [
                'id' => '1222',
                'province_id' => '12',
                'name' => 'KAB. LABUHANBATU SELATAN',
            ],
            45 => [
                'id' => '1223',
                'province_id' => '12',
                'name' => 'KAB. LABUHANBATU UTARA',
            ],
            46 => [
                'id' => '1224',
                'province_id' => '12',
                'name' => 'KAB. NIAS UTARA',
            ],
            47 => [
                'id' => '1225',
                'province_id' => '12',
                'name' => 'KAB. NIAS BARAT',
            ],
            48 => [
                'id' => '1271',
                'province_id' => '12',
                'name' => 'KOTA MEDAN',
            ],
            49 => [
                'id' => '1272',
                'province_id' => '12',
                'name' => 'KOTA PEMATANGSIANTAR',
            ],
            50 => [
                'id' => '1273',
                'province_id' => '12',
                'name' => 'KOTA SIBOLGA',
            ],
            51 => [
                'id' => '1274',
                'province_id' => '12',
                'name' => 'KOTA TANJUNG BALAI',
            ],
            52 => [
                'id' => '1275',
                'province_id' => '12',
                'name' => 'KOTA BINJAI',
            ],
            53 => [
                'id' => '1276',
                'province_id' => '12',
                'name' => 'KOTA TEBING TINGGI',
            ],
            54 => [
                'id' => '1277',
                'province_id' => '12',
                'name' => 'KOTA PADANGSIDIMPUAN',
            ],
            55 => [
                'id' => '1278',
                'province_id' => '12',
                'name' => 'KOTA GUNUNGSITOLI',
            ],
            56 => [
                'id' => '1301',
                'province_id' => '13',
                'name' => 'KAB. PESISIR SELATAN',
            ],
            57 => [
                'id' => '1302',
                'province_id' => '13',
                'name' => 'KAB. SOLOK',
            ],
            58 => [
                'id' => '1303',
                'province_id' => '13',
                'name' => 'KAB. SIJUNJUNG',
            ],
            59 => [
                'id' => '1304',
                'province_id' => '13',
                'name' => 'KAB. TANAH DATAR',
            ],
            60 => [
                'id' => '1305',
                'province_id' => '13',
                'name' => 'KAB. PADANG PARIAMAN',
            ],
            61 => [
                'id' => '1306',
                'province_id' => '13',
                'name' => 'KAB. AGAM',
            ],
            62 => [
                'id' => '1307',
                'province_id' => '13',
                'name' => 'KAB. LIMA PULUH KOTA',
            ],
            63 => [
                'id' => '1308',
                'province_id' => '13',
                'name' => 'KAB. PASAMAN',
            ],
            64 => [
                'id' => '1309',
                'province_id' => '13',
                'name' => 'KAB. KEPULAUAN MENTAWAI',
            ],
            65 => [
                'id' => '1310',
                'province_id' => '13',
                'name' => 'KAB. DHARMASRAYA',
            ],
            66 => [
                'id' => '1311',
                'province_id' => '13',
                'name' => 'KAB. SOLOK SELATAN',
            ],
            67 => [
                'id' => '1312',
                'province_id' => '13',
                'name' => 'KAB. PASAMAN BARAT',
            ],
            68 => [
                'id' => '1371',
                'province_id' => '13',
                'name' => 'KOTA PADANG',
            ],
            69 => [
                'id' => '1372',
                'province_id' => '13',
                'name' => 'KOTA SOLOK',
            ],
            70 => [
                'id' => '1373',
                'province_id' => '13',
                'name' => 'KOTA SAWAHLUNTO',
            ],
            71 => [
                'id' => '1374',
                'province_id' => '13',
                'name' => 'KOTA PADANG PANJANG',
            ],
            72 => [
                'id' => '1375',
                'province_id' => '13',
                'name' => 'KOTA BUKITTINGGI',
            ],
            73 => [
                'id' => '1376',
                'province_id' => '13',
                'name' => 'KOTA PAYAKUMBUH',
            ],
            74 => [
                'id' => '1377',
                'province_id' => '13',
                'name' => 'KOTA PARIAMAN',
            ],
            75 => [
                'id' => '1401',
                'province_id' => '14',
                'name' => 'KAB. KAMPAR',
            ],
            76 => [
                'id' => '1402',
                'province_id' => '14',
                'name' => 'KAB. INDRAGIRI HULU',
            ],
            77 => [
                'id' => '1403',
                'province_id' => '14',
                'name' => 'KAB. BENGKALIS',
            ],
            78 => [
                'id' => '1404',
                'province_id' => '14',
                'name' => 'KAB. INDRAGIRI HILIR',
            ],
            79 => [
                'id' => '1405',
                'province_id' => '14',
                'name' => 'KAB. PELALAWAN',
            ],
            80 => [
                'id' => '1406',
                'province_id' => '14',
                'name' => 'KAB. ROKAN HULU',
            ],
            81 => [
                'id' => '1407',
                'province_id' => '14',
                'name' => 'KAB. ROKAN HILIR',
            ],
            82 => [
                'id' => '1408',
                'province_id' => '14',
                'name' => 'KAB. SIAK',
            ],
            83 => [
                'id' => '1409',
                'province_id' => '14',
                'name' => 'KAB. KUANTAN SINGINGI',
            ],
            84 => [
                'id' => '1410',
                'province_id' => '14',
                'name' => 'KAB. KEPULAUAN MERANTI',
            ],
            85 => [
                'id' => '1471',
                'province_id' => '14',
                'name' => 'KOTA PEKANBARU',
            ],
            86 => [
                'id' => '1472',
                'province_id' => '14',
                'name' => 'KOTA DUMAI',
            ],
            87 => [
                'id' => '1501',
                'province_id' => '15',
                'name' => 'KAB. KERINCI',
            ],
            88 => [
                'id' => '1502',
                'province_id' => '15',
                'name' => 'KAB. MERANGIN',
            ],
            89 => [
                'id' => '1503',
                'province_id' => '15',
                'name' => 'KAB. SAROLANGUN',
            ],
            90 => [
                'id' => '1504',
                'province_id' => '15',
                'name' => 'KAB. BATANGHARI',
            ],
            91 => [
                'id' => '1505',
                'province_id' => '15',
                'name' => 'KAB. MUARO JAMBI',
            ],
            92 => [
                'id' => '1506',
                'province_id' => '15',
                'name' => 'KAB. TANJUNG JABUNG BARAT',
            ],
            93 => [
                'id' => '1507',
                'province_id' => '15',
                'name' => 'KAB. TANJUNG JABUNG TIMUR',
            ],
            94 => [
                'id' => '1508',
                'province_id' => '15',
                'name' => 'KAB. BUNGO',
            ],
            95 => [
                'id' => '1509',
                'province_id' => '15',
                'name' => 'KAB. TEBO',
            ],
            96 => [
                'id' => '1571',
                'province_id' => '15',
                'name' => 'KOTA JAMBI',
            ],
            97 => [
                'id' => '1572',
                'province_id' => '15',
                'name' => 'KOTA SUNGAI PENUH',
            ],
            98 => [
                'id' => '1601',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ULU',
            ],
            99 => [
                'id' => '1602',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ILIR',
            ],
            100 => [
                'id' => '1603',
                'province_id' => '16',
                'name' => 'KAB. MUARA ENIM',
            ],
            101 => [
                'id' => '1604',
                'province_id' => '16',
                'name' => 'KAB. LAHAT',
            ],
            102 => [
                'id' => '1605',
                'province_id' => '16',
                'name' => 'KAB. MUSI RAWAS',
            ],
            103 => [
                'id' => '1606',
                'province_id' => '16',
                'name' => 'KAB. MUSI BANYUASIN',
            ],
            104 => [
                'id' => '1607',
                'province_id' => '16',
                'name' => 'KAB. BANYUASIN',
            ],
            105 => [
                'id' => '1608',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ULU TIMUR',
            ],
            106 => [
                'id' => '1609',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ULU SELATAN',
            ],
            107 => [
                'id' => '1610',
                'province_id' => '16',
                'name' => 'KAB. OGAN ILIR',
            ],
            108 => [
                'id' => '1611',
                'province_id' => '16',
                'name' => 'KAB. EMPAT LAWANG',
            ],
            109 => [
                'id' => '1612',
                'province_id' => '16',
                'name' => 'KAB. PENUKAL ABAB LEMATANG ILIR',
            ],
            110 => [
                'id' => '1613',
                'province_id' => '16',
                'name' => 'KAB. MUSI RAWAS UTARA',
            ],
            111 => [
                'id' => '1671',
                'province_id' => '16',
                'name' => 'KOTA PALEMBANG',
            ],
            112 => [
                'id' => '1672',
                'province_id' => '16',
                'name' => 'KOTA PAGAR ALAM',
            ],
            113 => [
                'id' => '1673',
                'province_id' => '16',
                'name' => 'KOTA LUBUK LINGGAU',
            ],
            114 => [
                'id' => '1674',
                'province_id' => '16',
                'name' => 'KOTA PRABUMULIH',
            ],
            115 => [
                'id' => '1701',
                'province_id' => '17',
                'name' => 'KAB. BENGKULU SELATAN',
            ],
            116 => [
                'id' => '1702',
                'province_id' => '17',
                'name' => 'KAB. REJANG LEBONG',
            ],
            117 => [
                'id' => '1703',
                'province_id' => '17',
                'name' => 'KAB. BENGKULU UTARA',
            ],
            118 => [
                'id' => '1704',
                'province_id' => '17',
                'name' => 'KAB. KAUR',
            ],
            119 => [
                'id' => '1705',
                'province_id' => '17',
                'name' => 'KAB. SELUMA',
            ],
            120 => [
                'id' => '1706',
                'province_id' => '17',
                'name' => 'KAB. MUKO MUKO',
            ],
            121 => [
                'id' => '1707',
                'province_id' => '17',
                'name' => 'KAB. LEBONG',
            ],
            122 => [
                'id' => '1708',
                'province_id' => '17',
                'name' => 'KAB. KEPAHIANG',
            ],
            123 => [
                'id' => '1709',
                'province_id' => '17',
                'name' => 'KAB. BENGKULU TENGAH',
            ],
            124 => [
                'id' => '1771',
                'province_id' => '17',
                'name' => 'KOTA BENGKULU',
            ],
            125 => [
                'id' => '1801',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG SELATAN',
            ],
            126 => [
                'id' => '1802',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG TENGAH',
            ],
            127 => [
                'id' => '1803',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG UTARA',
            ],
            128 => [
                'id' => '1804',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG BARAT',
            ],
            129 => [
                'id' => '1805',
                'province_id' => '18',
                'name' => 'KAB. TULANG BAWANG',
            ],
            130 => [
                'id' => '1806',
                'province_id' => '18',
                'name' => 'KAB. TANGGAMUS',
            ],
            131 => [
                'id' => '1807',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG TIMUR',
            ],
            132 => [
                'id' => '1808',
                'province_id' => '18',
                'name' => 'KAB. WAY KANAN',
            ],
            133 => [
                'id' => '1809',
                'province_id' => '18',
                'name' => 'KAB. PESAWARAN',
            ],
            134 => [
                'id' => '1810',
                'province_id' => '18',
                'name' => 'KAB. PRINGSEWU',
            ],
            135 => [
                'id' => '1811',
                'province_id' => '18',
                'name' => 'KAB. MESUJI',
            ],
            136 => [
                'id' => '1812',
                'province_id' => '18',
                'name' => 'KAB. TULANG BAWANG BARAT',
            ],
            137 => [
                'id' => '1813',
                'province_id' => '18',
                'name' => 'KAB. PESISIR BARAT',
            ],
            138 => [
                'id' => '1871',
                'province_id' => '18',
                'name' => 'KOTA BANDAR LAMPUNG',
            ],
            139 => [
                'id' => '1872',
                'province_id' => '18',
                'name' => 'KOTA METRO',
            ],
            140 => [
                'id' => '1901',
                'province_id' => '19',
                'name' => 'KAB. BANGKA',
            ],
            141 => [
                'id' => '1902',
                'province_id' => '19',
                'name' => 'KAB. BELITUNG',
            ],
            142 => [
                'id' => '1903',
                'province_id' => '19',
                'name' => 'KAB. BANGKA SELATAN',
            ],
            143 => [
                'id' => '1904',
                'province_id' => '19',
                'name' => 'KAB. BANGKA TENGAH',
            ],
            144 => [
                'id' => '1905',
                'province_id' => '19',
                'name' => 'KAB. BANGKA BARAT',
            ],
            145 => [
                'id' => '1906',
                'province_id' => '19',
                'name' => 'KAB. BELITUNG TIMUR',
            ],
            146 => [
                'id' => '1971',
                'province_id' => '19',
                'name' => 'KOTA PANGKAL PINANG',
            ],
            147 => [
                'id' => '2101',
                'province_id' => '21',
                'name' => 'KAB. BINTAN',
            ],
            148 => [
                'id' => '2102',
                'province_id' => '21',
                'name' => 'KAB. KARIMUN',
            ],
            149 => [
                'id' => '2103',
                'province_id' => '21',
                'name' => 'KAB. NATUNA',
            ],
            150 => [
                'id' => '2104',
                'province_id' => '21',
                'name' => 'KAB. LINGGA',
            ],
            151 => [
                'id' => '2105',
                'province_id' => '21',
                'name' => 'KAB. KEPULAUAN ANAMBAS',
            ],
            152 => [
                'id' => '2171',
                'province_id' => '21',
                'name' => 'KOTA BATAM',
            ],
            153 => [
                'id' => '2172',
                'province_id' => '21',
                'name' => 'KOTA TANJUNG PINANG',
            ],
            154 => [
                'id' => '3101',
                'province_id' => '31',
                'name' => 'KAB. ADM. KEP. SERIBU',
            ],
            155 => [
                'id' => '3171',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA PUSAT',
            ],
            156 => [
                'id' => '3172',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA UTARA',
            ],
            157 => [
                'id' => '3173',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA BARAT',
            ],
            158 => [
                'id' => '3174',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA SELATAN',
            ],
            159 => [
                'id' => '3175',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA TIMUR',
            ],
            160 => [
                'id' => '3201',
                'province_id' => '32',
                'name' => 'KAB. BOGOR',
            ],
            161 => [
                'id' => '3202',
                'province_id' => '32',
                'name' => 'KAB. SUKABUMI',
            ],
            162 => [
                'id' => '3203',
                'province_id' => '32',
                'name' => 'KAB. CIANJUR',
            ],
            163 => [
                'id' => '3204',
                'province_id' => '32',
                'name' => 'KAB. BANDUNG',
            ],
            164 => [
                'id' => '3205',
                'province_id' => '32',
                'name' => 'KAB. GARUT',
            ],
            165 => [
                'id' => '3206',
                'province_id' => '32',
                'name' => 'KAB. TASIKMALAYA',
            ],
            166 => [
                'id' => '3207',
                'province_id' => '32',
                'name' => 'KAB. CIAMIS',
            ],
            167 => [
                'id' => '3208',
                'province_id' => '32',
                'name' => 'KAB. KUNINGAN',
            ],
            168 => [
                'id' => '3209',
                'province_id' => '32',
                'name' => 'KAB. CIREBON',
            ],
            169 => [
                'id' => '3210',
                'province_id' => '32',
                'name' => 'KAB. MAJALENGKA',
            ],
            170 => [
                'id' => '3211',
                'province_id' => '32',
                'name' => 'KAB. SUMEDANG',
            ],
            171 => [
                'id' => '3212',
                'province_id' => '32',
                'name' => 'KAB. INDRAMAYU',
            ],
            172 => [
                'id' => '3213',
                'province_id' => '32',
                'name' => 'KAB. SUBANG',
            ],
            173 => [
                'id' => '3214',
                'province_id' => '32',
                'name' => 'KAB. PURWAKARTA',
            ],
            174 => [
                'id' => '3215',
                'province_id' => '32',
                'name' => 'KAB. KARAWANG',
            ],
            175 => [
                'id' => '3216',
                'province_id' => '32',
                'name' => 'KAB. BEKASI',
            ],
            176 => [
                'id' => '3217',
                'province_id' => '32',
                'name' => 'KAB. BANDUNG BARAT',
            ],
            177 => [
                'id' => '3218',
                'province_id' => '32',
                'name' => 'KAB. PANGANDARAN',
            ],
            178 => [
                'id' => '3271',
                'province_id' => '32',
                'name' => 'KOTA BOGOR',
            ],
            179 => [
                'id' => '3272',
                'province_id' => '32',
                'name' => 'KOTA SUKABUMI',
            ],
            180 => [
                'id' => '3273',
                'province_id' => '32',
                'name' => 'KOTA BANDUNG',
            ],
            181 => [
                'id' => '3274',
                'province_id' => '32',
                'name' => 'KOTA CIREBON',
            ],
            182 => [
                'id' => '3275',
                'province_id' => '32',
                'name' => 'KOTA BEKASI',
            ],
            183 => [
                'id' => '3276',
                'province_id' => '32',
                'name' => 'KOTA DEPOK',
            ],
            184 => [
                'id' => '3277',
                'province_id' => '32',
                'name' => 'KOTA CIMAHI',
            ],
            185 => [
                'id' => '3278',
                'province_id' => '32',
                'name' => 'KOTA TASIKMALAYA',
            ],
            186 => [
                'id' => '3279',
                'province_id' => '32',
                'name' => 'KOTA BANJAR',
            ],
            187 => [
                'id' => '3301',
                'province_id' => '33',
                'name' => 'KAB. CILACAP',
            ],
            188 => [
                'id' => '3302',
                'province_id' => '33',
                'name' => 'KAB. BANYUMAS',
            ],
            189 => [
                'id' => '3303',
                'province_id' => '33',
                'name' => 'KAB. PURBALINGGA',
            ],
            190 => [
                'id' => '3304',
                'province_id' => '33',
                'name' => 'KAB. BANJARNEGARA',
            ],
            191 => [
                'id' => '3305',
                'province_id' => '33',
                'name' => 'KAB. KEBUMEN',
            ],
            192 => [
                'id' => '3306',
                'province_id' => '33',
                'name' => 'KAB. PURWOREJO',
            ],
            193 => [
                'id' => '3307',
                'province_id' => '33',
                'name' => 'KAB. WONOSOBO',
            ],
            194 => [
                'id' => '3308',
                'province_id' => '33',
                'name' => 'KAB. MAGELANG',
            ],
            195 => [
                'id' => '3309',
                'province_id' => '33',
                'name' => 'KAB. BOYOLALI',
            ],
            196 => [
                'id' => '3310',
                'province_id' => '33',
                'name' => 'KAB. KLATEN',
            ],
            197 => [
                'id' => '3311',
                'province_id' => '33',
                'name' => 'KAB. SUKOHARJO',
            ],
            198 => [
                'id' => '3312',
                'province_id' => '33',
                'name' => 'KAB. WONOGIRI',
            ],
            199 => [
                'id' => '3313',
                'province_id' => '33',
                'name' => 'KAB. KARANGANYAR',
            ],
            200 => [
                'id' => '3314',
                'province_id' => '33',
                'name' => 'KAB. SRAGEN',
            ],
            201 => [
                'id' => '3315',
                'province_id' => '33',
                'name' => 'KAB. GROBOGAN',
            ],
            202 => [
                'id' => '3316',
                'province_id' => '33',
                'name' => 'KAB. BLORA',
            ],
            203 => [
                'id' => '3317',
                'province_id' => '33',
                'name' => 'KAB. REMBANG',
            ],
            204 => [
                'id' => '3318',
                'province_id' => '33',
                'name' => 'KAB. PATI',
            ],
            205 => [
                'id' => '3319',
                'province_id' => '33',
                'name' => 'KAB. KUDUS',
            ],
            206 => [
                'id' => '3320',
                'province_id' => '33',
                'name' => 'KAB. JEPARA',
            ],
            207 => [
                'id' => '3321',
                'province_id' => '33',
                'name' => 'KAB. DEMAK',
            ],
            208 => [
                'id' => '3322',
                'province_id' => '33',
                'name' => 'KAB. SEMARANG',
            ],
            209 => [
                'id' => '3323',
                'province_id' => '33',
                'name' => 'KAB. TEMANGGUNG',
            ],
            210 => [
                'id' => '3324',
                'province_id' => '33',
                'name' => 'KAB. KENDAL',
            ],
            211 => [
                'id' => '3325',
                'province_id' => '33',
                'name' => 'KAB. BATANG',
            ],
            212 => [
                'id' => '3326',
                'province_id' => '33',
                'name' => 'KAB. PEKALONGAN',
            ],
            213 => [
                'id' => '3327',
                'province_id' => '33',
                'name' => 'KAB. PEMALANG',
            ],
            214 => [
                'id' => '3328',
                'province_id' => '33',
                'name' => 'KAB. TEGAL',
            ],
            215 => [
                'id' => '3329',
                'province_id' => '33',
                'name' => 'KAB. BREBES',
            ],
            216 => [
                'id' => '3371',
                'province_id' => '33',
                'name' => 'KOTA MAGELANG',
            ],
            217 => [
                'id' => '3372',
                'province_id' => '33',
                'name' => 'KOTA SURAKARTA',
            ],
            218 => [
                'id' => '3373',
                'province_id' => '33',
                'name' => 'KOTA SALATIGA',
            ],
            219 => [
                'id' => '3374',
                'province_id' => '33',
                'name' => 'KOTA SEMARANG',
            ],
            220 => [
                'id' => '3375',
                'province_id' => '33',
                'name' => 'KOTA PEKALONGAN',
            ],
            221 => [
                'id' => '3376',
                'province_id' => '33',
                'name' => 'KOTA TEGAL',
            ],
            222 => [
                'id' => '3401',
                'province_id' => '34',
                'name' => 'KAB. KULON PROGO',
            ],
            223 => [
                'id' => '3402',
                'province_id' => '34',
                'name' => 'KAB. BANTUL',
            ],
            224 => [
                'id' => '3403',
                'province_id' => '34',
                'name' => 'KAB. GUNUNGKIDUL',
            ],
            225 => [
                'id' => '3404',
                'province_id' => '34',
                'name' => 'KAB. SLEMAN',
            ],
            226 => [
                'id' => '3471',
                'province_id' => '34',
                'name' => 'KOTA YOGYAKARTA',
            ],
            227 => [
                'id' => '3501',
                'province_id' => '35',
                'name' => 'KAB. PACITAN',
            ],
            228 => [
                'id' => '3502',
                'province_id' => '35',
                'name' => 'KAB. PONOROGO',
            ],
            229 => [
                'id' => '3503',
                'province_id' => '35',
                'name' => 'KAB. TRENGGALEK',
            ],
            230 => [
                'id' => '3504',
                'province_id' => '35',
                'name' => 'KAB. TULUNGAGUNG',
            ],
            231 => [
                'id' => '3505',
                'province_id' => '35',
                'name' => 'KAB. BLITAR',
            ],
            232 => [
                'id' => '3506',
                'province_id' => '35',
                'name' => 'KAB. KEDIRI',
            ],
            233 => [
                'id' => '3507',
                'province_id' => '35',
                'name' => 'KAB. MALANG',
            ],
            234 => [
                'id' => '3508',
                'province_id' => '35',
                'name' => 'KAB. LUMAJANG',
            ],
            235 => [
                'id' => '3509',
                'province_id' => '35',
                'name' => 'KAB. JEMBER',
            ],
            236 => [
                'id' => '3510',
                'province_id' => '35',
                'name' => 'KAB. BANYUWANGI',
            ],
            237 => [
                'id' => '3511',
                'province_id' => '35',
                'name' => 'KAB. BONDOWOSO',
            ],
            238 => [
                'id' => '3512',
                'province_id' => '35',
                'name' => 'KAB. SITUBONDO',
            ],
            239 => [
                'id' => '3513',
                'province_id' => '35',
                'name' => 'KAB. PROBOLINGGO',
            ],
            240 => [
                'id' => '3514',
                'province_id' => '35',
                'name' => 'KAB. PASURUAN',
            ],
            241 => [
                'id' => '3515',
                'province_id' => '35',
                'name' => 'KAB. SIDOARJO',
            ],
            242 => [
                'id' => '3516',
                'province_id' => '35',
                'name' => 'KAB. MOJOKERTO',
            ],
            243 => [
                'id' => '3517',
                'province_id' => '35',
                'name' => 'KAB. JOMBANG',
            ],
            244 => [
                'id' => '3518',
                'province_id' => '35',
                'name' => 'KAB. NGANJUK',
            ],
            245 => [
                'id' => '3519',
                'province_id' => '35',
                'name' => 'KAB. MADIUN',
            ],
            246 => [
                'id' => '3520',
                'province_id' => '35',
                'name' => 'KAB. MAGETAN',
            ],
            247 => [
                'id' => '3521',
                'province_id' => '35',
                'name' => 'KAB. NGAWI',
            ],
            248 => [
                'id' => '3522',
                'province_id' => '35',
                'name' => 'KAB. BOJONEGORO',
            ],
            249 => [
                'id' => '3523',
                'province_id' => '35',
                'name' => 'KAB. TUBAN',
            ],
            250 => [
                'id' => '3524',
                'province_id' => '35',
                'name' => 'KAB. LAMONGAN',
            ],
            251 => [
                'id' => '3525',
                'province_id' => '35',
                'name' => 'KAB. GRESIK',
            ],
            252 => [
                'id' => '3526',
                'province_id' => '35',
                'name' => 'KAB. BANGKALAN',
            ],
            253 => [
                'id' => '3527',
                'province_id' => '35',
                'name' => 'KAB. SAMPANG',
            ],
            254 => [
                'id' => '3528',
                'province_id' => '35',
                'name' => 'KAB. PAMEKASAN',
            ],
            255 => [
                'id' => '3529',
                'province_id' => '35',
                'name' => 'KAB. SUMENEP',
            ],
            256 => [
                'id' => '3571',
                'province_id' => '35',
                'name' => 'KOTA KEDIRI',
            ],
            257 => [
                'id' => '3572',
                'province_id' => '35',
                'name' => 'KOTA BLITAR',
            ],
            258 => [
                'id' => '3573',
                'province_id' => '35',
                'name' => 'KOTA MALANG',
            ],
            259 => [
                'id' => '3574',
                'province_id' => '35',
                'name' => 'KOTA PROBOLINGGO',
            ],
            260 => [
                'id' => '3575',
                'province_id' => '35',
                'name' => 'KOTA PASURUAN',
            ],
            261 => [
                'id' => '3576',
                'province_id' => '35',
                'name' => 'KOTA MOJOKERTO',
            ],
            262 => [
                'id' => '3577',
                'province_id' => '35',
                'name' => 'KOTA MADIUN',
            ],
            263 => [
                'id' => '3578',
                'province_id' => '35',
                'name' => 'KOTA SURABAYA',
            ],
            264 => [
                'id' => '3579',
                'province_id' => '35',
                'name' => 'KOTA BATU',
            ],
            265 => [
                'id' => '3601',
                'province_id' => '36',
                'name' => 'KAB. PANDEGLANG',
            ],
            266 => [
                'id' => '3602',
                'province_id' => '36',
                'name' => 'KAB. LEBAK',
            ],
            267 => [
                'id' => '3603',
                'province_id' => '36',
                'name' => 'KAB. TANGERANG',
            ],
            268 => [
                'id' => '3604',
                'province_id' => '36',
                'name' => 'KAB. SERANG',
            ],
            269 => [
                'id' => '3671',
                'province_id' => '36',
                'name' => 'KOTA TANGERANG',
            ],
            270 => [
                'id' => '3672',
                'province_id' => '36',
                'name' => 'KOTA CILEGON',
            ],
            271 => [
                'id' => '3673',
                'province_id' => '36',
                'name' => 'KOTA SERANG',
            ],
            272 => [
                'id' => '3674',
                'province_id' => '36',
                'name' => 'KOTA TANGERANG SELATAN',
            ],
            273 => [
                'id' => '5101',
                'province_id' => '51',
                'name' => 'KAB. JEMBRANA',
            ],
            274 => [
                'id' => '5102',
                'province_id' => '51',
                'name' => 'KAB. TABANAN',
            ],
            275 => [
                'id' => '5103',
                'province_id' => '51',
                'name' => 'KAB. BADUNG',
            ],
            276 => [
                'id' => '5104',
                'province_id' => '51',
                'name' => 'KAB. GIANYAR',
            ],
            277 => [
                'id' => '5105',
                'province_id' => '51',
                'name' => 'KAB. KLUNGKUNG',
            ],
            278 => [
                'id' => '5106',
                'province_id' => '51',
                'name' => 'KAB. BANGLI',
            ],
            279 => [
                'id' => '5107',
                'province_id' => '51',
                'name' => 'KAB. KARANGASEM',
            ],
            280 => [
                'id' => '5108',
                'province_id' => '51',
                'name' => 'KAB. BULELENG',
            ],
            281 => [
                'id' => '5171',
                'province_id' => '51',
                'name' => 'KOTA DENPASAR',
            ],
            282 => [
                'id' => '5201',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK BARAT',
            ],
            283 => [
                'id' => '5202',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK TENGAH',
            ],
            284 => [
                'id' => '5203',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK TIMUR',
            ],
            285 => [
                'id' => '5204',
                'province_id' => '52',
                'name' => 'KAB. SUMBAWA',
            ],
            286 => [
                'id' => '5205',
                'province_id' => '52',
                'name' => 'KAB. DOMPU',
            ],
            287 => [
                'id' => '5206',
                'province_id' => '52',
                'name' => 'KAB. BIMA',
            ],
            288 => [
                'id' => '5207',
                'province_id' => '52',
                'name' => 'KAB. SUMBAWA BARAT',
            ],
            289 => [
                'id' => '5208',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK UTARA',
            ],
            290 => [
                'id' => '5271',
                'province_id' => '52',
                'name' => 'KOTA MATARAM',
            ],
            291 => [
                'id' => '5272',
                'province_id' => '52',
                'name' => 'KOTA BIMA',
            ],
            292 => [
                'id' => '5301',
                'province_id' => '53',
                'name' => 'KAB. KUPANG',
            ],
            293 => [
                'id' => '5302',
                'province_id' => '53',
                'name' => 'KAB TIMOR TENGAH SELATAN',
            ],
            294 => [
                'id' => '5303',
                'province_id' => '53',
                'name' => 'KAB. TIMOR TENGAH UTARA',
            ],
            295 => [
                'id' => '5304',
                'province_id' => '53',
                'name' => 'KAB. BELU',
            ],
            296 => [
                'id' => '5305',
                'province_id' => '53',
                'name' => 'KAB. ALOR',
            ],
            297 => [
                'id' => '5306',
                'province_id' => '53',
                'name' => 'KAB. FLORES TIMUR',
            ],
            298 => [
                'id' => '5307',
                'province_id' => '53',
                'name' => 'KAB. SIKKA',
            ],
            299 => [
                'id' => '5308',
                'province_id' => '53',
                'name' => 'KAB. ENDE',
            ],
            300 => [
                'id' => '5309',
                'province_id' => '53',
                'name' => 'KAB. NGADA',
            ],
            301 => [
                'id' => '5310',
                'province_id' => '53',
                'name' => 'KAB. MANGGARAI',
            ],
            302 => [
                'id' => '5311',
                'province_id' => '53',
                'name' => 'KAB. SUMBA TIMUR',
            ],
            303 => [
                'id' => '5312',
                'province_id' => '53',
                'name' => 'KAB. SUMBA BARAT',
            ],
            304 => [
                'id' => '5313',
                'province_id' => '53',
                'name' => 'KAB. LEMBATA',
            ],
            305 => [
                'id' => '5314',
                'province_id' => '53',
                'name' => 'KAB. ROTE NDAO',
            ],
            306 => [
                'id' => '5315',
                'province_id' => '53',
                'name' => 'KAB. MANGGARAI BARAT',
            ],
            307 => [
                'id' => '5316',
                'province_id' => '53',
                'name' => 'KAB. NAGEKEO',
            ],
            308 => [
                'id' => '5317',
                'province_id' => '53',
                'name' => 'KAB. SUMBA TENGAH',
            ],
            309 => [
                'id' => '5318',
                'province_id' => '53',
                'name' => 'KAB. SUMBA BARAT DAYA',
            ],
            310 => [
                'id' => '5319',
                'province_id' => '53',
                'name' => 'KAB. MANGGARAI TIMUR',
            ],
            311 => [
                'id' => '5320',
                'province_id' => '53',
                'name' => 'KAB. SABU RAIJUA',
            ],
            312 => [
                'id' => '5321',
                'province_id' => '53',
                'name' => 'KAB. MALAKA',
            ],
            313 => [
                'id' => '5371',
                'province_id' => '53',
                'name' => 'KOTA KUPANG',
            ],
            314 => [
                'id' => '6101',
                'province_id' => '61',
                'name' => 'KAB. SAMBAS',
            ],
            315 => [
                'id' => '6102',
                'province_id' => '61',
                'name' => 'KAB. MEMPAWAH',
            ],
            316 => [
                'id' => '6103',
                'province_id' => '61',
                'name' => 'KAB. SANGGAU',
            ],
            317 => [
                'id' => '6104',
                'province_id' => '61',
                'name' => 'KAB. KETAPANG',
            ],
            318 => [
                'id' => '6105',
                'province_id' => '61',
                'name' => 'KAB. SINTANG',
            ],
            319 => [
                'id' => '6106',
                'province_id' => '61',
                'name' => 'KAB. KAPUAS HULU',
            ],
            320 => [
                'id' => '6107',
                'province_id' => '61',
                'name' => 'KAB. BENGKAYANG',
            ],
            321 => [
                'id' => '6108',
                'province_id' => '61',
                'name' => 'KAB. LANDAK',
            ],
            322 => [
                'id' => '6109',
                'province_id' => '61',
                'name' => 'KAB. SEKADAU',
            ],
            323 => [
                'id' => '6110',
                'province_id' => '61',
                'name' => 'KAB. MELAWI',
            ],
            324 => [
                'id' => '6111',
                'province_id' => '61',
                'name' => 'KAB. KAYONG UTARA',
            ],
            325 => [
                'id' => '6112',
                'province_id' => '61',
                'name' => 'KAB. KUBU RAYA',
            ],
            326 => [
                'id' => '6171',
                'province_id' => '61',
                'name' => 'KOTA PONTIANAK',
            ],
            327 => [
                'id' => '6172',
                'province_id' => '61',
                'name' => 'KOTA SINGKAWANG',
            ],
            328 => [
                'id' => '6201',
                'province_id' => '62',
                'name' => 'KAB. KOTAWARINGIN BARAT',
            ],
            329 => [
                'id' => '6202',
                'province_id' => '62',
                'name' => 'KAB. KOTAWARINGIN TIMUR',
            ],
            330 => [
                'id' => '6203',
                'province_id' => '62',
                'name' => 'KAB. KAPUAS',
            ],
            331 => [
                'id' => '6204',
                'province_id' => '62',
                'name' => 'KAB. BARITO SELATAN',
            ],
            332 => [
                'id' => '6205',
                'province_id' => '62',
                'name' => 'KAB. BARITO UTARA',
            ],
            333 => [
                'id' => '6206',
                'province_id' => '62',
                'name' => 'KAB. KATINGAN',
            ],
            334 => [
                'id' => '6207',
                'province_id' => '62',
                'name' => 'KAB. SERUYAN',
            ],
            335 => [
                'id' => '6208',
                'province_id' => '62',
                'name' => 'KAB. SUKAMARA',
            ],
            336 => [
                'id' => '6209',
                'province_id' => '62',
                'name' => 'KAB. LAMANDAU',
            ],
            337 => [
                'id' => '6210',
                'province_id' => '62',
                'name' => 'KAB. GUNUNG MAS',
            ],
            338 => [
                'id' => '6211',
                'province_id' => '62',
                'name' => 'KAB. PULANG PISAU',
            ],
            339 => [
                'id' => '6212',
                'province_id' => '62',
                'name' => 'KAB. MURUNG RAYA',
            ],
            340 => [
                'id' => '6213',
                'province_id' => '62',
                'name' => 'KAB. BARITO TIMUR',
            ],
            341 => [
                'id' => '6271',
                'province_id' => '62',
                'name' => 'KOTA PALANGKARAYA',
            ],
            342 => [
                'id' => '6301',
                'province_id' => '63',
                'name' => 'KAB. TANAH LAUT',
            ],
            343 => [
                'id' => '6302',
                'province_id' => '63',
                'name' => 'KAB. KOTABARU',
            ],
            344 => [
                'id' => '6303',
                'province_id' => '63',
                'name' => 'KAB. BANJAR',
            ],
            345 => [
                'id' => '6304',
                'province_id' => '63',
                'name' => 'KAB. BARITO KUALA',
            ],
            346 => [
                'id' => '6305',
                'province_id' => '63',
                'name' => 'KAB. TAPIN',
            ],
            347 => [
                'id' => '6306',
                'province_id' => '63',
                'name' => 'KAB. HULU SUNGAI SELATAN',
            ],
            348 => [
                'id' => '6307',
                'province_id' => '63',
                'name' => 'KAB. HULU SUNGAI TENGAH',
            ],
            349 => [
                'id' => '6308',
                'province_id' => '63',
                'name' => 'KAB. HULU SUNGAI UTARA',
            ],
            350 => [
                'id' => '6309',
                'province_id' => '63',
                'name' => 'KAB. TABALONG',
            ],
            351 => [
                'id' => '6310',
                'province_id' => '63',
                'name' => 'KAB. TANAH BUMBU',
            ],
            352 => [
                'id' => '6311',
                'province_id' => '63',
                'name' => 'KAB. BALANGAN',
            ],
            353 => [
                'id' => '6371',
                'province_id' => '63',
                'name' => 'KOTA BANJARMASIN',
            ],
            354 => [
                'id' => '6372',
                'province_id' => '63',
                'name' => 'KOTA BANJARBARU',
            ],
            355 => [
                'id' => '6401',
                'province_id' => '64',
                'name' => 'KAB. PASER',
            ],
            356 => [
                'id' => '6402',
                'province_id' => '64',
                'name' => 'KAB. KUTAI KARTANEGARA',
            ],
            357 => [
                'id' => '6403',
                'province_id' => '64',
                'name' => 'KAB. BERAU',
            ],
            358 => [
                'id' => '6407',
                'province_id' => '64',
                'name' => 'KAB. KUTAI BARAT',
            ],
            359 => [
                'id' => '6408',
                'province_id' => '64',
                'name' => 'KAB. KUTAI TIMUR',
            ],
            360 => [
                'id' => '6409',
                'province_id' => '64',
                'name' => 'KAB. PENAJAM PASER UTARA',
            ],
            361 => [
                'id' => '6411',
                'province_id' => '64',
                'name' => 'KAB. MAHAKAM ULU',
            ],
            362 => [
                'id' => '6471',
                'province_id' => '64',
                'name' => 'KOTA BALIKPAPAN',
            ],
            363 => [
                'id' => '6472',
                'province_id' => '64',
                'name' => 'KOTA SAMARINDA',
            ],
            364 => [
                'id' => '6474',
                'province_id' => '64',
                'name' => 'KOTA BONTANG',
            ],
            365 => [
                'id' => '6501',
                'province_id' => '65',
                'name' => 'KAB. BULUNGAN',
            ],
            366 => [
                'id' => '6502',
                'province_id' => '65',
                'name' => 'KAB. MALINAU',
            ],
            367 => [
                'id' => '6503',
                'province_id' => '65',
                'name' => 'KAB. NUNUKAN',
            ],
            368 => [
                'id' => '6504',
                'province_id' => '65',
                'name' => 'KAB. TANA TIDUNG',
            ],
            369 => [
                'id' => '6571',
                'province_id' => '65',
                'name' => 'KOTA TARAKAN',
            ],
            370 => [
                'id' => '7101',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW',
            ],
            371 => [
                'id' => '7102',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA',
            ],
            372 => [
                'id' => '7103',
                'province_id' => '71',
                'name' => 'KAB. KEPULAUAN SANGIHE',
            ],
            373 => [
                'id' => '7104',
                'province_id' => '71',
                'name' => 'KAB. KEPULAUAN TALAUD',
            ],
            374 => [
                'id' => '7105',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA SELATAN',
            ],
            375 => [
                'id' => '7106',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA UTARA',
            ],
            376 => [
                'id' => '7107',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA TENGGARA',
            ],
            377 => [
                'id' => '7108',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW UTARA',
            ],
            378 => [
                'id' => '7109',
                'province_id' => '71',
                'name' => 'KAB. KEP. SIAU TAGULANDANG BIARO',
            ],
            379 => [
                'id' => '7110',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW TIMUR',
            ],
            380 => [
                'id' => '7111',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW SELATAN',
            ],
            381 => [
                'id' => '7171',
                'province_id' => '71',
                'name' => 'KOTA MANADO',
            ],
            382 => [
                'id' => '7172',
                'province_id' => '71',
                'name' => 'KOTA BITUNG',
            ],
            383 => [
                'id' => '7173',
                'province_id' => '71',
                'name' => 'KOTA TOMOHON',
            ],
            384 => [
                'id' => '7174',
                'province_id' => '71',
                'name' => 'KOTA KOTAMOBAGU',
            ],
            385 => [
                'id' => '7201',
                'province_id' => '72',
                'name' => 'KAB. BANGGAI',
            ],
            386 => [
                'id' => '7202',
                'province_id' => '72',
                'name' => 'KAB. POSO',
            ],
            387 => [
                'id' => '7203',
                'province_id' => '72',
                'name' => 'KAB. DONGGALA',
            ],
            388 => [
                'id' => '7204',
                'province_id' => '72',
                'name' => 'KAB. TOLI TOLI',
            ],
            389 => [
                'id' => '7205',
                'province_id' => '72',
                'name' => 'KAB. BUOL',
            ],
            390 => [
                'id' => '7206',
                'province_id' => '72',
                'name' => 'KAB. MOROWALI',
            ],
            391 => [
                'id' => '7207',
                'province_id' => '72',
                'name' => 'KAB. BANGGAI KEPULAUAN',
            ],
            392 => [
                'id' => '7208',
                'province_id' => '72',
                'name' => 'KAB. PARIGI MOUTONG',
            ],
            393 => [
                'id' => '7209',
                'province_id' => '72',
                'name' => 'KAB. TOJO UNA UNA',
            ],
            394 => [
                'id' => '7210',
                'province_id' => '72',
                'name' => 'KAB. SIGI',
            ],
            395 => [
                'id' => '7211',
                'province_id' => '72',
                'name' => 'KAB. BANGGAI LAUT',
            ],
            396 => [
                'id' => '7212',
                'province_id' => '72',
                'name' => 'KAB. MOROWALI UTARA',
            ],
            397 => [
                'id' => '7271',
                'province_id' => '72',
                'name' => 'KOTA PALU',
            ],
            398 => [
                'id' => '7301',
                'province_id' => '73',
                'name' => 'KAB. KEPULAUAN SELAYAR',
            ],
            399 => [
                'id' => '7302',
                'province_id' => '73',
                'name' => 'KAB. BULUKUMBA',
            ],
            400 => [
                'id' => '7303',
                'province_id' => '73',
                'name' => 'KAB. BANTAENG',
            ],
            401 => [
                'id' => '7304',
                'province_id' => '73',
                'name' => 'KAB. JENEPONTO',
            ],
            402 => [
                'id' => '7305',
                'province_id' => '73',
                'name' => 'KAB. TAKALAR',
            ],
            403 => [
                'id' => '7306',
                'province_id' => '73',
                'name' => 'KAB. GOWA',
            ],
            404 => [
                'id' => '7307',
                'province_id' => '73',
                'name' => 'KAB. SINJAI',
            ],
            405 => [
                'id' => '7308',
                'province_id' => '73',
                'name' => 'KAB. BONE',
            ],
            406 => [
                'id' => '7309',
                'province_id' => '73',
                'name' => 'KAB. MAROS',
            ],
            407 => [
                'id' => '7310',
                'province_id' => '73',
                'name' => 'KAB. PANGKAJENE KEPULAUAN',
            ],
            408 => [
                'id' => '7311',
                'province_id' => '73',
                'name' => 'KAB. BARRU',
            ],
            409 => [
                'id' => '7312',
                'province_id' => '73',
                'name' => 'KAB. SOPPENG',
            ],
            410 => [
                'id' => '7313',
                'province_id' => '73',
                'name' => 'KAB. WAJO',
            ],
            411 => [
                'id' => '7314',
                'province_id' => '73',
                'name' => 'KAB. SIDENRENG RAPPANG',
            ],
            412 => [
                'id' => '7315',
                'province_id' => '73',
                'name' => 'KAB. PINRANG',
            ],
            413 => [
                'id' => '7316',
                'province_id' => '73',
                'name' => 'KAB. ENREKANG',
            ],
            414 => [
                'id' => '7317',
                'province_id' => '73',
                'name' => 'KAB. LUWU',
            ],
            415 => [
                'id' => '7318',
                'province_id' => '73',
                'name' => 'KAB. TANA TORAJA',
            ],
            416 => [
                'id' => '7322',
                'province_id' => '73',
                'name' => 'KAB. LUWU UTARA',
            ],
            417 => [
                'id' => '7324',
                'province_id' => '73',
                'name' => 'KAB. LUWU TIMUR',
            ],
            418 => [
                'id' => '7326',
                'province_id' => '73',
                'name' => 'KAB. TORAJA UTARA',
            ],
            419 => [
                'id' => '7371',
                'province_id' => '73',
                'name' => 'KOTA MAKASSAR',
            ],
            420 => [
                'id' => '7372',
                'province_id' => '73',
                'name' => 'KOTA PARE PARE',
            ],
            421 => [
                'id' => '7373',
                'province_id' => '73',
                'name' => 'KOTA PALOPO',
            ],
            422 => [
                'id' => '7401',
                'province_id' => '74',
                'name' => 'KAB. KOLAKA',
            ],
            423 => [
                'id' => '7402',
                'province_id' => '74',
                'name' => 'KAB. KONAWE',
            ],
            424 => [
                'id' => '7403',
                'province_id' => '74',
                'name' => 'KAB. MUNA',
            ],
            425 => [
                'id' => '7404',
                'province_id' => '74',
                'name' => 'KAB. BUTON',
            ],
            426 => [
                'id' => '7405',
                'province_id' => '74',
                'name' => 'KAB. KONAWE SELATAN',
            ],
            427 => [
                'id' => '7406',
                'province_id' => '74',
                'name' => 'KAB. BOMBANA',
            ],
            428 => [
                'id' => '7407',
                'province_id' => '74',
                'name' => 'KAB. WAKATOBI',
            ],
            429 => [
                'id' => '7408',
                'province_id' => '74',
                'name' => 'KAB. KOLAKA UTARA',
            ],
            430 => [
                'id' => '7409',
                'province_id' => '74',
                'name' => 'KAB. KONAWE UTARA',
            ],
            431 => [
                'id' => '7410',
                'province_id' => '74',
                'name' => 'KAB. BUTON UTARA',
            ],
            432 => [
                'id' => '7411',
                'province_id' => '74',
                'name' => 'KAB. KOLAKA TIMUR',
            ],
            433 => [
                'id' => '7412',
                'province_id' => '74',
                'name' => 'KAB. KONAWE KEPULAUAN',
            ],
            434 => [
                'id' => '7413',
                'province_id' => '74',
                'name' => 'KAB. MUNA BARAT',
            ],
            435 => [
                'id' => '7414',
                'province_id' => '74',
                'name' => 'KAB. BUTON TENGAH',
            ],
            436 => [
                'id' => '7415',
                'province_id' => '74',
                'name' => 'KAB. BUTON SELATAN',
            ],
            437 => [
                'id' => '7471',
                'province_id' => '74',
                'name' => 'KOTA KENDARI',
            ],
            438 => [
                'id' => '7472',
                'province_id' => '74',
                'name' => 'KOTA BAU BAU',
            ],
            439 => [
                'id' => '7501',
                'province_id' => '75',
                'name' => 'KAB. GORONTALO',
            ],
            440 => [
                'id' => '7502',
                'province_id' => '75',
                'name' => 'KAB. BOALEMO',
            ],
            441 => [
                'id' => '7503',
                'province_id' => '75',
                'name' => 'KAB. BONE BOLANGO',
            ],
            442 => [
                'id' => '7504',
                'province_id' => '75',
                'name' => 'KAB. POHUWATO',
            ],
            443 => [
                'id' => '7505',
                'province_id' => '75',
                'name' => 'KAB. GORONTALO UTARA',
            ],
            444 => [
                'id' => '7571',
                'province_id' => '75',
                'name' => 'KOTA GORONTALO',
            ],
            445 => [
                'id' => '7601',
                'province_id' => '76',
                'name' => 'KAB. PASANGKAYU',
            ],
            446 => [
                'id' => '7602',
                'province_id' => '76',
                'name' => 'KAB. MAMUJU',
            ],
            447 => [
                'id' => '7603',
                'province_id' => '76',
                'name' => 'KAB. MAMASA',
            ],
            448 => [
                'id' => '7604',
                'province_id' => '76',
                'name' => 'KAB. POLEWALI MANDAR',
            ],
            449 => [
                'id' => '7605',
                'province_id' => '76',
                'name' => 'KAB. MAJENE',
            ],
            450 => [
                'id' => '7606',
                'province_id' => '76',
                'name' => 'KAB. MAMUJU TENGAH',
            ],
            451 => [
                'id' => '8101',
                'province_id' => '81',
                'name' => 'KAB. MALUKU TENGAH',
            ],
            452 => [
                'id' => '8102',
                'province_id' => '81',
                'name' => 'KAB. MALUKU TENGGARA',
            ],
            453 => [
                'id' => '8103',
                'province_id' => '81',
                'name' => 'KAB. KEPULAUAN TANIMBAR',
            ],
            454 => [
                'id' => '8104',
                'province_id' => '81',
                'name' => 'KAB. BURU',
            ],
            455 => [
                'id' => '8105',
                'province_id' => '81',
                'name' => 'KAB. SERAM BAGIAN TIMUR',
            ],
            456 => [
                'id' => '8106',
                'province_id' => '81',
                'name' => 'KAB. SERAM BAGIAN BARAT',
            ],
            457 => [
                'id' => '8107',
                'province_id' => '81',
                'name' => 'KAB. KEPULAUAN ARU',
            ],
            458 => [
                'id' => '8108',
                'province_id' => '81',
                'name' => 'KAB. MALUKU BARAT DAYA',
            ],
            459 => [
                'id' => '8109',
                'province_id' => '81',
                'name' => 'KAB. BURU SELATAN',
            ],
            460 => [
                'id' => '8171',
                'province_id' => '81',
                'name' => 'KOTA AMBON',
            ],
            461 => [
                'id' => '8172',
                'province_id' => '81',
                'name' => 'KOTA TUAL',
            ],
            462 => [
                'id' => '8201',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA BARAT',
            ],
            463 => [
                'id' => '8202',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA TENGAH',
            ],
            464 => [
                'id' => '8203',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA UTARA',
            ],
            465 => [
                'id' => '8204',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA SELATAN',
            ],
            466 => [
                'id' => '8205',
                'province_id' => '82',
                'name' => 'KAB. KEPULAUAN SULA',
            ],
            467 => [
                'id' => '8206',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA TIMUR',
            ],
            468 => [
                'id' => '8207',
                'province_id' => '82',
                'name' => 'KAB. PULAU MOROTAI',
            ],
            469 => [
                'id' => '8208',
                'province_id' => '82',
                'name' => 'KAB. PULAU TALIABU',
            ],
            470 => [
                'id' => '8271',
                'province_id' => '82',
                'name' => 'KOTA TERNATE',
            ],
            471 => [
                'id' => '8272',
                'province_id' => '82',
                'name' => 'KOTA TIDORE KEPULAUAN',
            ],
            472 => [
                'id' => '9103',
                'province_id' => '91',
                'name' => 'KAB. JAYAPURA',
            ],
            473 => [
                'id' => '9105',
                'province_id' => '91',
                'name' => 'KAB. KEPULAUAN YAPEN',
            ],
            474 => [
                'id' => '9106',
                'province_id' => '91',
                'name' => 'KAB. BIAK NUMFOR',
            ],
            475 => [
                'id' => '9110',
                'province_id' => '91',
                'name' => 'KAB. SARMI',
            ],
            476 => [
                'id' => '9111',
                'province_id' => '91',
                'name' => 'KAB. KEEROM',
            ],
            477 => [
                'id' => '9115',
                'province_id' => '91',
                'name' => 'KAB. WAROPEN',
            ],
            478 => [
                'id' => '9119',
                'province_id' => '91',
                'name' => 'KAB. SUPIORI',
            ],
            479 => [
                'id' => '9120',
                'province_id' => '91',
                'name' => 'KAB. MAMBERAMO RAYA',
            ],
            480 => [
                'id' => '9171',
                'province_id' => '91',
                'name' => 'KOTA JAYAPURA',
            ],
            481 => [
                'id' => '9201',
                'province_id' => '92',
                'name' => 'KAB. SORONG',
            ],
            482 => [
                'id' => '9202',
                'province_id' => '92',
                'name' => 'KAB. MANOKWARI',
            ],
            483 => [
                'id' => '9203',
                'province_id' => '92',
                'name' => 'KAB. FAK FAK',
            ],
            484 => [
                'id' => '9204',
                'province_id' => '92',
                'name' => 'KAB. SORONG SELATAN',
            ],
            485 => [
                'id' => '9205',
                'province_id' => '92',
                'name' => 'KAB. RAJA AMPAT',
            ],
            486 => [
                'id' => '9206',
                'province_id' => '92',
                'name' => 'KAB. TELUK BINTUNI',
            ],
            487 => [
                'id' => '9207',
                'province_id' => '92',
                'name' => 'KAB. TELUK WONDAMA',
            ],
            488 => [
                'id' => '9208',
                'province_id' => '92',
                'name' => 'KAB. KAIMANA',
            ],
            489 => [
                'id' => '9209',
                'province_id' => '92',
                'name' => 'KAB. TAMBRAUW',
            ],
            490 => [
                'id' => '9210',
                'province_id' => '92',
                'name' => 'KAB. MAYBRAT',
            ],
            491 => [
                'id' => '9211',
                'province_id' => '92',
                'name' => 'KAB. MANOKWARI SELATAN',
            ],
            492 => [
                'id' => '9212',
                'province_id' => '92',
                'name' => 'KAB. PEGUNUNGAN ARFAK',
            ],
            493 => [
                'id' => '9271',
                'province_id' => '92',
                'name' => 'KOTA SORONG',
            ],
            494 => [
                'id' => '9301',
                'province_id' => '93',
                'name' => 'KAB. MERAUKE',
            ],
            495 => [
                'id' => '9302',
                'province_id' => '93',
                'name' => 'KAB. BOVEN DIGOEL',
            ],
            496 => [
                'id' => '9303',
                'province_id' => '93',
                'name' => 'KAB. MAPPI',
            ],
            497 => [
                'id' => '9304',
                'province_id' => '93',
                'name' => 'KAB. ASMAT',
            ],
            498 => [
                'id' => '9401',
                'province_id' => '94',
                'name' => 'KAB. NABIRE',
            ],
            499 => [
                'id' => '9402',
                'province_id' => '94',
                'name' => 'KAB. PUNCAK JAYA',
            ],
            500 => [
                'id' => '9403',
                'province_id' => '94',
                'name' => 'KAB. PANIAI',
            ],
            501 => [
                'id' => '9404',
                'province_id' => '94',
                'name' => 'KAB. MIMIKA',
            ],
            502 => [
                'id' => '9405',
                'province_id' => '94',
                'name' => 'KAB. PUNCAK',
            ],
            3 => [
                'id' => '9406',
                'province_id' => '94',
                'name' => 'KAB. DOGIYAI',
            ],
            4 => [
                'id' => '9407',
                'province_id' => '94',
                'name' => 'KAB. INTAN JAYA',
            ],
            5 => [
                'id' => '9408',
                'province_id' => '94',
                'name' => 'KAB. DEIYAI',
            ],
            6 => [
                'id' => '9501',
                'province_id' => '95',
                'name' => 'KAB. JAYAWIJAYA',
            ],
            7 => [
                'id' => '9502',
                'province_id' => '95',
                'name' => 'KAB. PEGUNUNGAN BINTANG',
            ],
            8 => [
                'id' => '9503',
                'province_id' => '95',
                'name' => 'KAB. YAHUKIMO',
            ],
            9 => [
                'id' => '9504',
                'province_id' => '95',
                'name' => 'KAB. TOLIKARA',
            ],
            10 => [
                'id' => '9505',
                'province_id' => '95',
                'name' => 'KAB. MAMBERAMO TENGAH',
            ],
            11 => [
                'id' => '9506',
                'province_id' => '95',
                'name' => 'KAB. YALIMO',
            ],
            12 => [
                'id' => '9507',
                'province_id' => '95',
                'name' => 'KAB. LANNY JAYA',
            ],
            13 => [
                'id' => '9508',
                'province_id' => '95',
                'name' => 'KAB. NDUGA',
            ],
        ], ['id'], ['province_id', 'name']);
    }
}
