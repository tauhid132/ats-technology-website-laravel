<?php

namespace App\Imports;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\Link;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class LinksImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $country = Country::select('id')->where('country_name','=',$row['Country'])->first();
        $categories_name = $row['Category'];
        $categories_name_final = explode(',',$categories_name);
        $cats = array();
        foreach($categories_name_final as $cat){
            $cat_id = Category::where('name', $cat)->first();
            array_push($cats, $cat_id->id);
        }
        $link =  new Link([
            'buy_price' => $row['Buy'],
            'sell_price' => $row['Sell'],
            'media' => $row['Media'],
            'language' => $row['Language'],
            'country_id' => $country->id ,
            'article_words' => $row['ArticleWords'],
            'ahrefs_dr' => $row['ahrefs_dr'],
            'semrush_as' => $row['semrush_as'],
            'moz_da' => $row['moz_da'],
            'moz_spam' => $row['moz_spam'],
            'majestic_TF' => $row['majestic_TF'],
            'majestic_CF' => $row['majestic_CF'],
            'org_traffic' => $row['org_traffic'],
            'ref_domain' => $row['ref_domain'],
            'outgoing_domains' => $row['outgoing_domains'],
            'niches_casino' => $row['niches_casino'],
            'niches_loan' => $row['niches_loan'],
            'niches_erotic' => $row['niches_erotic'],
            'niches_cbd' => $row['niches_cbd'],
            'niches_crypto' => $row['niches_crypto'],
            'domain_age' => Carbon::parse($row['domain_age'])->format('Y-m-d'),
            'pub_sample' => $row['pub_sample'],
            'ext_note' => $row['ext_note'],
            'added_by' => Auth::user()->id,
        ]);
        $link->save();

        //dd($link->id);
        $link->categories()->attach($cats);
        return $link;
        //dd($link);
    }
}
