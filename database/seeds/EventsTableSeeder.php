<?php

use Illuminate\Database\Seeder;
use App\KhmerCalendar;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $events = [
        [
          'en_name' => 'International New Year Day',
          'kh_name' => 'ទិវា​ចូល​ឆ្នាំ​សកល',
          'month' => 1,
          'day' => 1,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Victory over Genocide Day',
          'kh_name' => 'ទិវា​ជ័យជំនះ​លើ​របប​ប្រល័យ​ពូជ​សាសន៍ា',
          'month' => 1,
          'day' => 7,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Valentine Day',
          'kh_name' => 'បុណ សង្សា',
          'month' => 2,
          'day' => 14,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'International Women Day',
          'kh_name' => 'ទិវា​នារី​អន្តរជាតិ',
          'month' => 3,
          'day' => 8,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Khmer New Year',
          'kh_name' => 'ពិធី​បុណ្យ​ចូល​ឆ្នាំ​ថ្មី ប្រពៃណី​ជាតិ',
          'month' => 4,
          'day' => 14,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Khmer New Year',
          'kh_name' => 'ពិធី​បុណ្យ​ចូល​ឆ្នាំ​ថ្មី ប្រពៃណី​ជាតិ',
          'month' => 4,
          'day' => 15,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Khmer New Year',
          'kh_name' => 'ពិធី​បុណ្យ​ចូល​ឆ្នាំ​ថ្មី ប្រពៃណី​ជាតិ',
          'month' => 4,
          'day' => 16,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'International Labor Day',
          'kh_name' => 'ទិវា​ពលកម្ម​អន្តរជាតិ',
          'month' => 5,
          'day' => 1,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'King\'s Birthday, Norodom Sihamoni',
          'kh_name' => 'ព្រះ​រាជ​ពិធី​បុណ្យ​ចម្រើន​ព្រះ​ជន្ម ព្រះ​ករុណា​ព្រះ​បាទ​សម្តេច​ព្រះ​បរម​នាថ នរោត្តម សីហមុនី ព្រះ​មហាក្សត្រ​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា',
          'month' => 5,
          'day' => 13,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'King\'s Birthday, Norodom Sihamoni',
          'kh_name' => 'ព្រះ​រាជ​ពិធី​បុណ្យ​ចម្រើន​ព្រះ​ជន្ម ព្រះ​ករុណា​ព្រះ​បាទ​សម្តេច​ព្រះ​បរម​នាថ នរោត្តម សីហមុនី ព្រះ​មហាក្សត្រ​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា',
          'month' => 5,
          'day' => 14,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'King\'s Birthday, Norodom Sihamoni',
          'kh_name' => 'ព្រះ​រាជ​ពិធី​បុណ្យ​ចម្រើន​ព្រះ​ជន្ម ព្រះ​ករុណា​ព្រះ​បាទ​សម្តេច​ព្រះ​បរម​នាថ នរោត្តម សីហមុនី ព្រះ​មហាក្សត្រ​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា',
          'month' => 5,
          'day' => 15,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'International Children Day',
          'kh_name' => 'ទិវា​កុមារ​អន្តរ​ជាតិ',
          'month' => 6,
          'day' => 1,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'King\'s Mother Birthday, Norodom Monineath Sihanouk',
          'kh_name' => 'ព្រះ​រាជ​ពិធី​បុណ្យ​ចម្រើន​ព្រះ​ជន្ម សម្តេច​ព្រះ​មហាក្សត្រី នរោត្តម មុនិនាថ សីហនុ',
          'month' => 6,
          'day' => 18,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Constitutional Day',
          'kh_name' => 'ទិវា​ប្រកាស​រដ្ឋ​ធម្មនុញ្ញ',
          'month' => 9,
          'day' => 24,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Commemoration Day of King\'s Father, Norodom Sihanouk',
          'kh_name' => 'ទិវា​ប្រារព្ធ​ពិធី​គោរព​ព្រះវិញ្ញាណក្ខន្ធ ព្រះករុណា​ព្រះបាទ​សម្តេច​ព្រះ នរោត្តម សីហនុ ព្រះមហាវីរក្សត្រ ព្រះ​វររាជ​បិតា​ឯករាជ្យ បូរណភាព​ទឹកដី និង​ឯកភាព​ជាតិ​ខ្មែរ ​«ព្រះបរមរតនកោដ្ឋ»',
          'month' => 10,
          'day' => 15,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Paris Peace Agreements Day',
          'kh_name' => 'ទិវារំលឹក​ខួប​នៃ​កិច្ចព្រមព្រៀង​សន្តិភាព​ទីក្រុង​ប៉ារីស',
          'month' => 10,
          'day' => 23,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'King\'s Coronation Day, Norodom Sihamoni',
          'kh_name' => 'ព្រះ​រាជ​ពិធី​គ្រង​ព្រះ​បរម​រាជ​សម្បត្តិ​របស់​ ព្រះ​ករុណា​ព្រះ​បាទ​សម្តេច​ព្រះ​បរមនាថ នរោត្តម សីហមុនី ព្រះ​មហាក្សត្រ​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា',
          'month' => 10,
          'day' => 29,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Independent Day',
          'kh_name' => 'ពិធី​បុណ្យ​ឯករាជ្យ​ជាតិ',
          'month' => 11,
          'day' => 9,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Human Right Day',
          'kh_name' => 'ទិវា​សិទ្ធិ​មនុស្ស​អន្តរជាតិ',
          'month' => 12,
          'day' => 10,
          'is_lunar' => false,
        ],
        [
          'en_name' => 'Mea BoChea',
          'kh_name' => 'ពិធី​បុណ្យ​មាឃ​បូជា',
          'month' => 3,
          'day' => 15,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Pisa BoChea',
          'kh_name' => 'ពិធី​បុណ្យ​វិសាខ​បូជា',
          'month' => 6,
          'day' => 15,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Jrot Preash Negol',
          'kh_name' => 'ព្រះ​រាជ​ពិធី​ច្រត់​ព្រះ​នង្គ័ល',
          'month' => 6,
          'day' => 19,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 1',
          'kh_name' => 'បិណ្ឌ ១',
          'month' => 10,
          'day' => 16,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 2',
          'kh_name' => 'បិណ្ឌ ២',
          'month' => 10,
          'day' => 17,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 3',
          'kh_name' => 'បិណ្ឌ ៣',
          'month' => 10,
          'day' => 18,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 4',
          'kh_name' => 'បិណ្ឌ ៤',
          'month' => 10,
          'day' => 19,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 5',
          'kh_name' => 'បិណ្ឌ ៥',
          'month' => 10,
          'day' => 20,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 6',
          'kh_name' => 'បិណ្ឌ ៦',
          'month' => 10,
          'day' => 21,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 7',
          'kh_name' => 'បិណ្ឌ ៧',
          'month' => 10,
          'day' => 22,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 8',
          'kh_name' => 'បិណ្ឌ ៨',
          'month' => 10,
          'day' => 23,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 9',
          'kh_name' => 'បិណ្ឌ ៩',
          'month' => 10,
          'day' => 24,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 10',
          'kh_name' => 'បិណ្ឌ ១០',
          'month' => 10,
          'day' => 25,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 11',
          'kh_name' => 'បិណ្ឌ ១១',
          'month' => 10,
          'day' => 26,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 12',
          'kh_name' => 'បិណ្ឌ ១២',
          'month' => 10,
          'day' => 27,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 13',
          'kh_name' => 'បិណ្ឌ ១៣',
          'month' => 10,
          'day' => 28,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Ben 14',
          'kh_name' => 'បិណ្ឌ ១៤',
          'month' => 10,
          'day' => 29,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Pjom Ben',
          'kh_name' => 'ពិធី​បុណ្យ​ភ្ជុំ​បិណ្ឌ',
          'month' => 10,
          'day' => 30,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Pjom Ben',
          'kh_name' => 'ពិធី​បុណ្យ​ភ្ជុំ​បិណ្ឌ',
          'month' => 12,
          'day' => 14,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Pjom Ben',
          'kh_name' => 'ពិធី​បុណ្យ​ភ្ជុំ​បិណ្ឌ',
          'month' => 12,
          'day' => 15,
          'is_lunar' => true,
        ],
        [
          'en_name' => 'Pjom Ben',
          'kh_name' => 'ពិធី​បុណ្យ​ភ្ជុំ​បិណ្ឌ',
          'month' => 12,
          'day' => 16,
          'is_lunar' => true,
        ],
      ];


      App\Event::insert($events);

    }
}
