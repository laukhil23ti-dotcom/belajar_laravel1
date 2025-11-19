<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
		    'nama'  => 'required|max:10',
		    'email' => ['required','email'],
		    'pertanyaan' => 'required|max:300|min:8',
		],[
            'nama.required' => 'Nama tidak boleh kosong',
            'email.email' => 'Email tidak valid'
        ]);
        $nama = $request->nama;
        $email= $request->email;
        $pertanyaan = $request->pertanyaan;
        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['pertanyaan'] = $request->pertanyaan;
        $pesan = "Terimakasih {$nama}! Pertanyaan ini: {$pertanyaan} akan segera direspon melalui email {$email}";
        //return redirect()->route('home');
        // return redirect()->back();
        //return redirect()->away('https://www.google.com/imgres?q=web%20jumpscare&imgurl=https%3A%2F%2Flhimg.crxsoso.com%2FL8LLXQeMyAQUGfxQTYZe_ByGzH7R8UC2pc2vjnpIm1QeXb7C0NGYxkF2BXlIpKVbJulpjlF9eCwhOVzY9Tl91QUw_g%3Ds1280-w1280-h800&imgrefurl=https%3A%2F%2Fwww.crxsoso.com%2Fwebstore%2Fdetail%2Flgffjphcglhjodndldapdedaemkkkcbo&docid=mn1cfbqZs5XODM&tbnid=l80QO2fIW466sM&vet=12ahUKEwjynKDgjZaQAxU_zTgGHbC2OCsQM3oECCcQAA..i&w=1280&h=800&hcb=2&ved=2ahUKEwjynKDgjZaQAxU_zTgGHbC2OCsQM3oECCcQAA');
        return redirect()->route('home')->with('info',$pesan);
        //return redirect()->route('home')->with('info', 'Selamat, Kamu Lulus!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}