<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\materi;
use App\Models\MateriKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    public function create()
    {
        $data = Category::all();
        return view('Admin.CRUD.Materi.create', compact('data'));
    }

    public function store(Request $request)
    {
        $materiData = $request->except('kategori');
        $materiData['kelas'] = $request->has('kelas') ? $request->kelas : 'null';
        $materiData['link_youtube'] = $request->has('link_youtube') ? $request->link_youtube : 'null';
        $materiData['paragraf_1'] = $request->has('paragraf_1') ? $request->paragraf_1 : 'null';
        $materiData['paragraf_2'] = $request->has('paragraf_2') ? $request->paragraf_2 : 'null';
        $materiData['paragraf_3'] = $request->has('paragraf_3') ? $request->paragraf_3 : 'null';
        $materiData['paragraf_4'] = $request->has('paragraf_4') ? $request->paragraf_4 : 'null';
        $materiData['paragraf_5'] = $request->has('paragraf_5') ? $request->paragraf_5 : 'null';
        $materiData['Nama_materi'] = $request->has('Nama_materi') ? $request->Nama_materi : 'null';
        $materiData['deskripsi'] = $request->has('deskripsi') ? $request->deskripsi : 'null';
        $kategori = array();

        // untuk pending CRUD sampai commit
        DB::beginTransaction();
        try {
            $store = materi::create($materiData);
            if (!empty($request->kategori)) {
                if (is_object($store)) {
                    foreach ($request->kategori as $each) {
                        $temp = array(
                            'materi_id' => $store->id,
                            'kategori_id' => (int)$each
                        );
                        $kategori[] = $temp;
                    }
                    foreach ($kategori as $each) {
                        MateriKategori::create($each);
                    }
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

        return redirect('manage-materi');
    }

    public function edit($id)
    {
        $data = materi::find($id)->get();
        return view('Admin.CRUD.materi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
        $check = materi::findOrFail($id);
        if ($check) {
            $check->delete();
            return redirect('manage-materi');
        }
    }
}