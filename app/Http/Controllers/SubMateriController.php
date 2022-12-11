<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\SubMateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubMateriController extends Controller
{
    public function index()
    {
        $data = SubMateri::all();
        return view('Admin.sub-materi', compact('data'));
    }

    public function create()
    {
        $data = materi::all();
        return view('Admin.CRUD.Sub.create', compact('data'));
    }

    public function store(Request $request)
    {
        $materiData['kelas'] = $request->has('kelas') ? $request->kelas : 'null';
        $materiData['link_youtube'] = $request->has('link_youtube') ? $request->link_youtube : 'null';
        $materiData['paragraf_1'] = $request->has('paragraf_1') ? $request->paragraf_1 : 'null';
        $materiData['paragraf_2'] = $request->has('paragraf_2') ? $request->paragraf_2 : 'null';
        $materiData['paragraf_3'] = $request->has('paragraf_3') ? $request->paragraf_3 : 'null';
        $materiData['paragraf_4'] = $request->has('paragraf_4') ? $request->paragraf_4 : 'null';
        $materiData['paragraf_5'] = $request->has('paragraf_5') ? $request->paragraf_5 : 'null';
        $materiData['Nama_sub_materi'] = $request->has('Nama_sub_materi') ? $request->Nama_sub_materi : 'null';
        $materiData['deskripsi'] = $request->has('deskripsi') ? $request->deskripsi : 'null';
        $materiData['materi_id'] = $request->has('parent') ? $request->parent : 'null';


        // untuk pending CRUD sampai commit
        DB::beginTransaction();
        try {
            SubMateri::create($materiData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

        return redirect('manage-materi');
    }
}