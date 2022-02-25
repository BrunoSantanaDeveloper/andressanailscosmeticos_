<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\ConstantBanner;
class ConstantBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConstantBanner::where('id', '>', '0')->delete();
        ConstantBanner::insertOrIgnore([
            'title'=>'banner1',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'11',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner1',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'11',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner1',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'11',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner1',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'11',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner1',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'11',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner1',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'11',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'23',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'22',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'8',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'8',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'23',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'22',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'8',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner2',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'8',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'5',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'19',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'24',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner5',
            'url'=>'/shop',
            'banner_number'=>'5',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'19',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'25',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'26',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'25',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner7',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'26',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner9',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'16',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner9',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'16',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner9',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'16',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner9',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'16',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'25',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'28',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'25',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner10',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'28',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'29',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'5',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'29',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner13',
            'url'=>'/shop',
            'banner_number'=>'5',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'10',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner16',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'30',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner16',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'30',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner16',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'22',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner16',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'30',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner16',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'30',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner16',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'22',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'15',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'7',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'15',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'5',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'6',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'7',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'15',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'3',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'7',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'4',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'15',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'5',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'27',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'banner18',
            'url'=>'/shop',
            'banner_number'=>'6',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'7',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'rightsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'rightsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'rightsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'rightsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'leftsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'leftsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'1',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'leftsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'1',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);	
         ConstantBanner::insertOrIgnore([
            'title'=>'leftsliderbanner',
            'url'=>'/shop',
            'banner_number'=>'2',
            'status'=>'active',
            'language_id'=>'2',
            'gallary_id'=>'31',
            'created_by'=>'1'
         ]);
        
    }   
}
