<?php

namespace App\Exports;

use App\Models\IPKLulusan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class IPKLulusanExport implements FromView, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data = IPKLulusan::with('ptUnit')->where('id_pt_unit', Auth::user()->id_pt_unit);
        return view('ipk_lulusan.table', compact('data'));
    }
}
