<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use \App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students= DB::table('students')->get();
        $students = Student::all();
        return view("student/index", ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // Cara insert Pertama
        // $students = new student;
        // $students->nama = $request->nama;
        // $students->kelas = $request->kelas;
        // $students->jurusan = $request->jurusan;
        // $students->save();
        // return redirect('/student')->with('success', "Berhasil tambah murid");

        // Cara Kedua
        // $students = [
        //     "nama" => $request->nama,
        //     "kelas" => $request->kelas,
        //     "jurusan" => $request->jurusan
        // ];
        // Student::create($students);
        // return redirect('/student')->with('success', "Berhasil tambah murid");
            
        // Cara ketiga
        // Student::create($request->all());
        // return redirect('/student')->with('success', "Berhasil tambah murid");

         // Validasi
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        // Cara ke empat
        Student::create($request->all());
        return redirect('/student')->with('success', "Berhasil tambah murid");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        Student::where('id', $id)
                ->update([
                  'nama' => $request->nama,
                  'kelas' => $request->kelas,
                  'jurusan' => $request->jurusan
              ]);
        return redirect('/student')->with('success', "Berhasil Edit murid");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('/student')->with(['success' => 'Hapus data Berhasil']);
    }

}
