<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CountryController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')
            ->where('name', 'Armenia')->get();
        $armenia = $countries[0];
        $artsakh = $armenia;
        
        $artsakh->name = 'Artsakh';
        unset($artsakh->id);
        $artsakh = json_decode(json_encode($artsakh),true);
        //  111 $artsakh = (array) $artsakh;
        //  222 $artsakh = [
        //     'name'=>'Artsakh',
        //     'code'=> $armenia->code,
        //     'region_code'=>$armenia->region_code,
        //     //.....
        // ];
        DB::table('countries')->updateOrInsert(['name'=>'Artsakh'],$artsakh);
    }
}

