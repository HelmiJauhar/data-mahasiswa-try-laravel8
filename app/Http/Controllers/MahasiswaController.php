<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $result = DB::select("SELECT * FROM mahasiswas");
        return view('home-mahasiswa',["mahasiswas"=>$result]);
    }
    public function insert()
    {
        $data = [
                    [
                        'nim' => '20001021',
                        'nama' => 'Helmi Jauhar Irsyad',
                        'tanggal_lahir' => '2002-06-07',
                        'jurusan' => 'Teknik Informatika',
                        'ipk' => 3.6,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'nim' => '20001022',
                        'nama' => 'Atmanur Makarym',
                        'tanggal_lahir' => '2000-07-06',
                        'jurusan' => 'Teknik Informatika',
                        'ipk' => 3.4,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'nim' => '20001023',
                        'nama' => 'Ahmad Fajrudin Syauqi',
                        'tanggal_lahir' => '2002-12-12',
                        'jurusan' => 'Teknik Informatika',
                        'ipk' => 3.5,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],                
                ];
        $result = DB::table('mahasiswas')->insert($data);
        $result = DB::select("SELECT * FROM mahasiswas");
        return view('home-mahasiswa',["mahasiswas"=>$result])->with('alert','primary');
    }
    public function delete()
    {
        $result = DB::delete("DELETE FROM mahasiswas");
        $result = DB::select("SELECT * FROM mahasiswas");
        return view('home-mahasiswa',["mahasiswas"=>$result])->with('alert','warning');
        
    }
    public function sortByNama()
    {
        $result = DB::table('mahasiswas')->orderBy('nama')->get();
        return view('home-mahasiswa',["mahasiswas"=>$result]);
    }
    public function sortByIpk()
    {
        $result = DB::table('mahasiswas')->orderBy('ipk')->get();
        return view('home-mahasiswa',["mahasiswas"=>$result]);
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $result = DB::table('mahasiswas')->where('nama','like','%'.$search.'%')->get();
        return view('home-mahasiswa',['mahasiswas'=>$result]);
    }
}
