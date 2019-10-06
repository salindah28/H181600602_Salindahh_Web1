<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
    
    $listPengumuman=Pengumuman::all();

    return view ('pengumuman.index', compact('listPengumuman'));
  

    }
    public function show($id){
  
    $Artikel=Pengumuman::find($id);


    return view('pengumuman.show',compact ('Pengumuman'));
    }

    public function create (){
        $KategoriPengumuman=KategoriPengumuman::pluck('nama','id');

    return view('artikel.create',compact('KategoriPengumuman'));

    }
    public function store(Request $request){
        $input= $request->all();

        Artikel::create($input);
     return redirect(route('pengumuman.index'));
    }



} 