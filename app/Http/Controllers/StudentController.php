<?php

namespace App\Http\Controllers;

// namespace
use App\Student;
use App\Mahasiswa;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation before insert
        $request->validate([
            'nim'            => 'required',
            'nama_mahasiswa' => 'required'
        ]);

        // Insert request to database
        Student::create($request->all());

        // Redirect with flash session 
        return redirect('/student')->with('status', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('mahasiswa.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('mahasiswa.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // Validation before update
        $request->validate([
            'nim'            => 'required',
            'nama_mahasiswa' => 'required'
        ]);

        // Update request to database
        Student::where('id', $student->id)->update( [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa
        ]);

        // Redirect with flash session 
        return redirect('/student')->with('status', 'Data mahasiswa berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/student')->with('status','Data mahasiswa berhasil dihapus.');
    }
}
