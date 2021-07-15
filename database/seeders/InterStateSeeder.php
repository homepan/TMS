<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InterStateSeeder extends Seeder
{
  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {

    \DB::table('inter_states')->delete();

    \DB::table('inter_states')->insert(array(
      0 =>
      array(
        'id' => '1',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Aragatsotn ',
        'status' => '1',
      ),
      1 =>
      array(
        'id' => '2',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Ararat',
        'status' => '1',
      ),
      2 =>
      array(
        'id' => '3',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Armavir',
        'status' => '1',
      ),
      3 =>
      array(
        'id' => '4',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Gegharkunik',
        'status' => '1',
      ),
      4 =>
      array(
        'id' => '5',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Kotayk',
        'status' => '1',
      ),
      5 =>
      array(
        'id' => '6',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Lori ',
        'status' => '1',
      ),
      6 =>
      array(
        'id' => '7',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Shirak',
        'status' => '1',
      ),
      7 =>
      array(
        'id' => '8',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Syunik',
        'status' => '1',
      ),
      8 =>
      array(
        'id' => '9',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Tavush',
        'status' => '1',
      ),
      9 =>
      array(
        'id' => '10',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Vayots Dzor',
        'status' => '1',
      ),
      10 =>
      array(
        'id' => '11',
        'country_name' => 'Armenia',
        'country_code' => 'AM',
        'state' => 'Yerevan',
        'status' => '1',
      ),
      11 =>
      array(
        'id' => '12',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Antwerp',
        'status' => '1',
      ),
      12 =>
      array(
        'id' => '13',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'East Flanders',
        'status' => '1',
      ),
      13 =>
      array(
        'id' => '14',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Flemish Brabant',
        'status' => '1',
      ),
      14 =>
      array(
        'id' => '15',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Hainaut',
        'status' => '1',
      ),
      15 =>
      array(
        'id' => '16',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Liege',
        'status' => '1',
      ),
      16 =>
      array(
        'id' => '17',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Limburg',
        'status' => '1',
      ),
      17 =>
      array(
        'id' => '18',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Luxembourg',
        'status' => '1',
      ),
      18 =>
      array(
        'id' => '19',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Namur',
        'status' => '1',
      ),
      19 =>
      array(
        'id' => '20',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'Walloon Brabant',
        'status' => '1',
      ),
      20 =>
      array(
        'id' => '21',
        'country_name' => 'Belgium',
        'country_code' => 'BE',
        'state' => 'West Flanders',
        'status' => '1',
      ),
      21 =>
      array(
        'id' => '22',
        'country_name' => 'Brunei',
        'country_code' => 'BN',
        'state' => 'Belait',
        'status' => '1',
      ),
      22 =>
      array(
        'id' => '23',
        'country_name' => 'Brunei',
        'country_code' => 'BN',
        'state' => 'Brunei-Muara',
        'status' => '1',
      ),
      23 =>
      array(
        'id' => '24',
        'country_name' => 'Brunei',
        'country_code' => 'BN',
        'state' => 'Temburong',
        'status' => '1',
      ),
      24 =>
      array(
        'id' => '25',
        'country_name' => 'Brunei',
        'country_code' => 'BN',
        'state' => 'Tutong',
        'status' => '1',
      ),
      25 =>
      array(
        'id' => '26',
        'country_name' => 'Belarus',
        'country_code' => 'BY',
        'state' => 'Brest',
        'status' => '1',
      ),
      26 =>
      array(
        'id' => '27',
        'country_name' => 'Belarus',
        'country_code' => 'BY',
        'state' => 'Homel',
        'status' => '1',
      ),
      27 =>
      array(
        'id' => '28',
        'country_name' => 'Belarus',
        'country_code' => 'BY',
        'state' => 'Hrodna',
        'status' => '1',
      ),
      28 =>
      array(
        'id' => '29',
        'country_name' => 'Belarus',
        'country_code' => 'BY',
        'state' => 'Magileu',
        'status' => '1',
      ),
      29 =>
      array(
        'id' => '30',
        'country_name' => 'Belarus',
        'country_code' => 'BY',
        'state' => 'Minsk',
        'status' => '1',
      ),
      30 =>
      array(
        'id' => '31',
        'country_name' => 'Belarus',
        'country_code' => 'BY',
        'state' => 'Vitebsk',
        'status' => '1',
      ),
      31 =>
      array(
        'id' => '32',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Alberta',
        'status' => '1',
      ),
      32 =>
      array(
        'id' => '33',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'British Columbia',
        'status' => '1',
      ),
      33 =>
      array(
        'id' => '34',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Manitoba',
        'status' => '1',
      ),
      34 =>
      array(
        'id' => '35',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'New Brunswick',
        'status' => '1',
      ),
      35 =>
      array(
        'id' => '36',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Newfoundland and Labrador',
        'status' => '1',
      ),
      36 =>
      array(
        'id' => '37',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Nova Scotia',
        'status' => '1',
      ),
      37 =>
      array(
        'id' => '38',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Ontario',
        'status' => '1',
      ),
      38 =>
      array(
        'id' => '39',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Prince Edward Island',
        'status' => '1',
      ),
      39 =>
      array(
        'id' => '40',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Quebec',
        'status' => '1',
      ),
      40 =>
      array(
        'id' => '41',
        'country_name' => 'Canada',
        'country_code' => 'CA',
        'state' => 'Saskatchewan',
        'status' => '1',
      ),
      41 =>
      array(
        'id' => '42',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Zurich',
        'status' => '1',
      ),
      42 =>
      array(
        'id' => '43',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Bern',
        'status' => '1',
      ),
      43 =>
      array(
        'id' => '44',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Lucerne',
        'status' => '1',
      ),
      44 =>
      array(
        'id' => '45',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Uri',
        'status' => '1',
      ),
      45 =>
      array(
        'id' => '46',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Schwyz',
        'status' => '1',
      ),
      46 =>
      array(
        'id' => '47',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Obwalden',
        'status' => '1',
      ),
      47 =>
      array(
        'id' => '48',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Nidwalden',
        'status' => '1',
      ),
      48 =>
      array(
        'id' => '49',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Glarus',
        'status' => '1',
      ),
      49 =>
      array(
        'id' => '50',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Zug',
        'status' => '1',
      ),
      50 =>
      array(
        'id' => '51',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Fribourg',
        'status' => '1',
      ),
      51 =>
      array(
        'id' => '52',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Solothurn',
        'status' => '1',
      ),
      52 =>
      array(
        'id' => '53',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Basel-Stadt',
        'status' => '1',
      ),
      53 =>
      array(
        'id' => '54',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Basel-Landschaft',
        'status' => '1',
      ),
      54 =>
      array(
        'id' => '55',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Schaffhausen',
        'status' => '1',
      ),
      55 =>
      array(
        'id' => '56',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Appenzell Ausserrhoden',
        'status' => '1',
      ),
      56 =>
      array(
        'id' => '57',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Appenzell Innerrhoden',
        'status' => '1',
      ),
      57 =>
      array(
        'id' => '58',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'St. Gallen',
        'status' => '1',
      ),
      58 =>
      array(
        'id' => '59',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Graubunden',
        'status' => '1',
      ),
      59 =>
      array(
        'id' => '60',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Aargau',
        'status' => '1',
      ),
      60 =>
      array(
        'id' => '61',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Thurgau',
        'status' => '1',
      ),
      61 =>
      array(
        'id' => '62',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Ticino',
        'status' => '1',
      ),
      62 =>
      array(
        'id' => '63',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Vaud',
        'status' => '1',
      ),
      63 =>
      array(
        'id' => '64',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Valais',
        'status' => '1',
      ),
      64 =>
      array(
        'id' => '65',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Neuchatel',
        'status' => '1',
      ),
      65 =>
      array(
        'id' => '66',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Geneva',
        'status' => '1',
      ),
      66 =>
      array(
        'id' => '67',
        'country_name' => 'Switzerland',
        'country_code' => 'CH',
        'state' => 'Jura',
        'status' => '1',
      ),
      67 =>
      array(
        'id' => '68',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Anhui Province',
        'status' => '1',
      ),
      68 =>
      array(
        'id' => '69',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Beijing Municipality',
        'status' => '1',
      ),
      69 =>
      array(
        'id' => '70',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Chongqing Municipality',
        'status' => '1',
      ),
      70 =>
      array(
        'id' => '71',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Fujian Province',
        'status' => '1',
      ),
      71 =>
      array(
        'id' => '72',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Gansu Province',
        'status' => '1',
      ),
      72 =>
      array(
        'id' => '73',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Guangdong Province',
        'status' => '1',
      ),
      73 =>
      array(
        'id' => '74',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Guangxi Zhuang Region',
        'status' => '1',
      ),
      74 =>
      array(
        'id' => '75',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Guizhou Province',
        'status' => '1',
      ),
      75 =>
      array(
        'id' => '76',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Hainan Province',
        'status' => '1',
      ),
      76 =>
      array(
        'id' => '77',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Hebei Province',
        'status' => '1',
      ),
      77 =>
      array(
        'id' => '78',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Heilongjiang Province',
        'status' => '1',
      ),
      78 =>
      array(
        'id' => '79',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Henan Province',
        'status' => '1',
      ),
      79 =>
      array(
        'id' => '80',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Hubei Province',
        'status' => '1',
      ),
      80 =>
      array(
        'id' => '81',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Hunan Province',
        'status' => '1',
      ),
      81 =>
      array(
        'id' => '82',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Inner Mongolia Region',
        'status' => '1',
      ),
      82 =>
      array(
        'id' => '83',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Jiangsu Province',
        'status' => '1',
      ),
      83 =>
      array(
        'id' => '84',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Jiangxi Province',
        'status' => '1',
      ),
      84 =>
      array(
        'id' => '85',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Jilin Province',
        'status' => '1',
      ),
      85 =>
      array(
        'id' => '86',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Liaoning Province',
        'status' => '1',
      ),
      86 =>
      array(
        'id' => '87',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Nei Mongol Region',
        'status' => '1',
      ),
      87 =>
      array(
        'id' => '88',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Qinghai Province',
        'status' => '1',
      ),
      88 =>
      array(
        'id' => '89',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Shaanxi Province',
        'status' => '1',
      ),
      89 =>
      array(
        'id' => '90',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Shandong Province',
        'status' => '1',
      ),
      90 =>
      array(
        'id' => '91',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Shanghai Municipality',
        'status' => '1',
      ),
      91 =>
      array(
        'id' => '92',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Shanxi Province',
        'status' => '1',
      ),
      92 =>
      array(
        'id' => '93',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Sichuan Province',
        'status' => '1',
      ),
      93 =>
      array(
        'id' => '94',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Tianjin Municipality',
        'status' => '1',
      ),
      94 =>
      array(
        'id' => '95',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Tibet Region',
        'status' => '1',
      ),
      95 =>
      array(
        'id' => '96',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Xizang Region',
        'status' => '1',
      ),
      96 =>
      array(
        'id' => '97',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Yunnan Province',
        'status' => '1',
      ),
      97 =>
      array(
        'id' => '98',
        'country_name' => 'Cyprus',
        'country_code' => 'CY',
        'state' => 'Nicosia',
        'status' => '1',
      ),
      98 =>
      array(
        'id' => '99',
        'country_name' => 'Cyprus',
        'country_code' => 'CY',
        'state' => 'Famagusta',
        'status' => '1',
      ),
      99 =>
      array(
        'id' => '100',
        'country_name' => 'Cyprus',
        'country_code' => 'CY',
        'state' => 'Kyrenia',
        'status' => '1',
      ),
      100 =>
      array(
        'id' => '101',
        'country_name' => 'Cyprus',
        'country_code' => 'CY',
        'state' => 'Larnaca',
        'status' => '1',
      ),
      101 =>
      array(
        'id' => '102',
        'country_name' => 'Cyprus',
        'country_code' => 'CY',
        'state' => 'Limassol',
        'status' => '1',
      ),
      102 =>
      array(
        'id' => '103',
        'country_name' => 'Cyprus',
        'country_code' => 'CY',
        'state' => 'Paphos',
        'status' => '1',
      ),
      103 =>
      array(
        'id' => '104',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Central Bohemia',
        'status' => '1',
      ),
      104 =>
      array(
        'id' => '105',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'South Bohemia',
        'status' => '1',
      ),
      105 =>
      array(
        'id' => '106',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Plzen',
        'status' => '1',
      ),
      106 =>
      array(
        'id' => '107',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Karlovy Vary',
        'status' => '1',
      ),
      107 =>
      array(
        'id' => '108',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Usti nad Labem',
        'status' => '1',
      ),
      108 =>
      array(
        'id' => '109',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Liberec',
        'status' => '1',
      ),
      109 =>
      array(
        'id' => '110',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Hradec Kralove',
        'status' => '1',
      ),
      110 =>
      array(
        'id' => '111',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Pardubice',
        'status' => '1',
      ),
      111 =>
      array(
        'id' => '112',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Olomouc',
        'status' => '1',
      ),
      112 =>
      array(
        'id' => '113',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Moravia-Silesia',
        'status' => '1',
      ),
      113 =>
      array(
        'id' => '114',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'South Moravia',
        'status' => '1',
      ),
      114 =>
      array(
        'id' => '115',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Zlin',
        'status' => '1',
      ),
      115 =>
      array(
        'id' => '116',
        'country_name' => 'Czech Republic, The',
        'country_code' => 'CZ',
        'state' => 'Vysocina',
        'status' => '1',
      ),
      116 =>
      array(
        'id' => '117',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'England',
        'status' => '1',
      ),
      117 =>
      array(
        'id' => '118',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Scotland',
        'status' => '1',
      ),
      118 =>
      array(
        'id' => '119',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Northern Ireland',
        'status' => '1',
      ),
      119 =>
      array(
        'id' => '120',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Wales',
        'status' => '1',
      ),
      120 =>
      array(
        'id' => '121',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Aberdeenshire',
        'status' => '1',
      ),
      121 =>
      array(
        'id' => '122',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Anglesey',
        'status' => '1',
      ),
      122 =>
      array(
        'id' => '123',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Angus (Forfarshire)',
        'status' => '1',
      ),
      123 =>
      array(
        'id' => '124',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Antrim',
        'status' => '1',
      ),
      124 =>
      array(
        'id' => '125',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Argyll',
        'status' => '1',
      ),
      125 =>
      array(
        'id' => '126',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Armagh',
        'status' => '1',
      ),
      126 =>
      array(
        'id' => '127',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Avon',
        'status' => '1',
      ),
      127 =>
      array(
        'id' => '128',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Ayrshire',
        'status' => '1',
      ),
      128 =>
      array(
        'id' => '129',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Banffshire',
        'status' => '1',
      ),
      129 =>
      array(
        'id' => '130',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Bedfordshire',
        'status' => '1',
      ),
      130 =>
      array(
        'id' => '131',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Berkshire',
        'status' => '1',
      ),
      131 =>
      array(
        'id' => '132',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Berwickshire',
        'status' => '1',
      ),
      132 =>
      array(
        'id' => '133',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Brecknockshire',
        'status' => '1',
      ),
      133 =>
      array(
        'id' => '134',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Buckinghamshire',
        'status' => '1',
      ),
      134 =>
      array(
        'id' => '135',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Bute',
        'status' => '1',
      ),
      135 =>
      array(
        'id' => '136',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Caernarfonshire',
        'status' => '1',
      ),
      136 =>
      array(
        'id' => '137',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Caithness',
        'status' => '1',
      ),
      137 =>
      array(
        'id' => '138',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cambridgeshire',
        'status' => '1',
      ),
      138 =>
      array(
        'id' => '139',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cardiganshire',
        'status' => '1',
      ),
      139 =>
      array(
        'id' => '140',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Carmarthenshire',
        'status' => '1',
      ),
      140 =>
      array(
        'id' => '141',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cheshire',
        'status' => '1',
      ),
      141 =>
      array(
        'id' => '142',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of Belfast',
        'status' => '1',
      ),
      142 =>
      array(
        'id' => '143',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of Bristol',
        'status' => '1',
      ),
      143 =>
      array(
        'id' => '144',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of Derry',
        'status' => '1',
      ),
      144 =>
      array(
        'id' => '145',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of Dundee',
        'status' => '1',
      ),
      145 =>
      array(
        'id' => '146',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of Edinburgh',
        'status' => '1',
      ),
      146 =>
      array(
        'id' => '147',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of Glasgow',
        'status' => '1',
      ),
      147 =>
      array(
        'id' => '148',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'City of London',
        'status' => '1',
      ),
      148 =>
      array(
        'id' => '149',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Clackmannanshire',
        'status' => '1',
      ),
      149 =>
      array(
        'id' => '150',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cleveland',
        'status' => '1',
      ),
      150 =>
      array(
        'id' => '151',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Clwyd',
        'status' => '1',
      ),
      151 =>
      array(
        'id' => '152',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cornwall',
        'status' => '1',
      ),
      152 =>
      array(
        'id' => '153',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cromartyshire',
        'status' => '1',
      ),
      153 =>
      array(
        'id' => '154',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cumberland',
        'status' => '1',
      ),
      154 =>
      array(
        'id' => '155',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Cumbria',
        'status' => '1',
      ),
      155 =>
      array(
        'id' => '156',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Denbighshire',
        'status' => '1',
      ),
      156 =>
      array(
        'id' => '157',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Derbyshire',
        'status' => '1',
      ),
      157 =>
      array(
        'id' => '158',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Devon',
        'status' => '1',
      ),
      158 =>
      array(
        'id' => '159',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Dorset',
        'status' => '1',
      ),
      159 =>
      array(
        'id' => '160',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Down',
        'status' => '1',
      ),
      160 =>
      array(
        'id' => '161',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Dumfriesshire',
        'status' => '1',
      ),
      161 =>
      array(
        'id' => '162',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Dunbartonshire',
        'status' => '1',
      ),
      162 =>
      array(
        'id' => '163',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Durham',
        'status' => '1',
      ),
      163 =>
      array(
        'id' => '164',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Dyfed',
        'status' => '1',
      ),
      164 =>
      array(
        'id' => '165',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'East Lothian',
        'status' => '1',
      ),
      165 =>
      array(
        'id' => '166',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'East Suffolk',
        'status' => '1',
      ),
      166 =>
      array(
        'id' => '167',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'East Sussex',
        'status' => '1',
      ),
      167 =>
      array(
        'id' => '168',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Essex',
        'status' => '1',
      ),
      168 =>
      array(
        'id' => '169',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Fermanagh',
        'status' => '1',
      ),
      169 =>
      array(
        'id' => '170',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Fife',
        'status' => '1',
      ),
      170 =>
      array(
        'id' => '171',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Flintshire',
        'status' => '1',
      ),
      171 =>
      array(
        'id' => '172',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Glamorgan',
        'status' => '1',
      ),
      172 =>
      array(
        'id' => '173',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Gloucestershire',
        'status' => '1',
      ),
      173 =>
      array(
        'id' => '174',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Greater London',
        'status' => '1',
      ),
      174 =>
      array(
        'id' => '175',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Greater Manchester',
        'status' => '1',
      ),
      175 =>
      array(
        'id' => '176',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Gwent',
        'status' => '1',
      ),
      176 =>
      array(
        'id' => '177',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Gwynedd',
        'status' => '1',
      ),
      177 =>
      array(
        'id' => '178',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Hampshire',
        'status' => '1',
      ),
      178 =>
      array(
        'id' => '179',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Hereford and Worcester',
        'status' => '1',
      ),
      179 =>
      array(
        'id' => '180',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Herefordshire',
        'status' => '1',
      ),
      180 =>
      array(
        'id' => '181',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Hertfordshire',
        'status' => '1',
      ),
      181 =>
      array(
        'id' => '182',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Humberside',
        'status' => '1',
      ),
      182 =>
      array(
        'id' => '183',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Huntingdon and Peterborough',
        'status' => '1',
      ),
      183 =>
      array(
        'id' => '184',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Huntingdonshire',
        'status' => '1',
      ),
      184 =>
      array(
        'id' => '185',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Inverness-shire',
        'status' => '1',
      ),
      185 =>
      array(
        'id' => '186',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Isle of Ely',
        'status' => '1',
      ),
      186 =>
      array(
        'id' => '187',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Isle of Wight',
        'status' => '1',
      ),
      187 =>
      array(
        'id' => '188',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Kent',
        'status' => '1',
      ),
      188 =>
      array(
        'id' => '189',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Kincardineshire',
        'status' => '1',
      ),
      189 =>
      array(
        'id' => '190',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Kinross-shire',
        'status' => '1',
      ),
      190 =>
      array(
        'id' => '191',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Kirkcudbrightshire',
        'status' => '1',
      ),
      191 =>
      array(
        'id' => '192',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Lanarkshire',
        'status' => '1',
      ),
      192 =>
      array(
        'id' => '193',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Lancashire',
        'status' => '1',
      ),
      193 =>
      array(
        'id' => '194',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Leicestershire',
        'status' => '1',
      ),
      194 =>
      array(
        'id' => '195',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Lincolnshire',
        'status' => '1',
      ),
      195 =>
      array(
        'id' => '196',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'London',
        'status' => '1',
      ),
      196 =>
      array(
        'id' => '197',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Londonderry',
        'status' => '1',
      ),
      197 =>
      array(
        'id' => '198',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Merionethshire',
        'status' => '1',
      ),
      198 =>
      array(
        'id' => '199',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Merseyside',
        'status' => '1',
      ),
      199 =>
      array(
        'id' => '200',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Mid Glamorgan',
        'status' => '1',
      ),
      200 =>
      array(
        'id' => '201',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Middlesex',
        'status' => '1',
      ),
      201 =>
      array(
        'id' => '202',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Midlothian',
        'status' => '1',
      ),
      202 =>
      array(
        'id' => '203',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Monmouthshire',
        'status' => '1',
      ),
      203 =>
      array(
        'id' => '204',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Montgomeryshire',
        'status' => '1',
      ),
      204 =>
      array(
        'id' => '205',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Moray',
        'status' => '1',
      ),
      205 =>
      array(
        'id' => '206',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Nairnshire',
        'status' => '1',
      ),
      206 =>
      array(
        'id' => '207',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Norfolk',
        'status' => '1',
      ),
      207 =>
      array(
        'id' => '208',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'North Humberside',
        'status' => '1',
      ),
      208 =>
      array(
        'id' => '209',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'North Yorkshire',
        'status' => '1',
      ),
      209 =>
      array(
        'id' => '210',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Northamptonshire',
        'status' => '1',
      ),
      210 =>
      array(
        'id' => '211',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Northumberland',
        'status' => '1',
      ),
      211 =>
      array(
        'id' => '212',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Nottinghamshire',
        'status' => '1',
      ),
      212 =>
      array(
        'id' => '213',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Orkney',
        'status' => '1',
      ),
      213 =>
      array(
        'id' => '214',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Oxfordshire',
        'status' => '1',
      ),
      214 =>
      array(
        'id' => '215',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Peeblesshire',
        'status' => '1',
      ),
      215 =>
      array(
        'id' => '216',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Pembrokeshire',
        'status' => '1',
      ),
      216 =>
      array(
        'id' => '217',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Perthshire',
        'status' => '1',
      ),
      217 =>
      array(
        'id' => '218',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Powys',
        'status' => '1',
      ),
      218 =>
      array(
        'id' => '219',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Radnorshire',
        'status' => '1',
      ),
      219 =>
      array(
        'id' => '220',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Renfrewshire',
        'status' => '1',
      ),
      220 =>
      array(
        'id' => '221',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Ross and Cromarty',
        'status' => '1',
      ),
      221 =>
      array(
        'id' => '222',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Ross-shire',
        'status' => '1',
      ),
      222 =>
      array(
        'id' => '223',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Roxburghshire',
        'status' => '1',
      ),
      223 =>
      array(
        'id' => '224',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Rutland',
        'status' => '1',
      ),
      224 =>
      array(
        'id' => '225',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Selkirkshire',
        'status' => '1',
      ),
      225 =>
      array(
        'id' => '226',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Shetland',
        'status' => '1',
      ),
      226 =>
      array(
        'id' => '227',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Shropshire',
        'status' => '1',
      ),
      227 =>
      array(
        'id' => '228',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Somerset',
        'status' => '1',
      ),
      228 =>
      array(
        'id' => '229',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'South Glamorgan',
        'status' => '1',
      ),
      229 =>
      array(
        'id' => '230',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'South Humberside',
        'status' => '1',
      ),
      230 =>
      array(
        'id' => '231',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'South Yorkshire',
        'status' => '1',
      ),
      231 =>
      array(
        'id' => '232',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Staffordshire',
        'status' => '1',
      ),
      232 =>
      array(
        'id' => '233',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Stirlingshire',
        'status' => '1',
      ),
      233 =>
      array(
        'id' => '234',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Suffolk',
        'status' => '1',
      ),
      234 =>
      array(
        'id' => '235',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Surrey',
        'status' => '1',
      ),
      235 =>
      array(
        'id' => '236',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Sussex',
        'status' => '1',
      ),
      236 =>
      array(
        'id' => '237',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Sutherland',
        'status' => '1',
      ),
      237 =>
      array(
        'id' => '238',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Tyne and Wear',
        'status' => '1',
      ),
      238 =>
      array(
        'id' => '239',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Tyrone',
        'status' => '1',
      ),
      239 =>
      array(
        'id' => '240',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Warwickshire',
        'status' => '1',
      ),
      240 =>
      array(
        'id' => '241',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'West Glamorgan',
        'status' => '1',
      ),
      241 =>
      array(
        'id' => '242',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'West Lothian',
        'status' => '1',
      ),
      242 =>
      array(
        'id' => '243',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'West Midlands',
        'status' => '1',
      ),
      243 =>
      array(
        'id' => '244',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'West Suffolk',
        'status' => '1',
      ),
      244 =>
      array(
        'id' => '245',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'West Sussex',
        'status' => '1',
      ),
      245 =>
      array(
        'id' => '246',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'West Yorkshire',
        'status' => '1',
      ),
      246 =>
      array(
        'id' => '247',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Westmorland',
        'status' => '1',
      ),
      247 =>
      array(
        'id' => '248',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Wigtownshire',
        'status' => '1',
      ),
      248 =>
      array(
        'id' => '249',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Wiltshire',
        'status' => '1',
      ),
      249 =>
      array(
        'id' => '250',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Worcestershire',
        'status' => '1',
      ),
      250 =>
      array(
        'id' => '251',
        'country_name' => 'United Kingdom',
        'country_code' => 'GB',
        'state' => 'Yorkshire',
        'status' => '1',
      ),
      251 =>
      array(
        'id' => '252',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Attica',
        'status' => '1',
      ),
      252 =>
      array(
        'id' => '253',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Central Macedonia',
        'status' => '1',
      ),
      253 =>
      array(
        'id' => '254',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'West Greece',
        'status' => '1',
      ),
      254 =>
      array(
        'id' => '255',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Thessaly',
        'status' => '1',
      ),
      255 =>
      array(
        'id' => '256',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Crete',
        'status' => '1',
      ),
      256 =>
      array(
        'id' => '257',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Epirus',
        'status' => '1',
      ),
      257 =>
      array(
        'id' => '258',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Central Greece',
        'status' => '1',
      ),
      258 =>
      array(
        'id' => '259',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'East Macedonia and Thrace',
        'status' => '1',
      ),
      259 =>
      array(
        'id' => '260',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Peloponnese',
        'status' => '1',
      ),
      260 =>
      array(
        'id' => '261',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'South Aegean',
        'status' => '1',
      ),
      261 =>
      array(
        'id' => '262',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'West Macedonia',
        'status' => '1',
      ),
      262 =>
      array(
        'id' => '263',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'North Aegean',
        'status' => '1',
      ),
      263 =>
      array(
        'id' => '264',
        'country_name' => 'Greece',
        'country_code' => 'GR',
        'state' => 'Ionian Islands',
        'status' => '1',
      ),
      264 =>
      array(
        'id' => '265',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Andhra Pradesh',
        'status' => '1',
      ),
      265 =>
      array(
        'id' => '266',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Arunachal Pradesh',
        'status' => '1',
      ),
      266 =>
      array(
        'id' => '267',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Assam',
        'status' => '1',
      ),
      267 =>
      array(
        'id' => '268',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Bihar',
        'status' => '1',
      ),
      268 =>
      array(
        'id' => '269',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Chhattisgarh',
        'status' => '1',
      ),
      269 =>
      array(
        'id' => '270',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Goa',
        'status' => '1',
      ),
      270 =>
      array(
        'id' => '271',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Gujarat',
        'status' => '1',
      ),
      271 =>
      array(
        'id' => '272',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Haryana',
        'status' => '1',
      ),
      272 =>
      array(
        'id' => '273',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Himachal Pradesh',
        'status' => '1',
      ),
      273 =>
      array(
        'id' => '274',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Jammu and Kashmir',
        'status' => '1',
      ),
      274 =>
      array(
        'id' => '275',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Jharkhand',
        'status' => '1',
      ),
      275 =>
      array(
        'id' => '276',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Karnataka',
        'status' => '1',
      ),
      276 =>
      array(
        'id' => '277',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Kerala',
        'status' => '1',
      ),
      277 =>
      array(
        'id' => '278',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Madhya Pradesh',
        'status' => '1',
      ),
      278 =>
      array(
        'id' => '279',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Maharashtra',
        'status' => '1',
      ),
      279 =>
      array(
        'id' => '280',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Manipur',
        'status' => '1',
      ),
      280 =>
      array(
        'id' => '281',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Meghalaya',
        'status' => '1',
      ),
      281 =>
      array(
        'id' => '282',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Mizoram',
        'status' => '1',
      ),
      282 =>
      array(
        'id' => '283',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Nagaland',
        'status' => '1',
      ),
      283 =>
      array(
        'id' => '284',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'NCT - Delhi',
        'status' => '1',
      ),
      284 =>
      array(
        'id' => '285',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Odisha',
        'status' => '1',
      ),
      285 =>
      array(
        'id' => '286',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'West Bengal',
        'status' => '1',
      ),
      286 =>
      array(
        'id' => '287',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Punjab',
        'status' => '1',
      ),
      287 =>
      array(
        'id' => '288',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Rajasthan',
        'status' => '1',
      ),
      288 =>
      array(
        'id' => '289',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Sikkim',
        'status' => '1',
      ),
      289 =>
      array(
        'id' => '290',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Tamil Nadu',
        'status' => '1',
      ),
      290 =>
      array(
        'id' => '291',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Tripura',
        'status' => '1',
      ),
      291 =>
      array(
        'id' => '292',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Uttar Pradesh',
        'status' => '1',
      ),
      292 =>
      array(
        'id' => '293',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Uttarakhand',
        'status' => '1',
      ),
      293 =>
      array(
        'id' => '294',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Andaman and Nicobar Islands',
        'status' => '1',
      ),
      294 =>
      array(
        'id' => '295',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Chandigarh',
        'status' => '1',
      ),
      295 =>
      array(
        'id' => '296',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Dadra and Nagar Haveli',
        'status' => '1',
      ),
      296 =>
      array(
        'id' => '297',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Daman and Diu',
        'status' => '1',
      ),
      297 =>
      array(
        'id' => '298',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Lakshadweep',
        'status' => '1',
      ),
      298 =>
      array(
        'id' => '299',
        'country_name' => 'India',
        'country_code' => 'IN',
        'state' => 'Puducherry',
        'status' => '1',
      ),
      299 =>
      array(
        'id' => '300',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Hokkaido Tohoku',
        'status' => '1',
      ),
      300 =>
      array(
        'id' => '301',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Aomori',
        'status' => '1',
      ),
      301 =>
      array(
        'id' => '302',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Iwate',
        'status' => '1',
      ),
      302 =>
      array(
        'id' => '303',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Miyagi',
        'status' => '1',
      ),
      303 =>
      array(
        'id' => '304',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Akita',
        'status' => '1',
      ),
      304 =>
      array(
        'id' => '305',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Yamagata',
        'status' => '1',
      ),
      305 =>
      array(
        'id' => '306',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Fukushima Kanto',
        'status' => '1',
      ),
      306 =>
      array(
        'id' => '307',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Ibaraki',
        'status' => '1',
      ),
      307 =>
      array(
        'id' => '308',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Tochigi',
        'status' => '1',
      ),
      308 =>
      array(
        'id' => '309',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Gunma',
        'status' => '1',
      ),
      309 =>
      array(
        'id' => '310',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Saitama',
        'status' => '1',
      ),
      310 =>
      array(
        'id' => '311',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Chiba',
        'status' => '1',
      ),
      311 =>
      array(
        'id' => '312',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Tokyo',
        'status' => '1',
      ),
      312 =>
      array(
        'id' => '313',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kanagawa Chu-bu',
        'status' => '1',
      ),
      313 =>
      array(
        'id' => '314',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Niigata',
        'status' => '1',
      ),
      314 =>
      array(
        'id' => '315',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Toyama',
        'status' => '1',
      ),
      315 =>
      array(
        'id' => '316',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Ishikawa',
        'status' => '1',
      ),
      316 =>
      array(
        'id' => '317',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Fukui',
        'status' => '1',
      ),
      317 =>
      array(
        'id' => '318',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Yamanashi',
        'status' => '1',
      ),
      318 =>
      array(
        'id' => '319',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Nagano',
        'status' => '1',
      ),
      319 =>
      array(
        'id' => '320',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Gifu',
        'status' => '1',
      ),
      320 =>
      array(
        'id' => '321',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Shizuoka',
        'status' => '1',
      ),
      321 =>
      array(
        'id' => '322',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Aichi Kansai',
        'status' => '1',
      ),
      322 =>
      array(
        'id' => '323',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Mie',
        'status' => '1',
      ),
      323 =>
      array(
        'id' => '324',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Shiga',
        'status' => '1',
      ),
      324 =>
      array(
        'id' => '325',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kyoto',
        'status' => '1',
      ),
      325 =>
      array(
        'id' => '326',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Osaka',
        'status' => '1',
      ),
      326 =>
      array(
        'id' => '327',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Hyogo',
        'status' => '1',
      ),
      327 =>
      array(
        'id' => '328',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Nara',
        'status' => '1',
      ),
      328 =>
      array(
        'id' => '329',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Wakayama Chugoku',
        'status' => '1',
      ),
      329 =>
      array(
        'id' => '330',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Tottori',
        'status' => '1',
      ),
      330 =>
      array(
        'id' => '331',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Shimane',
        'status' => '1',
      ),
      331 =>
      array(
        'id' => '332',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Okayama',
        'status' => '1',
      ),
      332 =>
      array(
        'id' => '333',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Hiroshima',
        'status' => '1',
      ),
      333 =>
      array(
        'id' => '334',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Yamaguchi Shikoku',
        'status' => '1',
      ),
      334 =>
      array(
        'id' => '335',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Tokushima',
        'status' => '1',
      ),
      335 =>
      array(
        'id' => '336',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kagawa',
        'status' => '1',
      ),
      336 =>
      array(
        'id' => '337',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Ehime',
        'status' => '1',
      ),
      337 =>
      array(
        'id' => '338',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kochi Kyushu',
        'status' => '1',
      ),
      338 =>
      array(
        'id' => '339',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Fukuoka',
        'status' => '1',
      ),
      339 =>
      array(
        'id' => '340',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Saga',
        'status' => '1',
      ),
      340 =>
      array(
        'id' => '341',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Nagasaki',
        'status' => '1',
      ),
      341 =>
      array(
        'id' => '342',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kumamoto',
        'status' => '1',
      ),
      342 =>
      array(
        'id' => '343',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Oita',
        'status' => '1',
      ),
      343 =>
      array(
        'id' => '344',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Miyazaki',
        'status' => '1',
      ),
      344 =>
      array(
        'id' => '345',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kagoshima Okinawa',
        'status' => '1',
      ),
      345 =>
      array(
        'id' => '346',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Okinawa',
        'status' => '1',
      ),
      346 =>
      array(
        'id' => '347',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Kumamoto',
        'status' => '1',
      ),
      347 =>
      array(
        'id' => '348',
        'country_name' => 'Japan',
        'country_code' => 'JP',
        'state' => 'Miyazaki',
        'status' => '1',
      ),
      348 =>
      array(
        'id' => '349',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Bishkek City',
        'status' => '1',
      ),
      349 =>
      array(
        'id' => '350',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Batken Province',
        'status' => '1',
      ),
      350 =>
      array(
        'id' => '351',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Chuy Province',
        'status' => '1',
      ),
      351 =>
      array(
        'id' => '352',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Jalal-Abad Province',
        'status' => '1',
      ),
      352 =>
      array(
        'id' => '353',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Naryn Province',
        'status' => '1',
      ),
      353 =>
      array(
        'id' => '354',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Osh Province',
        'status' => '1',
      ),
      354 =>
      array(
        'id' => '355',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Talas Province',
        'status' => '1',
      ),
      355 =>
      array(
        'id' => '356',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Issyk Kul Province',
        'status' => '1',
      ),
      356 =>
      array(
        'id' => '357',
        'country_name' => 'Kyrgyzstan',
        'country_code' => 'KG',
        'state' => 'Osh City',
        'status' => '1',
      ),
      357 =>
      array(
        'id' => '358',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Mangystau Province',
        'status' => '1',
      ),
      358 =>
      array(
        'id' => '359',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Aktobe Province',
        'status' => '1',
      ),
      359 =>
      array(
        'id' => '360',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Kostanay Province',
        'status' => '1',
      ),
      360 =>
      array(
        'id' => '361',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Capital',
        'status' => '1',
      ),
      361 =>
      array(
        'id' => '362',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Atyrau province',
        'status' => '1',
      ),
      362 =>
      array(
        'id' => '363',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Karagandy Province',
        'status' => '1',
      ),
      363 =>
      array(
        'id' => '364',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'South Kazakhstan Province',
        'status' => '1',
      ),
      364 =>
      array(
        'id' => '365',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Kyzylorda Province',
        'status' => '1',
      ),
      365 =>
      array(
        'id' => '366',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Akmola Province',
        'status' => '1',
      ),
      366 =>
      array(
        'id' => '367',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Pavlodar Province',
        'status' => '1',
      ),
      367 =>
      array(
        'id' => '368',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'North Kazakhstan Province',
        'status' => '1',
      ),
      368 =>
      array(
        'id' => '369',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'East Kazakhstan Province',
        'status' => '1',
      ),
      369 =>
      array(
        'id' => '370',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Almaty Province',
        'status' => '1',
      ),
      370 =>
      array(
        'id' => '371',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'Jambyl Province',
        'status' => '1',
      ),
      371 =>
      array(
        'id' => '372',
        'country_name' => 'Kazakhstan',
        'country_code' => 'KZ',
        'state' => 'West Kazakhstan Province',
        'status' => '1',
      ),
      372 =>
      array(
        'id' => '373',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Baja California',
        'status' => '1',
      ),
      373 =>
      array(
        'id' => '374',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Aguascalientes',
        'status' => '1',
      ),
      374 =>
      array(
        'id' => '375',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Baja California Sur',
        'status' => '1',
      ),
      375 =>
      array(
        'id' => '376',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Campeche',
        'status' => '1',
      ),
      376 =>
      array(
        'id' => '377',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Chiapas',
        'status' => '1',
      ),
      377 =>
      array(
        'id' => '378',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Chihuahua',
        'status' => '1',
      ),
      378 =>
      array(
        'id' => '379',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Coahuila',
        'status' => '1',
      ),
      379 =>
      array(
        'id' => '380',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Colima',
        'status' => '1',
      ),
      380 =>
      array(
        'id' => '381',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Durango',
        'status' => '1',
      ),
      381 =>
      array(
        'id' => '382',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Guanajuato',
        'status' => '1',
      ),
      382 =>
      array(
        'id' => '383',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Guerrero',
        'status' => '1',
      ),
      383 =>
      array(
        'id' => '384',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Hidalgo',
        'status' => '1',
      ),
      384 =>
      array(
        'id' => '385',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Jalisco',
        'status' => '1',
      ),
      385 =>
      array(
        'id' => '386',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Mexico',
        'status' => '1',
      ),
      386 =>
      array(
        'id' => '387',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Michoacan',
        'status' => '1',
      ),
      387 =>
      array(
        'id' => '388',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Morelos',
        'status' => '1',
      ),
      388 =>
      array(
        'id' => '389',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Nayarit',
        'status' => '1',
      ),
      389 =>
      array(
        'id' => '390',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Nuevo Leon',
        'status' => '1',
      ),
      390 =>
      array(
        'id' => '391',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Oaxaca',
        'status' => '1',
      ),
      391 =>
      array(
        'id' => '392',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Puebla',
        'status' => '1',
      ),
      392 =>
      array(
        'id' => '393',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Quertaro',
        'status' => '1',
      ),
      393 =>
      array(
        'id' => '394',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Quintana Roo',
        'status' => '1',
      ),
      394 =>
      array(
        'id' => '395',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'San Luis Potosi',
        'status' => '1',
      ),
      395 =>
      array(
        'id' => '396',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Sinaloa',
        'status' => '1',
      ),
      396 =>
      array(
        'id' => '397',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Sonora',
        'status' => '1',
      ),
      397 =>
      array(
        'id' => '398',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Tabasco',
        'status' => '1',
      ),
      398 =>
      array(
        'id' => '399',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Tamaulipas',
        'status' => '1',
      ),
      399 =>
      array(
        'id' => '400',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Tlaxcala',
        'status' => '1',
      ),
      400 =>
      array(
        'id' => '401',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Veracruz',
        'status' => '1',
      ),
      401 =>
      array(
        'id' => '402',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Yucatan',
        'status' => '1',
      ),
      402 =>
      array(
        'id' => '403',
        'country_name' => 'Mexico',
        'country_code' => 'MX',
        'state' => 'Zacatecas',
        'status' => '1',
      ),
      403 =>
      array(
        'id' => '404',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Johor',
        'status' => '1',
      ),
      404 =>
      array(
        'id' => '405',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Kedah',
        'status' => '1',
      ),
      405 =>
      array(
        'id' => '406',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Kelantan',
        'status' => '1',
      ),
      406 =>
      array(
        'id' => '407',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Kuala Lumpur',
        'status' => '1',
      ),
      407 =>
      array(
        'id' => '408',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Labuan',
        'status' => '1',
      ),
      408 =>
      array(
        'id' => '409',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Malacca',
        'status' => '1',
      ),
      409 =>
      array(
        'id' => '410',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Negeri Sembilan',
        'status' => '1',
      ),
      410 =>
      array(
        'id' => '411',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Pahang',
        'status' => '1',
      ),
      411 =>
      array(
        'id' => '412',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Penang',
        'status' => '1',
      ),
      412 =>
      array(
        'id' => '413',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Perak',
        'status' => '1',
      ),
      413 =>
      array(
        'id' => '414',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Perlis',
        'status' => '1',
      ),
      414 =>
      array(
        'id' => '415',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Putrajaya',
        'status' => '1',
      ),
      415 =>
      array(
        'id' => '416',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Sabah',
        'status' => '1',
      ),
      416 =>
      array(
        'id' => '417',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Sarawak',
        'status' => '1',
      ),
      417 =>
      array(
        'id' => '418',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Selangor',
        'status' => '1',
      ),
      418 =>
      array(
        'id' => '419',
        'country_name' => 'Malaysia',
        'country_code' => 'MY',
        'state' => 'Terengganu',
        'status' => '1',
      ),
      419 =>
      array(
        'id' => '420',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Belep',
        'status' => '1',
      ),
      420 =>
      array(
        'id' => '421',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Bouloupari',
        'status' => '1',
      ),
      421 =>
      array(
        'id' => '422',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Bourail',
        'status' => '1',
      ),
      422 =>
      array(
        'id' => '423',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Canala',
        'status' => '1',
      ),
      423 =>
      array(
        'id' => '424',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Dumbea',
        'status' => '1',
      ),
      424 =>
      array(
        'id' => '425',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Farino',
        'status' => '1',
      ),
      425 =>
      array(
        'id' => '426',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Hienghene',
        'status' => '1',
      ),
      426 =>
      array(
        'id' => '427',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Houailou',
        'status' => '1',
      ),
      427 =>
      array(
        'id' => '428',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Kaala-Gomen',
        'status' => '1',
      ),
      428 =>
      array(
        'id' => '429',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Kone',
        'status' => '1',
      ),
      429 =>
      array(
        'id' => '430',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Kouaoua',
        'status' => '1',
      ),
      430 =>
      array(
        'id' => '431',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Koumac',
        'status' => '1',
      ),
      431 =>
      array(
        'id' => '432',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'La Foa',
        'status' => '1',
      ),
      432 =>
      array(
        'id' => '433',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Le Mont-Dore',
        'status' => '1',
      ),
      433 =>
      array(
        'id' => '434',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Lifou',
        'status' => '1',
      ),
      434 =>
      array(
        'id' => '435',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'L ile-des-Pins',
        'status' => '1',
      ),
      435 =>
      array(
        'id' => '436',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Mare',
        'status' => '1',
      ),
      436 =>
      array(
        'id' => '437',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Moindou',
        'status' => '1',
      ),
      437 =>
      array(
        'id' => '438',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Noumea',
        'status' => '1',
      ),
      438 =>
      array(
        'id' => '439',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Ouegoa',
        'status' => '1',
      ),
      439 =>
      array(
        'id' => '440',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Ouvea',
        'status' => '1',
      ),
      440 =>
      array(
        'id' => '441',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Paita',
        'status' => '1',
      ),
      441 =>
      array(
        'id' => '442',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Poindimie',
        'status' => '1',
      ),
      442 =>
      array(
        'id' => '443',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Ponerihouen',
        'status' => '1',
      ),
      443 =>
      array(
        'id' => '444',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Pouebo',
        'status' => '1',
      ),
      444 =>
      array(
        'id' => '445',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Pouembout',
        'status' => '1',
      ),
      445 =>
      array(
        'id' => '446',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Poum',
        'status' => '1',
      ),
      446 =>
      array(
        'id' => '447',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Poya (part north)',
        'status' => '1',
      ),
      447 =>
      array(
        'id' => '448',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Poya (part south)',
        'status' => '1',
      ),
      448 =>
      array(
        'id' => '449',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Sarramea',
        'status' => '1',
      ),
      449 =>
      array(
        'id' => '450',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Thio',
        'status' => '1',
      ),
      450 =>
      array(
        'id' => '451',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Touho',
        'status' => '1',
      ),
      451 =>
      array(
        'id' => '452',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Voh',
        'status' => '1',
      ),
      452 =>
      array(
        'id' => '453',
        'country_name' => 'New Caledonia',
        'country_code' => 'NC',
        'state' => 'Yate',
        'status' => '1',
      ),
      453 =>
      array(
        'id' => '454',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Bonaire',
        'status' => '1',
      ),
      454 =>
      array(
        'id' => '455',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Drenthe',
        'status' => '1',
      ),
      455 =>
      array(
        'id' => '456',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Flevoland',
        'status' => '1',
      ),
      456 =>
      array(
        'id' => '457',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Friesland',
        'status' => '1',
      ),
      457 =>
      array(
        'id' => '458',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Gelderland',
        'status' => '1',
      ),
      458 =>
      array(
        'id' => '459',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Groningen',
        'status' => '1',
      ),
      459 =>
      array(
        'id' => '460',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Limburg',
        'status' => '1',
      ),
      460 =>
      array(
        'id' => '461',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'North Brabant',
        'status' => '1',
      ),
      461 =>
      array(
        'id' => '462',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'North Holland',
        'status' => '1',
      ),
      462 =>
      array(
        'id' => '463',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Overijssel',
        'status' => '1',
      ),
      463 =>
      array(
        'id' => '464',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Saba',
        'status' => '1',
      ),
      464 =>
      array(
        'id' => '465',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Sint Eustatius',
        'status' => '1',
      ),
      465 =>
      array(
        'id' => '466',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'South Holland',
        'status' => '1',
      ),
      466 =>
      array(
        'id' => '467',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Utrecht',
        'status' => '1',
      ),
      467 =>
      array(
        'id' => '468',
        'country_name' => 'Netherlands, The',
        'country_code' => 'NL',
        'state' => 'Zeeland',
        'status' => '1',
      ),
      468 =>
      array(
        'id' => '469',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Northland',
        'status' => '1',
      ),
      469 =>
      array(
        'id' => '470',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Auckland',
        'status' => '1',
      ),
      470 =>
      array(
        'id' => '471',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Waikato',
        'status' => '1',
      ),
      471 =>
      array(
        'id' => '472',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Bay of Plenty',
        'status' => '1',
      ),
      472 =>
      array(
        'id' => '473',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Gisborne',
        'status' => '1',
      ),
      473 =>
      array(
        'id' => '474',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Hawkes Bay',
        'status' => '1',
      ),
      474 =>
      array(
        'id' => '475',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Taranaki',
        'status' => '1',
      ),
      475 =>
      array(
        'id' => '476',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Manawatu-Whanganui',
        'status' => '1',
      ),
      476 =>
      array(
        'id' => '477',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Wellington',
        'status' => '1',
      ),
      477 =>
      array(
        'id' => '478',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Tasman',
        'status' => '1',
      ),
      478 =>
      array(
        'id' => '479',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Nelson',
        'status' => '1',
      ),
      479 =>
      array(
        'id' => '480',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Marlborough',
        'status' => '1',
      ),
      480 =>
      array(
        'id' => '481',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'West Coast',
        'status' => '1',
      ),
      481 =>
      array(
        'id' => '482',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Canterbury',
        'status' => '1',
      ),
      482 =>
      array(
        'id' => '483',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Otago',
        'status' => '1',
      ),
      483 =>
      array(
        'id' => '484',
        'country_name' => 'New Zealand',
        'country_code' => 'NZ',
        'state' => 'Southland',
        'status' => '1',
      ),
      484 =>
      array(
        'id' => '485',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Bicol Region',
        'status' => '1',
      ),
      485 =>
      array(
        'id' => '486',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Cagayan Valley',
        'status' => '1',
      ),
      486 =>
      array(
        'id' => '487',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Calabarzon',
        'status' => '1',
      ),
      487 =>
      array(
        'id' => '488',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Caraga',
        'status' => '1',
      ),
      488 =>
      array(
        'id' => '489',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Central Luzon',
        'status' => '1',
      ),
      489 =>
      array(
        'id' => '490',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Central Visayas',
        'status' => '1',
      ),
      490 =>
      array(
        'id' => '491',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Cordillera Region',
        'status' => '1',
      ),
      491 =>
      array(
        'id' => '492',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Davao Region',
        'status' => '1',
      ),
      492 =>
      array(
        'id' => '493',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Eastern Visayas',
        'status' => '1',
      ),
      493 =>
      array(
        'id' => '494',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Ilocos Region',
        'status' => '1',
      ),
      494 =>
      array(
        'id' => '495',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Mimaropa',
        'status' => '1',
      ),
      495 =>
      array(
        'id' => '496',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'National Capital Region',
        'status' => '1',
      ),
      496 =>
      array(
        'id' => '497',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Northern Mindanao',
        'status' => '1',
      ),
      497 =>
      array(
        'id' => '498',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Soccsksargen',
        'status' => '1',
      ),
      498 =>
      array(
        'id' => '499',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Western Visayas',
        'status' => '1',
      ),
      499 =>
      array(
        'id' => '500',
        'country_name' => 'Philippines, The',
        'country_code' => 'PH',
        'state' => 'Zamboanga Peninsula',
        'status' => '1',
      ),
    ));
    \DB::table('inter_states')->insert(array(
      0 =>
      array(
        'id' => '501',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Les Avirons',
        'status' => '1',
      ),
      1 =>
      array(
        'id' => '502',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Bras-Panon',
        'status' => '1',
      ),
      2 =>
      array(
        'id' => '503',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Cilaos',
        'status' => '1',
      ),
      3 =>
      array(
        'id' => '504',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Entre-Deux',
        'status' => '1',
      ),
      4 =>
      array(
        'id' => '505',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'L\'Etang-Sale',
        'status' => '1',
      ),
      5 =>
      array(
        'id' => '506',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'La Plaine-des-Palmistes',
        'status' => '1',
      ),
      6 =>
      array(
        'id' => '507',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Petite-Ile',
        'status' => '1',
      ),
      7 =>
      array(
        'id' => '508',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'La Possession',
        'status' => '1',
      ),
      8 =>
      array(
        'id' => '509',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Le Port',
        'status' => '1',
      ),
      9 =>
      array(
        'id' => '510',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Andre',
        'status' => '1',
      ),
      10 =>
      array(
        'id' => '511',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Benoit',
        'status' => '1',
      ),
      11 =>
      array(
        'id' => '512',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Denis',
        'status' => '1',
      ),
      12 =>
      array(
        'id' => '513',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Joseph',
        'status' => '1',
      ),
      13 =>
      array(
        'id' => '514',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Leu',
        'status' => '1',
      ),
      14 =>
      array(
        'id' => '515',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Louis',
        'status' => '1',
      ),
      15 =>
      array(
        'id' => '516',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Sainte-Marie',
        'status' => '1',
      ),
      16 =>
      array(
        'id' => '517',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Paul',
        'status' => '1',
      ),
      17 =>
      array(
        'id' => '518',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Philippe',
        'status' => '1',
      ),
      18 =>
      array(
        'id' => '519',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Saint-Pierre',
        'status' => '1',
      ),
      19 =>
      array(
        'id' => '520',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Sainte-Suzanne',
        'status' => '1',
      ),
      20 =>
      array(
        'id' => '521',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Sainte-Rose',
        'status' => '1',
      ),
      21 =>
      array(
        'id' => '522',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Salazie',
        'status' => '1',
      ),
      22 =>
      array(
        'id' => '523',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Trois-Bassins',
        'status' => '1',
      ),
      23 =>
      array(
        'id' => '524',
        'country_name' => 'Reunion, Island Of',
        'country_code' => 'RE',
        'state' => 'Le Tampon',
        'status' => '1',
      ),
      24 =>
      array(
        'id' => '525',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Alba',
        'status' => '1',
      ),
      25 =>
      array(
        'id' => '526',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Arad',
        'status' => '1',
      ),
      26 =>
      array(
        'id' => '527',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Arges',
        'status' => '1',
      ),
      27 =>
      array(
        'id' => '528',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Bacau',
        'status' => '1',
      ),
      28 =>
      array(
        'id' => '529',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Bihor',
        'status' => '1',
      ),
      29 =>
      array(
        'id' => '530',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Bistrita-Nasaud',
        'status' => '1',
      ),
      30 =>
      array(
        'id' => '531',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Botosani',
        'status' => '1',
      ),
      31 =>
      array(
        'id' => '532',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Braila',
        'status' => '1',
      ),
      32 =>
      array(
        'id' => '533',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Brasov',
        'status' => '1',
      ),
      33 =>
      array(
        'id' => '534',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Bucharest',
        'status' => '1',
      ),
      34 =>
      array(
        'id' => '535',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Buzau',
        'status' => '1',
      ),
      35 =>
      array(
        'id' => '536',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Calarasi',
        'status' => '1',
      ),
      36 =>
      array(
        'id' => '537',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Caras-Severin',
        'status' => '1',
      ),
      37 =>
      array(
        'id' => '538',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Cluj',
        'status' => '1',
      ),
      38 =>
      array(
        'id' => '539',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Constanta',
        'status' => '1',
      ),
      39 =>
      array(
        'id' => '540',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Covasna',
        'status' => '1',
      ),
      40 =>
      array(
        'id' => '541',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Dambovita',
        'status' => '1',
      ),
      41 =>
      array(
        'id' => '542',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Dolj',
        'status' => '1',
      ),
      42 =>
      array(
        'id' => '543',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Galati',
        'status' => '1',
      ),
      43 =>
      array(
        'id' => '544',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Giurgiu',
        'status' => '1',
      ),
      44 =>
      array(
        'id' => '545',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Gorj',
        'status' => '1',
      ),
      45 =>
      array(
        'id' => '546',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Harghita',
        'status' => '1',
      ),
      46 =>
      array(
        'id' => '547',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Hunedoara',
        'status' => '1',
      ),
      47 =>
      array(
        'id' => '548',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Ialomita',
        'status' => '1',
      ),
      48 =>
      array(
        'id' => '549',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Iasi',
        'status' => '1',
      ),
      49 =>
      array(
        'id' => '550',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Ilfov',
        'status' => '1',
      ),
      50 =>
      array(
        'id' => '551',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Maramures',
        'status' => '1',
      ),
      51 =>
      array(
        'id' => '552',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Mehedinti',
        'status' => '1',
      ),
      52 =>
      array(
        'id' => '553',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Mures',
        'status' => '1',
      ),
      53 =>
      array(
        'id' => '554',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Neamt',
        'status' => '1',
      ),
      54 =>
      array(
        'id' => '555',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Olt',
        'status' => '1',
      ),
      55 =>
      array(
        'id' => '556',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Prahova',
        'status' => '1',
      ),
      56 =>
      array(
        'id' => '557',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Salaj',
        'status' => '1',
      ),
      57 =>
      array(
        'id' => '558',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Satu Mare',
        'status' => '1',
      ),
      58 =>
      array(
        'id' => '559',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Sibiu',
        'status' => '1',
      ),
      59 =>
      array(
        'id' => '560',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Suceava',
        'status' => '1',
      ),
      60 =>
      array(
        'id' => '561',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Teleorman',
        'status' => '1',
      ),
      61 =>
      array(
        'id' => '562',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Timis',
        'status' => '1',
      ),
      62 =>
      array(
        'id' => '563',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Tulcea',
        'status' => '1',
      ),
      63 =>
      array(
        'id' => '564',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Valcea',
        'status' => '1',
      ),
      64 =>
      array(
        'id' => '565',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Vaslui',
        'status' => '1',
      ),
      65 =>
      array(
        'id' => '566',
        'country_name' => 'Romania',
        'country_code' => 'RO',
        'state' => 'Vrancea',
        'status' => '1',
      ),
      66 =>
      array(
        'id' => '567',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Adygea',
        'status' => '1',
      ),
      67 =>
      array(
        'id' => '568',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Altai ',
        'status' => '1',
      ),
      68 =>
      array(
        'id' => '569',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Altai Krai',
        'status' => '1',
      ),
      69 =>
      array(
        'id' => '570',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Amur',
        'status' => '1',
      ),
      70 =>
      array(
        'id' => '571',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Arkhangelsk',
        'status' => '1',
      ),
      71 =>
      array(
        'id' => '572',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Astrakhan',
        'status' => '1',
      ),
      72 =>
      array(
        'id' => '573',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Bashkortostan',
        'status' => '1',
      ),
      73 =>
      array(
        'id' => '574',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Belgorod',
        'status' => '1',
      ),
      74 =>
      array(
        'id' => '575',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Bryansk',
        'status' => '1',
      ),
      75 =>
      array(
        'id' => '576',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Buryatia',
        'status' => '1',
      ),
      76 =>
      array(
        'id' => '577',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Chechen ',
        'status' => '1',
      ),
      77 =>
      array(
        'id' => '578',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Chelyabinsk',
        'status' => '1',
      ),
      78 =>
      array(
        'id' => '579',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Chukotka',
        'status' => '1',
      ),
      79 =>
      array(
        'id' => '580',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Chuvash ',
        'status' => '1',
      ),
      80 =>
      array(
        'id' => '581',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Dagestan',
        'status' => '1',
      ),
      81 =>
      array(
        'id' => '582',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Ingushetia',
        'status' => '1',
      ),
      82 =>
      array(
        'id' => '583',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Irkutsk',
        'status' => '1',
      ),
      83 =>
      array(
        'id' => '584',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Ivanovo',
        'status' => '1',
      ),
      84 =>
      array(
        'id' => '585',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kabardino-Balkar ',
        'status' => '1',
      ),
      85 =>
      array(
        'id' => '586',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kaliningrad',
        'status' => '1',
      ),
      86 =>
      array(
        'id' => '587',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kalmykia',
        'status' => '1',
      ),
      87 =>
      array(
        'id' => '588',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kaluga',
        'status' => '1',
      ),
      88 =>
      array(
        'id' => '589',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kamchatka Krai',
        'status' => '1',
      ),
      89 =>
      array(
        'id' => '590',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Karachay-Cherkess ',
        'status' => '1',
      ),
      90 =>
      array(
        'id' => '591',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Karelia',
        'status' => '1',
      ),
      91 =>
      array(
        'id' => '592',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kemerovo',
        'status' => '1',
      ),
      92 =>
      array(
        'id' => '593',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Khabarovsk Krai',
        'status' => '1',
      ),
      93 =>
      array(
        'id' => '594',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Khakassia',
        'status' => '1',
      ),
      94 =>
      array(
        'id' => '595',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Khanty Mansi',
        'status' => '1',
      ),
      95 =>
      array(
        'id' => '596',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kirov',
        'status' => '1',
      ),
      96 =>
      array(
        'id' => '597',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Komi ',
        'status' => '1',
      ),
      97 =>
      array(
        'id' => '598',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kostroma',
        'status' => '1',
      ),
      98 =>
      array(
        'id' => '599',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Krasnodar Krai',
        'status' => '1',
      ),
      99 =>
      array(
        'id' => '600',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Krasnoyarsk Krai',
        'status' => '1',
      ),
      100 =>
      array(
        'id' => '601',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kurgan',
        'status' => '1',
      ),
      101 =>
      array(
        'id' => '602',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Kursk',
        'status' => '1',
      ),
      102 =>
      array(
        'id' => '603',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Leningrad',
        'status' => '1',
      ),
      103 =>
      array(
        'id' => '604',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Lipetsk',
        'status' => '1',
      ),
      104 =>
      array(
        'id' => '605',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Magadan',
        'status' => '1',
      ),
      105 =>
      array(
        'id' => '606',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Mari El ',
        'status' => '1',
      ),
      106 =>
      array(
        'id' => '607',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Mordovia',
        'status' => '1',
      ),
      107 =>
      array(
        'id' => '608',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Moscow',
        'status' => '1',
      ),
      108 =>
      array(
        'id' => '609',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Moscow',
        'status' => '1',
      ),
      109 =>
      array(
        'id' => '610',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Murmansk',
        'status' => '1',
      ),
      110 =>
      array(
        'id' => '611',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Nenets',
        'status' => '1',
      ),
      111 =>
      array(
        'id' => '612',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Nizhny Novgorod',
        'status' => '1',
      ),
      112 =>
      array(
        'id' => '613',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'North Ossetia-Alania',
        'status' => '1',
      ),
      113 =>
      array(
        'id' => '614',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Novgorod',
        'status' => '1',
      ),
      114 =>
      array(
        'id' => '615',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Novosibirsk',
        'status' => '1',
      ),
      115 =>
      array(
        'id' => '616',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Omsk',
        'status' => '1',
      ),
      116 =>
      array(
        'id' => '617',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Orenburg',
        'status' => '1',
      ),
      117 =>
      array(
        'id' => '618',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Oryol',
        'status' => '1',
      ),
      118 =>
      array(
        'id' => '619',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Penza',
        'status' => '1',
      ),
      119 =>
      array(
        'id' => '620',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Perm Krai',
        'status' => '1',
      ),
      120 =>
      array(
        'id' => '621',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Primorsky Krai',
        'status' => '1',
      ),
      121 =>
      array(
        'id' => '622',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Pskov',
        'status' => '1',
      ),
      122 =>
      array(
        'id' => '623',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Rostov',
        'status' => '1',
      ),
      123 =>
      array(
        'id' => '624',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Ryazan',
        'status' => '1',
      ),
      124 =>
      array(
        'id' => '625',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Saint Petersburg',
        'status' => '1',
      ),
      125 =>
      array(
        'id' => '626',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Sakha (Yakutia) ',
        'status' => '1',
      ),
      126 =>
      array(
        'id' => '627',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Sakhalin',
        'status' => '1',
      ),
      127 =>
      array(
        'id' => '628',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Samara',
        'status' => '1',
      ),
      128 =>
      array(
        'id' => '629',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Saratov',
        'status' => '1',
      ),
      129 =>
      array(
        'id' => '630',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Smolensk',
        'status' => '1',
      ),
      130 =>
      array(
        'id' => '631',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Stavropol Krai',
        'status' => '1',
      ),
      131 =>
      array(
        'id' => '632',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Sverdlovsk',
        'status' => '1',
      ),
      132 =>
      array(
        'id' => '633',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tambov',
        'status' => '1',
      ),
      133 =>
      array(
        'id' => '634',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tatarstan',
        'status' => '1',
      ),
      134 =>
      array(
        'id' => '635',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tomsk',
        'status' => '1',
      ),
      135 =>
      array(
        'id' => '636',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tula',
        'status' => '1',
      ),
      136 =>
      array(
        'id' => '637',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tuva ',
        'status' => '1',
      ),
      137 =>
      array(
        'id' => '638',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tver',
        'status' => '1',
      ),
      138 =>
      array(
        'id' => '639',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Tyumen',
        'status' => '1',
      ),
      139 =>
      array(
        'id' => '640',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Udmurt ',
        'status' => '1',
      ),
      140 =>
      array(
        'id' => '641',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Ulyanovsk',
        'status' => '1',
      ),
      141 =>
      array(
        'id' => '642',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Vladimir',
        'status' => '1',
      ),
      142 =>
      array(
        'id' => '643',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Volgograd',
        'status' => '1',
      ),
      143 =>
      array(
        'id' => '644',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Vologda',
        'status' => '1',
      ),
      144 =>
      array(
        'id' => '645',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Voronezh',
        'status' => '1',
      ),
      145 =>
      array(
        'id' => '646',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Yamalo-Nenets',
        'status' => '1',
      ),
      146 =>
      array(
        'id' => '647',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Yaroslavl',
        'status' => '1',
      ),
      147 =>
      array(
        'id' => '648',
        'country_name' => 'Russian Federation, ',
        'country_code' => 'RU',
        'state' => 'Zabaykalsky Krai',
        'status' => '1',
      ),
      148 =>
      array(
        'id' => '649',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Adana',
        'status' => '1',
      ),
      149 =>
      array(
        'id' => '650',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Adyaman',
        'status' => '1',
      ),
      150 =>
      array(
        'id' => '651',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Afyonkarahisar',
        'status' => '1',
      ),
      151 =>
      array(
        'id' => '652',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Agri',
        'status' => '1',
      ),
      152 =>
      array(
        'id' => '653',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Amasya',
        'status' => '1',
      ),
      153 =>
      array(
        'id' => '654',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Ankara',
        'status' => '1',
      ),
      154 =>
      array(
        'id' => '655',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Antalya',
        'status' => '1',
      ),
      155 =>
      array(
        'id' => '656',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Artvin',
        'status' => '1',
      ),
      156 =>
      array(
        'id' => '657',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Aydin',
        'status' => '1',
      ),
      157 =>
      array(
        'id' => '658',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Balikesir',
        'status' => '1',
      ),
      158 =>
      array(
        'id' => '659',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bilecik',
        'status' => '1',
      ),
      159 =>
      array(
        'id' => '660',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bingol',
        'status' => '1',
      ),
      160 =>
      array(
        'id' => '661',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bitlis',
        'status' => '1',
      ),
      161 =>
      array(
        'id' => '662',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bolu',
        'status' => '1',
      ),
      162 =>
      array(
        'id' => '663',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Burdur',
        'status' => '1',
      ),
      163 =>
      array(
        'id' => '664',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bursa',
        'status' => '1',
      ),
      164 =>
      array(
        'id' => '665',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Canakkale',
        'status' => '1',
      ),
      165 =>
      array(
        'id' => '666',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Cankiri',
        'status' => '1',
      ),
      166 =>
      array(
        'id' => '667',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Corum',
        'status' => '1',
      ),
      167 =>
      array(
        'id' => '668',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Denizli',
        'status' => '1',
      ),
      168 =>
      array(
        'id' => '669',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Diyarbakir',
        'status' => '1',
      ),
      169 =>
      array(
        'id' => '670',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Edirne',
        'status' => '1',
      ),
      170 =>
      array(
        'id' => '671',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Elazig',
        'status' => '1',
      ),
      171 =>
      array(
        'id' => '672',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Erzincan',
        'status' => '1',
      ),
      172 =>
      array(
        'id' => '673',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Erzurum',
        'status' => '1',
      ),
      173 =>
      array(
        'id' => '674',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Eskisehir',
        'status' => '1',
      ),
      174 =>
      array(
        'id' => '675',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Gaziantep',
        'status' => '1',
      ),
      175 =>
      array(
        'id' => '676',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Giresun',
        'status' => '1',
      ),
      176 =>
      array(
        'id' => '677',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Gumushane',
        'status' => '1',
      ),
      177 =>
      array(
        'id' => '678',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Hakkari',
        'status' => '1',
      ),
      178 =>
      array(
        'id' => '679',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Hatay',
        'status' => '1',
      ),
      179 =>
      array(
        'id' => '680',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Isparta',
        'status' => '1',
      ),
      180 =>
      array(
        'id' => '681',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Mersin',
        'status' => '1',
      ),
      181 =>
      array(
        'id' => '682',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Istanbul',
        'status' => '1',
      ),
      182 =>
      array(
        'id' => '683',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Izmir',
        'status' => '1',
      ),
      183 =>
      array(
        'id' => '684',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kars',
        'status' => '1',
      ),
      184 =>
      array(
        'id' => '685',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kastamonu',
        'status' => '1',
      ),
      185 =>
      array(
        'id' => '686',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kayseri',
        'status' => '1',
      ),
      186 =>
      array(
        'id' => '687',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kirklareli',
        'status' => '1',
      ),
      187 =>
      array(
        'id' => '688',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kirsehir',
        'status' => '1',
      ),
      188 =>
      array(
        'id' => '689',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kocaeli',
        'status' => '1',
      ),
      189 =>
      array(
        'id' => '690',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Konya',
        'status' => '1',
      ),
      190 =>
      array(
        'id' => '691',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kutahya',
        'status' => '1',
      ),
      191 =>
      array(
        'id' => '692',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Malatya',
        'status' => '1',
      ),
      192 =>
      array(
        'id' => '693',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Manisa',
        'status' => '1',
      ),
      193 =>
      array(
        'id' => '694',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kahramanmaras',
        'status' => '1',
      ),
      194 =>
      array(
        'id' => '695',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Mardin',
        'status' => '1',
      ),
      195 =>
      array(
        'id' => '696',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Mugla',
        'status' => '1',
      ),
      196 =>
      array(
        'id' => '697',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Mus',
        'status' => '1',
      ),
      197 =>
      array(
        'id' => '698',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Nevsehir',
        'status' => '1',
      ),
      198 =>
      array(
        'id' => '699',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Nigde',
        'status' => '1',
      ),
      199 =>
      array(
        'id' => '700',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Ordu',
        'status' => '1',
      ),
      200 =>
      array(
        'id' => '701',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Rize',
        'status' => '1',
      ),
      201 =>
      array(
        'id' => '702',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Sakarya',
        'status' => '1',
      ),
      202 =>
      array(
        'id' => '703',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Samsun',
        'status' => '1',
      ),
      203 =>
      array(
        'id' => '704',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Siirt',
        'status' => '1',
      ),
      204 =>
      array(
        'id' => '705',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Sinop',
        'status' => '1',
      ),
      205 =>
      array(
        'id' => '706',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Sivas',
        'status' => '1',
      ),
      206 =>
      array(
        'id' => '707',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Tekirdag',
        'status' => '1',
      ),
      207 =>
      array(
        'id' => '708',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Tokat',
        'status' => '1',
      ),
      208 =>
      array(
        'id' => '709',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Trabzon',
        'status' => '1',
      ),
      209 =>
      array(
        'id' => '710',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Tunceli',
        'status' => '1',
      ),
      210 =>
      array(
        'id' => '711',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Sanliurfa',
        'status' => '1',
      ),
      211 =>
      array(
        'id' => '712',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Usak',
        'status' => '1',
      ),
      212 =>
      array(
        'id' => '713',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Van',
        'status' => '1',
      ),
      213 =>
      array(
        'id' => '714',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Yozgat',
        'status' => '1',
      ),
      214 =>
      array(
        'id' => '715',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Zonguldak',
        'status' => '1',
      ),
      215 =>
      array(
        'id' => '716',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Aksaray',
        'status' => '1',
      ),
      216 =>
      array(
        'id' => '717',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bayburt',
        'status' => '1',
      ),
      217 =>
      array(
        'id' => '718',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Karaman',
        'status' => '1',
      ),
      218 =>
      array(
        'id' => '719',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kirikkale',
        'status' => '1',
      ),
      219 =>
      array(
        'id' => '720',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Batman',
        'status' => '1',
      ),
      220 =>
      array(
        'id' => '721',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Sirnak',
        'status' => '1',
      ),
      221 =>
      array(
        'id' => '722',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Bartin',
        'status' => '1',
      ),
      222 =>
      array(
        'id' => '723',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Ardahan',
        'status' => '1',
      ),
      223 =>
      array(
        'id' => '724',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Igdir',
        'status' => '1',
      ),
      224 =>
      array(
        'id' => '725',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Yalova',
        'status' => '1',
      ),
      225 =>
      array(
        'id' => '726',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Karabuk',
        'status' => '1',
      ),
      226 =>
      array(
        'id' => '727',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Kilis',
        'status' => '1',
      ),
      227 =>
      array(
        'id' => '728',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Osmaniye',
        'status' => '1',
      ),
      228 =>
      array(
        'id' => '729',
        'country_name' => 'Turkey',
        'country_code' => 'TR',
        'state' => 'Duzce',
        'status' => '1',
      ),
      229 =>
      array(
        'id' => '730',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Changhua County',
        'status' => '1',
      ),
      230 =>
      array(
        'id' => '731',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Chiayi City',
        'status' => '1',
      ),
      231 =>
      array(
        'id' => '732',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Chiayi County',
        'status' => '1',
      ),
      232 =>
      array(
        'id' => '733',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Hsinchu City',
        'status' => '1',
      ),
      233 =>
      array(
        'id' => '734',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Hsinchu County',
        'status' => '1',
      ),
      234 =>
      array(
        'id' => '735',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Hualien County',
        'status' => '1',
      ),
      235 =>
      array(
        'id' => '736',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Keelung City',
        'status' => '1',
      ),
      236 =>
      array(
        'id' => '737',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Miaoli County',
        'status' => '1',
      ),
      237 =>
      array(
        'id' => '738',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Nantou County',
        'status' => '1',
      ),
      238 =>
      array(
        'id' => '739',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Penghu County',
        'status' => '1',
      ),
      239 =>
      array(
        'id' => '741',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Taipei',
        'status' => '1',
      ),
      240 =>
      array(
        'id' => '742',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Taitung County',
        'status' => '1',
      ),
      241 =>
      array(
        'id' => '743',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Taoyuan County',
        'status' => '1',
      ),
      242 =>
      array(
        'id' => '744',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Yilan County',
        'status' => '1',
      ),
      243 =>
      array(
        'id' => '745',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Yunlin County',
        'status' => '1',
      ),
      244 =>
      array(
        'id' => '746',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Alabama',
        'status' => '1',
      ),
      245 =>
      array(
        'id' => '747',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Alaska',
        'status' => '1',
      ),
      246 =>
      array(
        'id' => '748',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Arizona',
        'status' => '1',
      ),
      247 =>
      array(
        'id' => '749',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Arkansas',
        'status' => '1',
      ),
      248 =>
      array(
        'id' => '750',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'California',
        'status' => '1',
      ),
      249 =>
      array(
        'id' => '751',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Colorado',
        'status' => '1',
      ),
      250 =>
      array(
        'id' => '752',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Connecticut',
        'status' => '1',
      ),
      251 =>
      array(
        'id' => '753',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Delaware',
        'status' => '1',
      ),
      252 =>
      array(
        'id' => '754',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Florida',
        'status' => '1',
      ),
      253 =>
      array(
        'id' => '755',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Georgia',
        'status' => '1',
      ),
      254 =>
      array(
        'id' => '756',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Hawaii',
        'status' => '1',
      ),
      255 =>
      array(
        'id' => '757',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Idaho',
        'status' => '1',
      ),
      256 =>
      array(
        'id' => '758',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Illinois',
        'status' => '1',
      ),
      257 =>
      array(
        'id' => '759',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Indiana',
        'status' => '1',
      ),
      258 =>
      array(
        'id' => '760',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Iowa',
        'status' => '1',
      ),
      259 =>
      array(
        'id' => '761',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Kansas',
        'status' => '1',
      ),
      260 =>
      array(
        'id' => '762',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Kentucky',
        'status' => '1',
      ),
      261 =>
      array(
        'id' => '763',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Louisiana',
        'status' => '1',
      ),
      262 =>
      array(
        'id' => '764',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Maine',
        'status' => '1',
      ),
      263 =>
      array(
        'id' => '765',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Maryland',
        'status' => '1',
      ),
      264 =>
      array(
        'id' => '766',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Massachusetts',
        'status' => '1',
      ),
      265 =>
      array(
        'id' => '767',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Michigan',
        'status' => '1',
      ),
      266 =>
      array(
        'id' => '768',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Minnesota',
        'status' => '1',
      ),
      267 =>
      array(
        'id' => '769',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Mississippi',
        'status' => '1',
      ),
      268 =>
      array(
        'id' => '770',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Missouri',
        'status' => '1',
      ),
      269 =>
      array(
        'id' => '771',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Montana',
        'status' => '1',
      ),
      270 =>
      array(
        'id' => '772',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Nebraska',
        'status' => '1',
      ),
      271 =>
      array(
        'id' => '773',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Nevada',
        'status' => '1',
      ),
      272 =>
      array(
        'id' => '774',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'New Hampshire',
        'status' => '1',
      ),
      273 =>
      array(
        'id' => '775',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'New Jersey',
        'status' => '1',
      ),
      274 =>
      array(
        'id' => '776',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'New Mexico',
        'status' => '1',
      ),
      275 =>
      array(
        'id' => '777',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'New York',
        'status' => '1',
      ),
      276 =>
      array(
        'id' => '778',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'North Carolina',
        'status' => '1',
      ),
      277 =>
      array(
        'id' => '779',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'North Dakota',
        'status' => '1',
      ),
      278 =>
      array(
        'id' => '780',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Ohio',
        'status' => '1',
      ),
      279 =>
      array(
        'id' => '781',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Oklahoma',
        'status' => '1',
      ),
      280 =>
      array(
        'id' => '782',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Oregon',
        'status' => '1',
      ),
      281 =>
      array(
        'id' => '783',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Pennsylvania',
        'status' => '1',
      ),
      282 =>
      array(
        'id' => '784',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Rhode Island',
        'status' => '1',
      ),
      283 =>
      array(
        'id' => '785',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'South Carolina',
        'status' => '1',
      ),
      284 =>
      array(
        'id' => '786',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'South Dakota',
        'status' => '1',
      ),
      285 =>
      array(
        'id' => '787',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Tennessee',
        'status' => '1',
      ),
      286 =>
      array(
        'id' => '788',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Texas',
        'status' => '1',
      ),
      287 =>
      array(
        'id' => '789',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Utah',
        'status' => '1',
      ),
      288 =>
      array(
        'id' => '790',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Vermont',
        'status' => '1',
      ),
      289 =>
      array(
        'id' => '791',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Virginia',
        'status' => '1',
      ),
      290 =>
      array(
        'id' => '792',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Washington',
        'status' => '1',
      ),
      291 =>
      array(
        'id' => '793',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'West Virginia',
        'status' => '1',
      ),
      292 =>
      array(
        'id' => '794',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Wisconsin',
        'status' => '1',
      ),
      293 =>
      array(
        'id' => '795',
        'country_name' => 'United States Of Ame',
        'country_code' => 'US',
        'state' => 'Wyoming',
        'status' => '1',
      ),
      294 =>
      array(
        'id' => '796',
        'country_name' => 'Virgin Islands (US)',
        'country_code' => 'VI',
        'state' => 'St. Thomas',
        'status' => '1',
      ),
      295 =>
      array(
        'id' => '797',
        'country_name' => 'Virgin Islands (US)',
        'country_code' => 'VI',
        'state' => 'St. John',
        'status' => '1',
      ),
      296 =>
      array(
        'id' => '798',
        'country_name' => 'Virgin Islands (US)',
        'country_code' => 'VI',
        'state' => 'St. Croix',
        'status' => '1',
      ),
      297 =>
      array(
        'id' => '799',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Eastern Cape',
        'status' => '1',
      ),
      298 =>
      array(
        'id' => '800',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Free State',
        'status' => '1',
      ),
      299 =>
      array(
        'id' => '740',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Pingtung County',
        'status' => '1',
      ),
      300 =>
      array(
        'id' => '801',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Gauteng',
        'status' => '1',
      ),
      301 =>
      array(
        'id' => '802',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'KwaZulu-Natal',
        'status' => '1',
      ),
      302 =>
      array(
        'id' => '803',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Limpopo',
        'status' => '1',
      ),
      303 =>
      array(
        'id' => '804',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Mpumalanga',
        'status' => '1',
      ),
      304 =>
      array(
        'id' => '805',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'North West',
        'status' => '1',
      ),
      305 =>
      array(
        'id' => '806',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Northern Cape',
        'status' => '1',
      ),
      306 =>
      array(
        'id' => '807',
        'country_name' => 'South Africa',
        'country_code' => 'ZA',
        'state' => 'Western Cape',
        'status' => '1',
      ),
      307 =>
      array(
        'id' => '808',
        'country_name' => 'China',
        'country_code' => 'CN',
        'state' => 'Zhejiang',
        'status' => '1',
      ),
      308 =>
      array(
        'id' => '809',
        'country_name' => 'Taiwan',
        'country_code' => 'TW',
        'state' => 'Taichung City',
        'status' => '1',
      ),
    ));
  }

}
