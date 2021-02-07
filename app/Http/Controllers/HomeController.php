<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use App\Exports\ExportPemasukan;
// use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
        /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $profitthisyears = DB::table('pemasukans')
                                    ->select(DB::raw('SUM(profit) as profit'))
                                    ->whereRaw('YEAR(tanggal)=YEAR(NOW())')
                                    ->get();
        $profitthismonth = DB::table('pemasukans')
                                    ->select(DB::raw('SUM(profit) as profit'))
                                    ->whereRaw('MONTH(tanggal)=MONTH(NOW())')
                                    ->whereRaw('YEAR(tanggal)=YEAR(NOW())')
                                    ->get();
        $totalprofit = DB::table('pemasukans')->select(DB::raw('sum(profit) as profit'))->get();

        $pemasukans = Pemasukan::latest()->paginate(10);
        return view('home', compact('pemasukans'), [ 'totalprofit' => $totalprofit, 
                                                                'profitthisyears' => $profitthisyears, 
                                                                'profitthismonth' => $profitthismonth]);
    }
}