<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Helpers\ApiFormatter;
use Exception;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();
        return response()->json($data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request-> validate([
            'judul' => 'required',
            'genre' => 'required',

            ]);
            $buku = Buku::create([
            'judul' => $request->judul,
            'pengarang_id' => $request->pengarang_id,
            'genre' => $request->genre,

            ]);

            $data = Buku::where('id', '=', $buku->id)->get();

            if($data){
                return response()->json($data);
            }else {
                return ApiFormatter::createApi('400', 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi('400', 'failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buku::where('id', '=', $id)->get();

        if($data){
            return response()->json($data);
        }else {
            return ApiFormatter::createApi('400', 'failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try {
            $request-> validate([
            'judul' => 'required',
            'genre' => 'required',

            ]);

            $buku = Buku::findorfail($id);

            $buku->update([
            'judul' => $request->judul,
            'pengarang_id' => $request->pengarang_id,
            'genre' => $request->genre,

            ]);

            $data = Buku::where('id', '=', $buku->id)->get();

            if($data){
                return response()->json($data);
            }else {
                return ApiFormatter::createApi('400', 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi('400', 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findorfail($id);

        $data = $buku->delete();

        if($data){
            return ApiFormatter::createApi('200', 'Data dihapus');
        }else {
            return ApiFormatter::createApi('400', 'failed');
        }
    }
}
