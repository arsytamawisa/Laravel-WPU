<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// namescape
use App\Student;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // query builder model
        // $mahasiswa = DB::table('mahasiswa')->get();

        // eloquent orm
        $student    = Student::all();
        $mahasiswa  = Mahasiswa::all();
        $data       = compact('mahasiswa','student');

        // codeigniter
        // $data['student'] = Student::all();
        // $data['mahasiswa'] = Mahasiswa::all();

        // return view('mahasiswa/index', ['mahasiswa' => $mahasiswa]);
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
