<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $skormax = Student::max('skor');
        $skormin = Student::min('skor');
        $avg = number_format(Student::average('skor'),3);


        //untuk tabel frekuensi
        $frekuensi = Student::select('skor', DB::raw('count(*) as frekuensi'))  //ambil skor, hitung banyak skor taruh di tabel frekuensi
                                 ->groupBy('skor')                              //urutkan sesuai skor
                                 ->get();
        $totalskor = Student::sum('skor');
        $totalfrekuensi = Student::count('skor');        //karena total frekuensi = banyaknya skor yang ada



        return view('student.index', ['students' => $student,
        'max' =>$skormax,
        'min' =>$skormin,
        'avg' => $avg,
        'totalfrekuensi' => $totalfrekuensi,
        'frekuensi' => $frekuensi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student=Student::find($id);
        return view('student.edit',compact('student'))->with('status', 'Data Berhasil Ditambahkan');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student=Student::find($id);
        $student->nama = $request->nama;
        $student->nim = $request->nim;
        $student->skor = $request->skor;
        $student->save();
        //return $request;
        return redirect('/students')->with('status', 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $students)
    {

    }

    public function delete($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/students')->with('status', 'Data Berhasil Dihapus!');
    }



  /*  public function operations()
    {

        return DB::table('students')->avg('skor');


    }

    public function min()
    {
        return DB::table('students')->min('skor');

    }
    public function max()
    {
        return DB::table('students')->max('skor');
    }

*/

}
