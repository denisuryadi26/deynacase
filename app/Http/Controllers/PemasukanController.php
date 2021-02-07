<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Exports\ExportPemasukan;
use Maatwebsite\Excel\Facades\Excel;

class PemasukanController extends Controller
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
        return view('pemasukan.index', compact('pemasukans'), [ 'totalprofit' => $totalprofit, 
                                                                'profitthisyears' => $profitthisyears, 
                                                                'profitthismonth' => $profitthismonth]);
    }

    /**
     * Export data ke Excel.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return excel
     */
    public function export_excel()
	{
        return Excel::download(new ExportPemasukan, 'pemasukan.xlsx');
        // return (new ExportPemasukan())->download('pemasukan.xlsx');
    }
    
    /**
    * create
    *
    * @return void
    */
    public function create()
    {
        return view('pemasukan.create');
    }


    /**
    * store
    *
    * @param  mixed $request
    * @return void
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'     => 'required',
            'sumber'     => 'required',
            'produk'   => 'required',
            'omset'   => 'required',
            'modal'   => 'required',
            'profit'   => 'required'
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/blogs', $image->hashName());

        $pemasukan = Pemasukan::create([
            'tanggal'     => $request->tanggal,
            'sumber'     => $request->sumber,
            'produk'   => $request->produk,
            'omset'   => $request->omset,
            'modal'   => $request->modal,
            'profit'   => $request->profit
        ]);

        if($pemasukan){
            //redirect dengan pesan sukses
            return redirect()->route('pemasukan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pemasukan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
    * edit
    *
    * @param  mixed $pemasukan
    * @return void
    */
    public function edit(Pemasukan $pemasukan)
    {
        return view('pemasukan.edit', compact('pemasukan'));
    }


    /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $pemasukan
    * @return void
    */
    public function update(Request $request, Pemasukan $pemasukan)
    {
        $this->validate($request, [
            'tanggal'     => 'required',
            'sumber'     => 'required',
            'produk'   => 'required',
            'omset'   => 'required',
            'modal'   => 'required',
            'profit'   => 'required'
        ]);

        //get data Pemasukan by ID
        $pemasukan = Pemasukan::findOrFail($pemasukan->id);

        

        $pemasukan->update([
            'tanggal'     => $request->tanggal,
            'sumber'     => $request->sumber,
            'produk'   => $request->produk,
            'omset'   => $request->omset,
            'modal'   => $request->modal,
            'profit'   => $request->profit
        ]);

        if($pemasukan){
            //redirect dengan pesan sukses
            return redirect()->route('pemasukan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pemasukan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
    * destroy
    *
    * @param  mixed $id
    * @return void
    */
    public function destroy($id)
    {
    $pemasukan = Pemasukan::findOrFail($id);
    Storage::disk('local')->delete('public/pemasukans/'.$pemasukan->image);
    $pemasukan->delete();

    if($pemasukan){
        //redirect dengan pesan sukses
        return redirect()->route('pemasukan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('pemasukan.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
    }
}
