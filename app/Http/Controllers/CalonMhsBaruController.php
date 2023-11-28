<?php

namespace App\Http\Controllers;

use App\Exports\MahasiswaExport;
use App\Models\Mhsbaru;
use App\Models\TahunAkademik;
use App\Models\PTUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class CalonMhsBaruController extends Controller

{

    public function index($id_pt_unit='')
    {
        $tahunAkademiks = TahunAkademik::all();
        if($id_pt_unit){
            $data = MhsBaru::where('id_pt_unit', $id_pt_unit)->get();
            return view('jurusan.page.mhsbaru.index', compact('data','tahunAkademiks'));

        }else{
            $data = Mhsbaru::with('tahunAkademik')->get();
    
            return view('jurusan.page.mhsbaru.index', compact('data','tahunAkademiks'));

        }
        
    }
    public function getDataByProdi($id_pt_unit)
    {
        $data = MhsBaru::where('id_pt_unit', $id_pt_unit)->get();
        $tahunAkademiks = TahunAkademik::all();

        // return response()->json($data);
        return view('jurusan.page.mhsbaru.index', compact('data','tahunAkademiks'));
    }
    
    public function kaprodiIndex()
    {
        $data = Mhsbaru::with('tahunAkademik')->get();
        $tahunAkademiks = TahunAkademik::all();

        return view('kaprodi.page.mhsbaru.index', compact('data','tahunAkademiks'));
    }

    public function admprodiIndex()
    {
        $data = Mhsbaru::with('tahunAkademik')->get();
        $tahunAkademiks = TahunAkademik::all();
        return view('admprodi.page.mhsbaru.index', compact('data', 'tahunAkademiks'));
    }
    public function create()
    {
        $tahunAkademiks = TahunAkademik::all();
        return view(
            'admprodi.page.mhsbaru.form',
            [
                'url' => 'simpan-cmb',
                'tahunAkademiks' => $tahunAkademiks,
             
            ]
        );
    } 
    public function store(Request $request)
    {
        
        $user = Auth::user();
        $input = Mhsbaru::insert([
            'id' => $request->id,
            'thn_akademik' => $request->tahun_akademik,
            'id_pt_unit' => $user->id_pt_unit,
            'kode_pt_unit' => $user->kode_pt_unit,
            // 'id_pt_unit' => Auth::user()->id_pt_unit,
            'daya_tampung' => $request->daya_tampung,
            'pendaftar' => $request->pendaftar,
            'lulus_seleksi' => $request->lulus_seleksi,
            'maba_reguler' => $request->maba_reguler,
            'maba_transfer' => $request->maba_transfer,
            'mhs_aktif_reguler' => $request->mhs_aktif_reguler,
            'mhs_aktif_transfer' => $request->mhs_aktif_transfer
        ]);
        if ($input) {
            return redirect('mhs-baru')->with('pesan', 'Data berhasil disimpan');
        } else {
            echo "<script>
            alert('Data gagal diinput, masukkan kebali data dengan benar');
            window.location = '/admprodi.page.mhsbaru.index';
            </script>";
        }
    }
    public function edit($id)
    {
        $data['editData'] = Mhsbaru::find($id);
        return view('admprodi.page.mhsbaru.form_edit', $data);
    }
    public function update(Request $request, $id)
    {
        $mhs = Mhsbaru::find($id);
        $update = $mhs->update([
            'thn_akademik' => $request->thn_akademik,
            'id_pt_unit' => Auth::user()->id_pt_unit,
            'kode_pt_unit' => Auth::user()->kode_pt_unit,
            'daya_tampung' => $request->daya_tampung,
            'pendaftar' => $request->pendaftar,
            'lulus_seleksi' => $request->lulus_seleksi,
            'maba_reguler' => $request->maba_reguler,
            'maba_transfer' => $request->maba_transfer,
            'mhs_aktif_reguler' => $request->mhs_aktif_reguler,
            'mhs_aktif_transfer' => $request->mhs_aktif_transfer,
        ]);
        if ($update) {
            return redirect('mhs-baru')->with('pesan', 'Data berhasil disimpan');
        } else {
            echo "<script>
                alert('Data gagal diinput, masukkan kembali data dengan benar');
                window.location = '/admin.page.mhsbaru.index';
                </script>";
        }
    }
    public function destroy($id)
    {
        $mhsbaru = Mhsbaru::findOrFail($id); // Ganti dengan model dan nama tabel yang sesuai
        $mhsbaru->delete();

        return redirect()->route('mhs-baru')->with('success', 'Data Calon Mahasiswa Baru berhasil dihapus');
    }
    public function show($id)
    {
        $prodi = Mhsbaru::findOrFail($id);

        return view('jurusan.page.mhsbaru.index', compact('prodi'));
    }
    // public function download(){

    // }

    public function download()
    {
        return Excel::download(new MahasiswaExport, 'Mahasiswa Baru.xlsx');
    }
}
