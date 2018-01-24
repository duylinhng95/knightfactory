<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\editStudentRequest;
use App\Student;
use Session;
use Toastr;

class StudentController extends Controller
{
	public function listStudents()
	{
		$students=Student::all();
		return view('admin.student.show',compact('students'));
	}
	public function addStudent()
	{
		return view('page.student.register');
	}
	public function saveStudent(StudentRequest $request)
	{
		$data=$request->all();
		$student=Student::create($data);
		return redirect('/');
	}
	public function detailStudent(Student $student)
	{
		return view('admin.student.detail',compact('student'));
	}
	public function editStudent(Student $student)
	{
		return view('admin.student.edit',compact('student'));
	}
	public function updateStudent(Student $student,editStudentRequest $request)
	{
		$data=$request->all();
		if(empty($data['password']))
		{
			$data['password']=$student['password'];
		}
		$student->update($data);
		Toastr::success('Edit Complete',$title=null,$option=[]);
		return redirect('administrator/student');
	}
	public function deleteStudent(Student $student)
	{
		$student->delete();
		Toastr::success('Student is deleted',$title=null,$option=[]);
		return redirect('administrator/student');
	}
	public function loginStudent(Request $request)
	{
		$data=$request->all();
		$studentlogin=Student::where('email',$data['email'])->where('password',$data['password'])->get();
		if (count($studentlogin)) {
			Session::put('student',$studentlogin);
			return redirect("/");
		}
		else
		{
			$error="Vui lòng nhập lại Email hoặc Mật khẩu";
			return redirect("/")->with($error);			
		}		
	}
	public function logoutStudent()
	{
		Session::flush();
		return redirect("/");
	}
}
