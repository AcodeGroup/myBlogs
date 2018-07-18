<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posting;
use App\Kategori;
use Redirect;
use Image;
class adminPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posting= Posting::all();

        return view('admin.posting.index',['posting'=>$posting])->with('no',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori=Kategori::all();
        return view('admin.posting.create',['kategori'=>$kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posting=new Posting;
        $posting->judul_post=$request->judul;
        $posting->nama_kategori=$request->kategori;
        $posting->isi_post=$request->isi;
        if($request->hasFile('gambar')){
          $postgambar = $request->file('gambar');
          $filename = time() . '.' . $postgambar->getClientOriginalExtension();
          Image::make($postgambar)->resize(300, 300)->save(public_path('/images/post-'. $filename));
          $posting->gambar_post = $filename;
        }
        $posting->save();
        return Redirect::route('posting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posting=Posting::where('id',$id)->get();
        return view('admin.posting.show',compact('posting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $posting=Posting::where('id',$id)->get();
      return view('admin.posting.edit',compact('posting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $posting=Posting::find($id);
      $posting->judul_post=$request->judul;
      $posting->nama_kategori=$request->kategori;
      $posting->isi_post=$request->isi;
      if($request->hasFile('gambar')){
        $postgambar = $request->file('gambar');
        $filename = time() . '.' . $postgambar->getClientOriginalExtension();
        Image::make($postgambar)->resize(300, 300)->save(public_path('/images/post-'. $filename));
        $posting->gambar_post = $filename;
      }
      $posting->save();
      return Redirect::route('posting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posting=Posting::find($id);
        $posting->delete();
        return Redirect::route('posting.index');
    }
}
