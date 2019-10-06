<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //Elequent
        $listKategoriArtikel=KategoriArtikel::all();

        return view('kategori_artikel.index',compact('listKategoriArtikel'));
        //return view(view: 'kategori_artikel.index')->with('data',$listKategoriArtikel); 
    
    }
    public function show($id){
        //$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
        $kategoriartikel=kategoriartikel::find($id);

        return view('kategori_artikel.show',compact('kategoriartikel'));
    }

    public function create(){
        return view ('kategori_artikel.create');
    
    }
    
        public function store(Request $request){
            $input= $request->all();

           
            KategoriArtikel::create($input);
            return redirect(route('kategori_artikel.index'));

             
    }
}
