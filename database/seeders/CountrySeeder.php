<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {


    \DB::table('countries')->delete();

    \DB::table('countries')->insert(array(
      0 =>
      array(
        'code' => 'AD',
        'name' => 'Andorra',
        'code_iso3' => 'AND',
        'prohibited' => 0,
        'review' => 0,
      ),
      1 =>
      array(
        'code' => 'AE',
        'name' => 'United Arab Emirates',
        'code_iso3' => 'ARE',
        'prohibited' => 0,
        'review' => 0,
      ),
      2 =>
      array(
        'code' => 'AF',
        'name' => 'Afghanistan',
        'code_iso3' => 'AFG',
        'prohibited' => 1,
        'review' => 0,
      ),
      3 =>
      array(
        'code' => 'AG',
        'name' => 'Antigua and Barbuda',
        'code_iso3' => 'ATG',
        'prohibited' => 0,
        'review' => 0,
      ),
      4 =>
      array(
        'code' => 'AI',
        'name' => 'Anguilla',
        'code_iso3' => 'AIA',
        'prohibited' => 0,
        'review' => 0,
      ),
      5 =>
      array(
        'code' => 'AL',
        'name' => 'Albania',
        'code_iso3' => 'ALB',
        'prohibited' => 0,
        'review' => 0,
      ),
      6 =>
      array(
        'code' => 'AM',
        'name' => 'Armenia',
        'code_iso3' => 'ARM',
        'prohibited' => 0,
        'review' => 0,
      ),
      7 =>
      array(
        'code' => 'AN',
        'name' => 'Netherlands Antilles',
        'code_iso3' => 'ANT',
        'prohibited' => 1,
        'review' => 0,
      ),
      8 =>
      array(
        'code' => 'AO',
        'name' => 'Angola',
        'code_iso3' => 'AGO',
        'prohibited' => 1,
        'review' => 0,
      ),
      9 =>
      array(
        'code' => 'AQ',
        'name' => 'Antarctica',
        'code_iso3' => 'ATA',
        'prohibited' => 1,
        'review' => 0,
      ),
      10 =>
      array(
        'code' => 'AR',
        'name' => 'Argentina',
        'code_iso3' => 'ARG',
        'prohibited' => 0,
        'review' => 0,
      ),
      11 =>
      array(
        'code' => 'AS',
        'name' => 'American Samoa',
        'code_iso3' => 'ASM',
        'prohibited' => 0,
        'review' => 0,
      ),
      12 =>
      array(
        'code' => 'AT',
        'name' => 'Austria',
        'code_iso3' => 'AUT',
        'prohibited' => 0,
        'review' => 0,
      ),
      13 =>
      array(
        'code' => 'AU',
        'name' => 'Australia',
        'code_iso3' => 'AUS',
        'prohibited' => 0,
        'review' => 0,
      ),
      14 =>
      array(
        'code' => 'AW',
        'name' => 'Aruba',
        'code_iso3' => 'ABW',
        'prohibited' => 0,
        'review' => 0,
      ),
      15 =>
      array(
        'code' => 'AZ',
        'name' => 'Azerbaijan',
        'code_iso3' => 'AZE',
        'prohibited' => 0,
        'review' => 0,
      ),
      16 =>
      array(
        'code' => 'BA',
        'name' => 'Bosnia and Herzegovina',
        'code_iso3' => 'BIH',
        'prohibited' => 0,
        'review' => 0,
      ),
      17 =>
      array(
        'code' => 'BB',
        'name' => 'Barbados',
        'code_iso3' => 'BRB',
        'prohibited' => 0,
        'review' => 0,
      ),
      18 =>
      array(
        'code' => 'BD',
        'name' => 'Bangladesh',
        'code_iso3' => 'BGD',
        'prohibited' => 1,
        'review' => 0,
      ),
      19 =>
      array(
        'code' => 'BE',
        'name' => 'Belgium',
        'code_iso3' => 'BEL',
        'prohibited' => 0,
        'review' => 0,
      ),
      20 =>
      array(
        'code' => 'BF',
        'name' => 'Burkina Faso',
        'code_iso3' => 'BFA',
        'prohibited' => 1,
        'review' => 0,
      ),
      21 =>
      array(
        'code' => 'BG',
        'name' => 'Bulgaria',
        'code_iso3' => 'BGR',
        'prohibited' => 0,
        'review' => 0,
      ),
      22 =>
      array(
        'code' => 'BH',
        'name' => 'Bahrain',
        'code_iso3' => 'BHR',
        'prohibited' => 0,
        'review' => 0,
      ),
      23 =>
      array(
        'code' => 'BI',
        'name' => 'Burundi',
        'code_iso3' => 'BDI',
        'prohibited' => 1,
        'review' => 0,
      ),
      24 =>
      array(
        'code' => 'BJ',
        'name' => 'Benin',
        'code_iso3' => 'BEN',
        'prohibited' => 1,
        'review' => 0,
      ),
      25 =>
      array(
        'code' => 'BM',
        'name' => 'Bermuda',
        'code_iso3' => 'BMU',
        'prohibited' => 0,
        'review' => 0,
      ),
      26 =>
      array(
        'code' => 'BN',
        'name' => 'Brunei Darussalam',
        'code_iso3' => 'BRN',
        'prohibited' => 0,
        'review' => 0,
      ),
      27 =>
      array(
        'code' => 'BO',
        'name' => 'Bolivia',
        'code_iso3' => 'BOL',
        'prohibited' => 1,
        'review' => 0,
      ),
      28 =>
      array(
        'code' => 'BR',
        'name' => 'Brazil',
        'code_iso3' => 'BRA',
        'prohibited' => 1,
        'review' => 0,
      ),
      29 =>
      array(
        'code' => 'BS',
        'name' => 'Bahamas',
        'code_iso3' => 'BHS',
        'prohibited' => 0,
        'review' => 0,
      ),
      30 =>
      array(
        'code' => 'BT',
        'name' => 'Bhutan',
        'code_iso3' => 'BTN',
        'prohibited' => 0,
        'review' => 0,
      ),
      31 =>
      array(
        'code' => 'BV',
        'name' => 'Bouvet Island',
        'code_iso3' => 'BVT',
        'prohibited' => 1,
        'review' => 0,
      ),
      32 =>
      array(
        'code' => 'BW',
        'name' => 'Botswana',
        'code_iso3' => 'BWA',
        'prohibited' => 0,
        'review' => 0,
      ),
      33 =>
      array(
        'code' => 'BY',
        'name' => 'Belarus',
        'code_iso3' => 'BLR',
        'prohibited' => 0,
        'review' => 0,
      ),
      34 =>
      array(
        'code' => 'BZ',
        'name' => 'Belize',
        'code_iso3' => 'BLZ',
        'prohibited' => 0,
        'review' => 0,
      ),
      35 =>
      array(
        'code' => 'CA',
        'name' => 'Canada',
        'code_iso3' => 'CAN',
        'prohibited' => 0,
        'review' => 0,
      ),
      36 =>
      array(
        'code' => 'CC',
        'name' => 'Cocos (Keeling) Islands',
        'code_iso3' => 'CCK',
        'prohibited' => 0,
        'review' => 0,
      ),
      37 =>
      array(
        'code' => 'CF',
        'name' => 'Central African Republic',
        'code_iso3' => 'CAF',
        'prohibited' => 1,
        'review' => 0,
      ),
      38 =>
      array(
        'code' => 'CG',
        'name' => 'Congo',
        'code_iso3' => 'COG',
        'prohibited' => 1,
        'review' => 0,
      ),
      39 =>
      array(
        'code' => 'CH',
        'name' => 'Switzerland',
        'code_iso3' => 'CHE',
        'prohibited' => 0,
        'review' => 0,
      ),
      40 =>
      array(
        'code' => 'CI',
        'name' => 'Cote D\'Ivoire',
        'code_iso3' => 'CIV',
        'prohibited' => 1,
        'review' => 0,
      ),
      41 =>
      array(
        'code' => 'CK',
        'name' => 'Cook Islands',
        'code_iso3' => 'COK',
        'prohibited' => 0,
        'review' => 0,
      ),
      42 =>
      array(
        'code' => 'CL',
        'name' => 'Chile',
        'code_iso3' => 'CHL',
        'prohibited' => 0,
        'review' => 0,
      ),
      43 =>
      array(
        'code' => 'CM',
        'name' => 'Cameroon',
        'code_iso3' => 'CMR',
        'prohibited' => 1,
        'review' => 0,
      ),
      44 =>
      array(
        'code' => 'CN',
        'name' => 'China',
        'code_iso3' => 'CHN',
        'prohibited' => 0,
        'review' => 0,
      ),
      45 =>
      array(
        'code' => 'CO',
        'name' => 'Colombia',
        'code_iso3' => 'COL',
        'prohibited' => 0,
        'review' => 0,
      ),
      46 =>
      array(
        'code' => 'CR',
        'name' => 'Costa Rica',
        'code_iso3' => 'CRI',
        'prohibited' => 0,
        'review' => 0,
      ),
      47 =>
      array(
        'code' => 'CU',
        'name' => 'Cuba',
        'code_iso3' => 'CUB',
        'prohibited' => 1,
        'review' => 0,
      ),
      48 =>
      array(
        'code' => 'CV',
        'name' => 'Cape Verde',
        'code_iso3' => 'CPV',
        'prohibited' => 1,
        'review' => 0,
      ),
      49 =>
      array(
        'code' => 'CX',
        'name' => 'Christmas Island',
        'code_iso3' => 'CXR',
        'prohibited' => 0,
        'review' => 0,
      ),
      50 =>
      array(
        'code' => 'CY',
        'name' => 'Cyprus',
        'code_iso3' => 'CYP',
        'prohibited' => 0,
        'review' => 0,
      ),
      51 =>
      array(
        'code' => 'CZ',
        'name' => 'Czech Republic',
        'code_iso3' => 'CZE',
        'prohibited' => 0,
        'review' => 0,
      ),
      52 =>
      array(
        'code' => 'DE',
        'name' => 'Germany',
        'code_iso3' => 'DEU',
        'prohibited' => 0,
        'review' => 0,
      ),
      53 =>
      array(
        'code' => 'DJ',
        'name' => 'Djibouti',
        'code_iso3' => 'DJI',
        'prohibited' => 1,
        'review' => 0,
      ),
      54 =>
      array(
        'code' => 'DK',
        'name' => 'Denmark',
        'code_iso3' => 'DNK',
        'prohibited' => 0,
        'review' => 0,
      ),
      55 =>
      array(
        'code' => 'DM',
        'name' => 'Dominica',
        'code_iso3' => 'DMA',
        'prohibited' => 0,
        'review' => 0,
      ),
      56 =>
      array(
        'code' => 'DO',
        'name' => 'Dominican Republic',
        'code_iso3' => 'DOM',
        'prohibited' => 1,
        'review' => 0,
      ),
      57 =>
      array(
        'code' => 'DZ',
        'name' => 'Algeria',
        'code_iso3' => 'DZA',
        'prohibited' => 1,
        'review' => 0,
      ),
      58 =>
      array(
        'code' => 'EC',
        'name' => 'Ecuador',
        'code_iso3' => 'ECU',
        'prohibited' => 1,
        'review' => 0,
      ),
      59 =>
      array(
        'code' => 'EE',
        'name' => 'Estonia',
        'code_iso3' => 'EST',
        'prohibited' => 0,
        'review' => 0,
      ),
      60 =>
      array(
        'code' => 'EG',
        'name' => 'Egypt',
        'code_iso3' => 'EGY',
        'prohibited' => 1,
        'review' => 0,
      ),
      61 =>
      array(
        'code' => 'EH',
        'name' => 'Western Sahara',
        'code_iso3' => 'ESH',
        'prohibited' => 1,
        'review' => 0,
      ),
      62 =>
      array(
        'code' => 'ER',
        'name' => 'Eritrea',
        'code_iso3' => 'ERI',
        'prohibited' => 1,
        'review' => 0,
      ),
      63 =>
      array(
        'code' => 'ES',
        'name' => 'Spain',
        'code_iso3' => 'ESP',
        'prohibited' => 0,
        'review' => 0,
      ),
      64 =>
      array(
        'code' => 'ET',
        'name' => 'Ethiopia',
        'code_iso3' => 'ETH',
        'prohibited' => 1,
        'review' => 0,
      ),
      65 =>
      array(
        'code' => 'FI',
        'name' => 'Finland',
        'code_iso3' => 'FIN',
        'prohibited' => 0,
        'review' => 0,
      ),
      66 =>
      array(
        'code' => 'FJ',
        'name' => 'Fiji',
        'code_iso3' => 'FJI',
        'prohibited' => 0,
        'review' => 0,
      ),
      67 =>
      array(
        'code' => 'FK',
        'name' => 'Falkland Islands (Malvinas)',
        'code_iso3' => 'FLK',
        'prohibited' => 0,
        'review' => 0,
      ),
      68 =>
      array(
        'code' => 'FM',
        'name' => 'Micronesia, Federated States of',
        'code_iso3' => 'FSM',
        'prohibited' => 1,
        'review' => 0,
      ),
      69 =>
      array(
        'code' => 'FO',
        'name' => 'Faroe Islands',
        'code_iso3' => 'FRO',
        'prohibited' => 0,
        'review' => 0,
      ),
      70 =>
      array(
        'code' => 'FR',
        'name' => 'France',
        'code_iso3' => 'FRA',
        'prohibited' => 0,
        'review' => 0,
      ),
      71 =>
      array(
        'code' => 'FX',
        'name' => 'France, Metropolitan',
        'code_iso3' => 'FXX',
        'prohibited' => 1,
        'review' => 0,
      ),
      72 =>
      array(
        'code' => 'GA',
        'name' => 'Gabon',
        'code_iso3' => 'GAB',
        'prohibited' => 1,
        'review' => 0,
      ),
      73 =>
      array(
        'code' => 'GB',
        'name' => 'United Kingdom',
        'code_iso3' => 'GBR',
        'prohibited' => 0,
        'review' => 0,
      ),
      74 =>
      array(
        'code' => 'GD',
        'name' => 'Grenada',
        'code_iso3' => 'GRD',
        'prohibited' => 0,
        'review' => 0,
      ),
      75 =>
      array(
        'code' => 'GE',
        'name' => 'Georgia',
        'code_iso3' => 'GEO',
        'prohibited' => 1,
        'review' => 0,
      ),
      76 =>
      array(
        'code' => 'GF',
        'name' => 'French Guiana',
        'code_iso3' => 'GUF',
        'prohibited' => 0,
        'review' => 0,
      ),
      77 =>
      array(
        'code' => 'GH',
        'name' => 'Ghana',
        'code_iso3' => 'GHA',
        'prohibited' => 1,
        'review' => 0,
      ),
      78 =>
      array(
        'code' => 'GI',
        'name' => 'Gibraltar',
        'code_iso3' => 'GIB',
        'prohibited' => 0,
        'review' => 0,
      ),
      79 =>
      array(
        'code' => 'GL',
        'name' => 'Greenland',
        'code_iso3' => 'GRL',
        'prohibited' => 0,
        'review' => 0,
      ),
      80 =>
      array(
        'code' => 'GM',
        'name' => 'Gambia',
        'code_iso3' => 'GMB',
        'prohibited' => 0,
        'review' => 0,
      ),
      81 =>
      array(
        'code' => 'GN',
        'name' => 'Guinea',
        'code_iso3' => 'GIN',
        'prohibited' => 1,
        'review' => 0,
      ),
      82 =>
      array(
        'code' => 'GP',
        'name' => 'Guadeloupe',
        'code_iso3' => 'GLP',
        'prohibited' => 0,
        'review' => 0,
      ),
      83 =>
      array(
        'code' => 'GQ',
        'name' => 'Equatorial Guinea',
        'code_iso3' => 'GNQ',
        'prohibited' => 1,
        'review' => 0,
      ),
      84 =>
      array(
        'code' => 'GR',
        'name' => 'Greece',
        'code_iso3' => 'GRC',
        'prohibited' => 0,
        'review' => 0,
      ),
      85 =>
      array(
        'code' => 'GS',
        'name' => 'South Georgia and the South Sandwich Islands',
        'code_iso3' => 'SGS',
        'prohibited' => 1,
        'review' => 0,
      ),
      86 =>
      array(
        'code' => 'GT',
        'name' => 'Guatemala',
        'code_iso3' => 'GTM',
        'prohibited' => 0,
        'review' => 0,
      ),
      87 =>
      array(
        'code' => 'GU',
        'name' => 'Guam',
        'code_iso3' => 'GUM',
        'prohibited' => 0,
        'review' => 0,
      ),
      88 =>
      array(
        'code' => 'GW',
        'name' => 'Guinea-bissau',
        'code_iso3' => 'GNB',
        'prohibited' => 1,
        'review' => 0,
      ),
      89 =>
      array(
        'code' => 'GY',
        'name' => 'Guyana',
        'code_iso3' => 'GUY',
        'prohibited' => 0,
        'review' => 0,
      ),
      90 =>
      array(
        'code' => 'HK',
        'name' => 'Hong Kong',
        'code_iso3' => 'HKG',
        'prohibited' => 0,
        'review' => 0,
      ),
      91 =>
      array(
        'code' => 'HM',
        'name' => 'Heard and Mc Donald Islands',
        'code_iso3' => 'HMD',
        'prohibited' => 1,
        'review' => 0,
      ),
      92 =>
      array(
        'code' => 'HN',
        'name' => 'Honduras',
        'code_iso3' => 'HND',
        'prohibited' => 0,
        'review' => 0,
      ),
      93 =>
      array(
        'code' => 'HR',
        'name' => 'Croatia',
        'code_iso3' => 'HRV',
        'prohibited' => 0,
        'review' => 0,
      ),
      94 =>
      array(
        'code' => 'HT',
        'name' => 'Haiti',
        'code_iso3' => 'HTI',
        'prohibited' => 1,
        'review' => 0,
      ),
      95 =>
      array(
        'code' => 'HU',
        'name' => 'Hungary',
        'code_iso3' => 'HUN',
        'prohibited' => 0,
        'review' => 0,
      ),
      96 =>
      array(
        'code' => 'ID',
        'name' => 'Indonesia',
        'code_iso3' => 'IDN',
        'prohibited' => 0,
        'review' => 1,
      ),
      97 =>
      array(
        'code' => 'IE',
        'name' => 'Ireland',
        'code_iso3' => 'IRL',
        'prohibited' => 0,
        'review' => 0,
      ),
      98 =>
      array(
        'code' => 'IL',
        'name' => 'Israel',
        'code_iso3' => 'ISR',
        'prohibited' => 0,
        'review' => 0,
      ),
      99 =>
      array(
        'code' => 'IN',
        'name' => 'India',
        'code_iso3' => 'IND',
        'prohibited' => 0,
        'review' => 0,
      ),
      100 =>
      array(
        'code' => 'IO',
        'name' => 'British Indian Ocean Territory',
        'code_iso3' => 'IOT',
        'prohibited' => 1,
        'review' => 0,
      ),
      101 =>
      array(
        'code' => 'IQ',
        'name' => 'Iraq',
        'code_iso3' => 'IRQ',
        'prohibited' => 1,
        'review' => 0,
      ),
      102 =>
      array(
        'code' => 'IR',
        'name' => 'Iran (Islamic Republic of)',
        'code_iso3' => 'IRN',
        'prohibited' => 1,
        'review' => 0,
      ),
      103 =>
      array(
        'code' => 'IS',
        'name' => 'Iceland',
        'code_iso3' => 'ISL',
        'prohibited' => 0,
        'review' => 0,
      ),
      104 =>
      array(
        'code' => 'IT',
        'name' => 'Italy',
        'code_iso3' => 'ITA',
        'prohibited' => 0,
        'review' => 0,
      ),
      105 =>
      array(
        'code' => 'JM',
        'name' => 'Jamaica',
        'code_iso3' => 'JAM',
        'prohibited' => 0,
        'review' => 0,
      ),
      106 =>
      array(
        'code' => 'JO',
        'name' => 'Jordan',
        'code_iso3' => 'JOR',
        'prohibited' => 0,
        'review' => 0,
      ),
      107 =>
      array(
        'code' => 'JP',
        'name' => 'Japan',
        'code_iso3' => 'JPN',
        'prohibited' => 0,
        'review' => 0,
      ),
      108 =>
      array(
        'code' => 'KE',
        'name' => 'Kenya',
        'code_iso3' => 'KEN',
        'prohibited' => 1,
        'review' => 0,
      ),
      109 =>
      array(
        'code' => 'KG',
        'name' => 'Kyrgyzstan',
        'code_iso3' => 'KGZ',
        'prohibited' => 0,
        'review' => 0,
      ),
      110 =>
      array(
        'code' => 'KH',
        'name' => 'Cambodia',
        'code_iso3' => 'KHM',
        'prohibited' => 0,
        'review' => 1,
      ),
      111 =>
      array(
        'code' => 'KI',
        'name' => 'Kiribati',
        'code_iso3' => 'KIR',
        'prohibited' => 0,
        'review' => 0,
      ),
      112 =>
      array(
        'code' => 'KM',
        'name' => 'Comoros',
        'code_iso3' => 'COM',
        'prohibited' => 0,
        'review' => 0,
      ),
      113 =>
      array(
        'code' => 'KN',
        'name' => 'Saint Kitts and Nevis',
        'code_iso3' => 'KNA',
        'prohibited' => 0,
        'review' => 0,
      ),
      114 =>
      array(
        'code' => 'KP',
        'name' => 'Korea, Democratic People\'s Republic of',
        'code_iso3' => 'PRK',
        'prohibited' => 1,
        'review' => 0,
      ),
      115 =>
      array(
        'code' => 'KR',
        'name' => 'Korea, Republic of South',
        'code_iso3' => 'KOR',
        'prohibited' => 0,
        'review' => 0,
      ),
      116 =>
      array(
        'code' => 'KW',
        'name' => 'Kuwait',
        'code_iso3' => 'KWT',
        'prohibited' => 0,
        'review' => 0,
      ),
      117 =>
      array(
        'code' => 'KY',
        'name' => 'Cayman Islands',
        'code_iso3' => 'CYM',
        'prohibited' => 0,
        'review' => 0,
      ),
      118 =>
      array(
        'code' => 'KZ',
        'name' => 'Kazakhstan',
        'code_iso3' => 'KAZ',
        'prohibited' => 0,
        'review' => 0,
      ),
      119 =>
      array(
        'code' => 'LA',
        'name' => 'Lao People\'s Democratic Republic',
        'code_iso3' => 'LAO',
        'prohibited' => 1,
        'review' => 0,
      ),
      120 =>
      array(
        'code' => 'LB',
        'name' => 'Lebanon',
        'code_iso3' => 'LBN',
        'prohibited' => 0,
        'review' => 0,
      ),
      121 =>
      array(
        'code' => 'LC',
        'name' => 'Saint Lucia',
        'code_iso3' => 'LCA',
        'prohibited' => 0,
        'review' => 0,
      ),
      122 =>
      array(
        'code' => 'LI',
        'name' => 'Liechtenstein',
        'code_iso3' => 'LIE',
        'prohibited' => 1,
        'review' => 0,
      ),
      123 =>
      array(
        'code' => 'LK',
        'name' => 'Sri Lanka',
        'code_iso3' => 'LKA',
        'prohibited' => 0,
        'review' => 0,
      ),
      124 =>
      array(
        'code' => 'LR',
        'name' => 'Liberia',
        'code_iso3' => 'LBR',
        'prohibited' => 1,
        'review' => 0,
      ),
      125 =>
      array(
        'code' => 'LS',
        'name' => 'Lesotho',
        'code_iso3' => 'LSO',
        'prohibited' => 0,
        'review' => 0,
      ),
      126 =>
      array(
        'code' => 'LT',
        'name' => 'Lithuania',
        'code_iso3' => 'LTU',
        'prohibited' => 0,
        'review' => 0,
      ),
      127 =>
      array(
        'code' => 'LU',
        'name' => 'Luxembourg',
        'code_iso3' => 'LUX',
        'prohibited' => 0,
        'review' => 0,
      ),
      128 =>
      array(
        'code' => 'LV',
        'name' => 'Latvia',
        'code_iso3' => 'LVA',
        'prohibited' => 0,
        'review' => 0,
      ),
      129 =>
      array(
        'code' => 'LY',
        'name' => 'Libyan Arab Jamahiriya',
        'code_iso3' => 'LBY',
        'prohibited' => 1,
        'review' => 0,
      ),
      130 =>
      array(
        'code' => 'MA',
        'name' => 'Morocco',
        'code_iso3' => 'MAR',
        'prohibited' => 1,
        'review' => 0,
      ),
      131 =>
      array(
        'code' => 'MC',
        'name' => 'Monaco',
        'code_iso3' => 'MCO',
        'prohibited' => 1,
        'review' => 0,
      ),
      132 =>
      array(
        'code' => 'MD',
        'name' => 'Moldova, Republic of',
        'code_iso3' => 'MDA',
        'prohibited' => 0,
        'review' => 0,
      ),
      133 =>
      array(
        'code' => 'MG',
        'name' => 'Madagascar',
        'code_iso3' => 'MDG',
        'prohibited' => 1,
        'review' => 0,
      ),
      134 =>
      array(
        'code' => 'MH',
        'name' => 'Marshall Islands',
        'code_iso3' => 'MHL',
        'prohibited' => 0,
        'review' => 0,
      ),
      135 =>
      array(
        'code' => 'MK',
        'name' => 'Macedonia, Republic of',
        'code_iso3' => 'MKD',
        'prohibited' => 0,
        'review' => 0,
      ),
      136 =>
      array(
        'code' => 'ML',
        'name' => 'Mali',
        'code_iso3' => 'MLI',
        'prohibited' => 1,
        'review' => 0,
      ),
      137 =>
      array(
        'code' => 'MM',
        'name' => 'Myanmar',
        'code_iso3' => 'MMR',
        'prohibited' => 1,
        'review' => 0,
      ),
      138 =>
      array(
        'code' => 'MN',
        'name' => 'Mongolia',
        'code_iso3' => 'MNG',
        'prohibited' => 0,
        'review' => 0,
      ),
      139 =>
      array(
        'code' => 'MO',
        'name' => 'Macau',
        'code_iso3' => 'MAC',
        'prohibited' => 0,
        'review' => 0,
      ),
      140 =>
      array(
        'code' => 'MP',
        'name' => 'Northern Mariana Islands',
        'code_iso3' => 'MNP',
        'prohibited' => 1,
        'review' => 0,
      ),
      141 =>
      array(
        'code' => 'MQ',
        'name' => 'Martinique',
        'code_iso3' => 'MTQ',
        'prohibited' => 0,
        'review' => 0,
      ),
      142 =>
      array(
        'code' => 'MR',
        'name' => 'Mauritania',
        'code_iso3' => 'MRT',
        'prohibited' => 1,
        'review' => 0,
      ),
      143 =>
      array(
        'code' => 'MS',
        'name' => 'Montserrat',
        'code_iso3' => 'MSR',
        'prohibited' => 0,
        'review' => 0,
      ),
      144 =>
      array(
        'code' => 'MT',
        'name' => 'Malta',
        'code_iso3' => 'MLT',
        'prohibited' => 0,
        'review' => 0,
      ),
      145 =>
      array(
        'code' => 'MU',
        'name' => 'Mauritius',
        'code_iso3' => 'MUS',
        'prohibited' => 0,
        'review' => 0,
      ),
      146 =>
      array(
        'code' => 'MV',
        'name' => 'Maldives',
        'code_iso3' => 'MDV',
        'prohibited' => 0,
        'review' => 0,
      ),
      147 =>
      array(
        'code' => 'MW',
        'name' => 'Malawi',
        'code_iso3' => 'MWI',
        'prohibited' => 0,
        'review' => 0,
      ),
      148 =>
      array(
        'code' => 'MX',
        'name' => 'Mexico',
        'code_iso3' => 'MEX',
        'prohibited' => 0,
        'review' => 0,
      ),
      149 =>
      array(
        'code' => 'MY',
        'name' => 'Malaysia',
        'code_iso3' => 'MYS',
        'prohibited' => 0,
        'review' => 0,
      ),
      150 =>
      array(
        'code' => 'MZ',
        'name' => 'Mozambique',
        'code_iso3' => 'MOZ',
        'prohibited' => 1,
        'review' => 0,
      ),
      151 =>
      array(
        'code' => 'NA',
        'name' => 'Namibia',
        'code_iso3' => 'NAM',
        'prohibited' => 0,
        'review' => 0,
      ),
      152 =>
      array(
        'code' => 'NC',
        'name' => 'New Caledonia',
        'code_iso3' => 'NCL',
        'prohibited' => 0,
        'review' => 0,
      ),
      153 =>
      array(
        'code' => 'NE',
        'name' => 'Niger',
        'code_iso3' => 'NER',
        'prohibited' => 1,
        'review' => 0,
      ),
      154 =>
      array(
        'code' => 'NF',
        'name' => 'Norfolk Island',
        'code_iso3' => 'NFK',
        'prohibited' => 1,
        'review' => 0,
      ),
      155 =>
      array(
        'code' => 'NG',
        'name' => 'Nigeria',
        'code_iso3' => 'NGA',
        'prohibited' => 1,
        'review' => 0,
      ),
      156 =>
      array(
        'code' => 'NI',
        'name' => 'Nicaragua',
        'code_iso3' => 'NIC',
        'prohibited' => 1,
        'review' => 0,
      ),
      157 =>
      array(
        'code' => 'NL',
        'name' => 'Netherlands',
        'code_iso3' => 'NLD',
        'prohibited' => 0,
        'review' => 0,
      ),
      158 =>
      array(
        'code' => 'NO',
        'name' => 'Norway',
        'code_iso3' => 'NOR',
        'prohibited' => 0,
        'review' => 0,
      ),
      159 =>
      array(
        'code' => 'NP',
        'name' => 'Nepal',
        'code_iso3' => 'NPL',
        'prohibited' => 0,
        'review' => 0,
      ),
      160 =>
      array(
        'code' => 'NR',
        'name' => 'Nauru',
        'code_iso3' => 'NRU',
        'prohibited' => 0,
        'review' => 0,
      ),
      161 =>
      array(
        'code' => 'NU',
        'name' => 'Niue',
        'code_iso3' => 'NIU',
        'prohibited' => 0,
        'review' => 0,
      ),
      162 =>
      array(
        'code' => 'NZ',
        'name' => 'New Zealand',
        'code_iso3' => 'NZL',
        'prohibited' => 0,
        'review' => 0,
      ),
      163 =>
      array(
        'code' => 'OM',
        'name' => 'Oman',
        'code_iso3' => 'OMN',
        'prohibited' => 0,
        'review' => 0,
      ),
      164 =>
      array(
        'code' => 'PA',
        'name' => 'Panama',
        'code_iso3' => 'PAN',
        'prohibited' => 0,
        'review' => 0,
      ),
      165 =>
      array(
        'code' => 'PE',
        'name' => 'Peru',
        'code_iso3' => 'PER',
        'prohibited' => 0,
        'review' => 0,
      ),
      166 =>
      array(
        'code' => 'PF',
        'name' => 'French Polynesia',
        'code_iso3' => 'PYF',
        'prohibited' => 1,
        'review' => 0,
      ),
      167 =>
      array(
        'code' => 'PG',
        'name' => 'Papua New Guinea',
        'code_iso3' => 'PNG',
        'prohibited' => 1,
        'review' => 0,
      ),
      168 =>
      array(
        'code' => 'PH',
        'name' => 'Philippines',
        'code_iso3' => 'PHL',
        'prohibited' => 0,
        'review' => 0,
      ),
      169 =>
      array(
        'code' => 'PK',
        'name' => 'Pakistan',
        'code_iso3' => 'PAK',
        'prohibited' => 1,
        'review' => 0,
      ),
      170 =>
      array(
        'code' => 'PL',
        'name' => 'Poland',
        'code_iso3' => 'POL',
        'prohibited' => 0,
        'review' => 0,
      ),
      171 =>
      array(
        'code' => 'PM',
        'name' => 'St. Pierre and Miquelon',
        'code_iso3' => 'SPM',
        'prohibited' => 1,
        'review' => 0,
      ),
      172 =>
      array(
        'code' => 'PN',
        'name' => 'Pitcairn',
        'code_iso3' => 'PCN',
        'prohibited' => 1,
        'review' => 0,
      ),
      173 =>
      array(
        'code' => 'PR',
        'name' => 'Puerto Rico',
        'code_iso3' => 'PRI',
        'prohibited' => 0,
        'review' => 0,
      ),
      174 =>
      array(
        'code' => 'PT',
        'name' => 'Portugal',
        'code_iso3' => 'PRT',
        'prohibited' => 0,
        'review' => 0,
      ),
      175 =>
      array(
        'code' => 'PW',
        'name' => 'Palau',
        'code_iso3' => 'PLW',
        'prohibited' => 0,
        'review' => 0,
      ),
      176 =>
      array(
        'code' => 'PY',
        'name' => 'Paraguay',
        'code_iso3' => 'PRY',
        'prohibited' => 0,
        'review' => 0,
      ),
      177 =>
      array(
        'code' => 'QA',
        'name' => 'Qatar',
        'code_iso3' => 'QAT',
        'prohibited' => 0,
        'review' => 0,
      ),
      178 =>
      array(
        'code' => 'RE',
        'name' => 'Reunion',
        'code_iso3' => 'REU',
        'prohibited' => 0,
        'review' => 0,
      ),
      179 =>
      array(
        'code' => 'RO',
        'name' => 'Romania',
        'code_iso3' => 'ROM',
        'prohibited' => 0,
        'review' => 0,
      ),
      180 =>
      array(
        'code' => 'RU',
        'name' => 'Russian Federation',
        'code_iso3' => 'RUS',
        'prohibited' => 0,
        'review' => 0,
      ),
      181 =>
      array(
        'code' => 'RW',
        'name' => 'Rwanda',
        'code_iso3' => 'RWA',
        'prohibited' => 1,
        'review' => 0,
      ),
      182 =>
      array(
        'code' => 'SA',
        'name' => 'Saudi Arabia',
        'code_iso3' => 'SAU',
        'prohibited' => 0,
        'review' => 0,
      ),
      183 =>
      array(
        'code' => 'SB',
        'name' => 'Solomon Islands',
        'code_iso3' => 'SLB',
        'prohibited' => 1,
        'review' => 0,
      ),
      184 =>
      array(
        'code' => 'SC',
        'name' => 'Seychelles',
        'code_iso3' => 'SYC',
        'prohibited' => 0,
        'review' => 0,
      ),
      185 =>
      array(
        'code' => 'SD',
        'name' => 'Sudan',
        'code_iso3' => 'SDN',
        'prohibited' => 1,
        'review' => 0,
      ),
      186 =>
      array(
        'code' => 'SE',
        'name' => 'Sweden',
        'code_iso3' => 'SWE',
        'prohibited' => 0,
        'review' => 0,
      ),
      187 =>
      array(
        'code' => 'SG',
        'name' => 'Singapore',
        'code_iso3' => 'SGP',
        'prohibited' => 0,
        'review' => 0,
      ),
      188 =>
      array(
        'code' => 'SH',
        'name' => 'St. Helena',
        'code_iso3' => 'SHN',
        'prohibited' => 1,
        'review' => 0,
      ),
      189 =>
      array(
        'code' => 'SI',
        'name' => 'Slovenia',
        'code_iso3' => 'SVN',
        'prohibited' => 0,
        'review' => 0,
      ),
      190 =>
      array(
        'code' => 'SJ',
        'name' => 'Svalbard and Jan Mayen Islands',
        'code_iso3' => 'SJM',
        'prohibited' => 1,
        'review' => 0,
      ),
      191 =>
      array(
        'code' => 'SK',
        'name' => 'Slovakia',
        'code_iso3' => 'SVK',
        'prohibited' => 0,
        'review' => 0,
      ),
      192 =>
      array(
        'code' => 'SL',
        'name' => 'Sierra Leone',
        'code_iso3' => 'SLE',
        'prohibited' => 1,
        'review' => 0,
      ),
      193 =>
      array(
        'code' => 'SM',
        'name' => 'San Marino',
        'code_iso3' => 'SMR',
        'prohibited' => 0,
        'review' => 0,
      ),
      194 =>
      array(
        'code' => 'SN',
        'name' => 'Senegal',
        'code_iso3' => 'SEN',
        'prohibited' => 1,
        'review' => 0,
      ),
      195 =>
      array(
        'code' => 'SO',
        'name' => 'Somalia',
        'code_iso3' => 'SOM',
        'prohibited' => 1,
        'review' => 0,
      ),
      196 =>
      array(
        'code' => 'SR',
        'name' => 'Suriname',
        'code_iso3' => 'SUR',
        'prohibited' => 0,
        'review' => 0,
      ),
      197 =>
      array(
        'code' => 'ST',
        'name' => 'Sao Tome and Principe',
        'code_iso3' => 'STP',
        'prohibited' => 0,
        'review' => 0,
      ),
      198 =>
      array(
        'code' => 'SV',
        'name' => 'El Salvador',
        'code_iso3' => 'SLV',
        'prohibited' => 1,
        'review' => 0,
      ),
      199 =>
      array(
        'code' => 'SY',
        'name' => 'Syrian Arab Republic',
        'code_iso3' => 'SYR',
        'prohibited' => 1,
        'review' => 0,
      ),
      200 =>
      array(
        'code' => 'SZ',
        'name' => 'Swaziland',
        'code_iso3' => 'SWZ',
        'prohibited' => 0,
        'review' => 0,
      ),
      201 =>
      array(
        'code' => 'TC',
        'name' => 'Turks and Caicos Islands',
        'code_iso3' => 'TCA',
        'prohibited' => 0,
        'review' => 0,
      ),
      202 =>
      array(
        'code' => 'TD',
        'name' => 'Chad',
        'code_iso3' => 'TCD',
        'prohibited' => 1,
        'review' => 0,
      ),
      203 =>
      array(
        'code' => 'TF',
        'name' => 'French Southern Territories',
        'code_iso3' => 'ATF',
        'prohibited' => 1,
        'review' => 0,
      ),
      204 =>
      array(
        'code' => 'TG',
        'name' => 'Togo',
        'code_iso3' => 'TGO',
        'prohibited' => 1,
        'review' => 0,
      ),
      205 =>
      array(
        'code' => 'TH',
        'name' => 'Thailand',
        'code_iso3' => 'THA',
        'prohibited' => 0,
        'review' => 0,
      ),
      206 =>
      array(
        'code' => 'TJ',
        'name' => 'Tajikistan',
        'code_iso3' => 'TJK',
        'prohibited' => 1,
        'review' => 0,
      ),
      207 =>
      array(
        'code' => 'TK',
        'name' => 'Tokelau',
        'code_iso3' => 'TKL',
        'prohibited' => 1,
        'review' => 0,
      ),
      208 =>
      array(
        'code' => 'TM',
        'name' => 'Turkmenistan',
        'code_iso3' => 'TKM',
        'prohibited' => 1,
        'review' => 0,
      ),
      209 =>
      array(
        'code' => 'TN',
        'name' => 'Tunisia',
        'code_iso3' => 'TUN',
        'prohibited' => 1,
        'review' => 0,
      ),
      210 =>
      array(
        'code' => 'TO',
        'name' => 'Tonga',
        'code_iso3' => 'TON',
        'prohibited' => 0,
        'review' => 0,
      ),
      211 =>
      array(
        'code' => 'TP',
        'name' => 'East Timor',
        'code_iso3' => 'TMP',
        'prohibited' => 0,
        'review' => 0,
      ),
      212 =>
      array(
        'code' => 'TR',
        'name' => 'Turkey',
        'code_iso3' => 'TUR',
        'prohibited' => 0,
        'review' => 0,
      ),
      213 =>
      array(
        'code' => 'TT',
        'name' => 'Trinidad and Tobago',
        'code_iso3' => 'TTO',
        'prohibited' => 0,
        'review' => 0,
      ),
      214 =>
      array(
        'code' => 'TV',
        'name' => 'Tuvalu',
        'code_iso3' => 'TUV',
        'prohibited' => 0,
        'review' => 0,
      ),
      215 =>
      array(
        'code' => 'TW',
        'name' => 'Taiwan',
        'code_iso3' => 'TWN',
        'prohibited' => 0,
        'review' => 0,
      ),
      216 =>
      array(
        'code' => 'TZ',
        'name' => 'Tanzania, United Republic of',
        'code_iso3' => 'TZA',
        'prohibited' => 1,
        'review' => 0,
      ),
      217 =>
      array(
        'code' => 'UA',
        'name' => 'Ukraine',
        'code_iso3' => 'UKR',
        'prohibited' => 0,
        'review' => 0,
      ),
      218 =>
      array(
        'code' => 'UG',
        'name' => 'Uganda',
        'code_iso3' => 'UGA',
        'prohibited' => 1,
        'review' => 0,
      ),
      219 =>
      array(
        'code' => 'UM',
        'name' => 'United States Minor Outlying Islands',
        'code_iso3' => 'UMI',
        'prohibited' => 1,
        'review' => 0,
      ),
      220 =>
      array(
        'code' => 'US',
        'name' => 'United States',
        'code_iso3' => 'USA',
        'prohibited' => 0,
        'review' => 0,
      ),
      221 =>
      array(
        'code' => 'UY',
        'name' => 'Uruguay',
        'code_iso3' => 'URY',
        'prohibited' => 0,
        'review' => 0,
      ),
      222 =>
      array(
        'code' => 'UZ',
        'name' => 'Uzbekistan',
        'code_iso3' => 'UZB',
        'prohibited' => 1,
        'review' => 0,
      ),
      223 =>
      array(
        'code' => 'VA',
        'name' => 'Vatican City State (Holy See)',
        'code_iso3' => 'VAT',
        'prohibited' => 1,
        'review' => 0,
      ),
      224 =>
      array(
        'code' => 'VC',
        'name' => 'Saint Vincent',
        'code_iso3' => 'VCT',
        'prohibited' => 0,
        'review' => 0,
      ),
      225 =>
      array(
        'code' => 'VE',
        'name' => 'Venezuela',
        'code_iso3' => 'VEN',
        'prohibited' => 0,
        'review' => 0,
      ),
      226 =>
      array(
        'code' => 'VG',
        'name' => 'Virgin Islands (British)',
        'code_iso3' => 'VGB',
        'prohibited' => 0,
        'review' => 0,
      ),
      227 =>
      array(
        'code' => 'VI',
        'name' => 'Virgin Islands (U.S.)',
        'code_iso3' => 'VIR',
        'prohibited' => 0,
        'review' => 0,
      ),
      228 =>
      array(
        'code' => 'VN',
        'name' => 'Vietnam',
        'code_iso3' => 'VNM',
        'prohibited' => 0,
        'review' => 1,
      ),
      229 =>
      array(
        'code' => 'VU',
        'name' => 'Vanuatu',
        'code_iso3' => 'VUT',
        'prohibited' => 0,
        'review' => 0,
      ),
      230 =>
      array(
        'code' => 'WF',
        'name' => 'Wallis and Futuna Islands',
        'code_iso3' => 'WLF',
        'prohibited' => 1,
        'review' => 0,
      ),
      231 =>
      array(
        'code' => 'WS',
        'name' => 'Samoa',
        'code_iso3' => 'WSM',
        'prohibited' => 0,
        'review' => 0,
      ),
      232 =>
      array(
        'code' => 'YE',
        'name' => 'Yemen',
        'code_iso3' => 'YEM',
        'prohibited' => 1,
        'review' => 0,
      ),
      233 =>
      array(
        'code' => 'YT',
        'name' => 'Mayotte',
        'code_iso3' => 'MYT',
        'prohibited' => 0,
        'review' => 0,
      ),
      234 =>
      array(
        'code' => 'YU',
        'name' => 'Yugoslavia',
        'code_iso3' => 'YUG',
        'prohibited' => 1,
        'review' => 0,
      ),
      235 =>
      array(
        'code' => 'ZA',
        'name' => 'South Africa',
        'code_iso3' => 'ZAF',
        'prohibited' => 0,
        'review' => 0,
      ),
      236 =>
      array(
        'code' => 'ZM',
        'name' => 'Zambia',
        'code_iso3' => 'ZMB',
        'prohibited' => 0,
        'review' => 0,
      ),
      237 =>
      array(
        'code' => 'ZR',
        'name' => 'Zaire',
        'code_iso3' => 'ZAR',
        'prohibited' => 1,
        'review' => 0,
      ),
      238 =>
      array(
        'code' => 'ZW',
        'name' => 'Zimbabwe',
        'code_iso3' => 'ZWE',
        'prohibited' => 1,
        'review' => 0,
      ),
    ));
  }

}
