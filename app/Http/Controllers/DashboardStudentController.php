<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;

class DashboardStudentController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $students = Student::orderBy('created_at')
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->paginate(7);


            
        return view('dashboard.student.all', [
            "title" => "student",
            "students" => $students,
            "search" => $search
        ]);
    }

    public function show($student){
        return view('dashboard.student.detail', [
            "title" => "detail.student",
            "student" => Student::find($student)
        ]);
    }

    public function create(){
        return view('dashboard.student.create', [
            "title" => "New Data Student",
            "kelas" => Grade::all()
        ]); 
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $result = Student::create($validateData);

        if($result){
            return redirect('/dashboard/student/all')->with('success', 'Data siswa berhasil ditambahkan');
        }
    }

    public function destroy($student){
        $result = Student::destroy($student);

        if ($result) {
            return redirect('/dashboard/student/all')->with('success', 'Berhasil Dihapus');
        }
    }

    public function edit($id){
        $student = Student::find($id);
    
        if (!$student) {
            return redirect('/dashboard/student/all')->with('error', 'Data not found');
        }
    
        return view('dashboard.student.edit', [
            "title" => "Edit Data Student",
            "student" => $student,
            "kelas" => Grade::all()
        ]);
    }
    

    public function update(Request $request, $id){
        $student = Student::find($id);
    
        if (!$student) {
            return redirect('/dashboard/student/all')->with('error', 'Data not found');
        }
    
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
        ]);
    
        $student->update($validateData);
    
        if ($student) {
            return redirect('/dashboard/student/all')->with('success', 'Data updated successfully');
        } else {
            return redirect('/student/all/')->with('error', 'Failed to update data');
        }
    }
}
