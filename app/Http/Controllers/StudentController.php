<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Departement;
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
        
          $students = Student::latest()->paginate(4);
    
          return view('student.index',compact('students'))
              ->with('i', (request()->input('page', 1) - 1) * 4);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements=Departement::all();
        return view('student.create',compact('departements'));
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
        return view('student.index',['students'=>Student::all()])->with('success','Student créé avec succès.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student= Student::where('id',$id)->first();
        return view ('student.show')->with (['student'=>$student]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $student= Student::find($id);
        $departements=Departement::all();
        return view ('student.edit',compact('student','departements'));
 
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
        //
        $request->validate([
            'registration_number' => 'required',
            'name' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'departement_id' => 'required',
           

        ]);
        $student = Student::find($id);
        $student->name = $request->get('name');
        $student->registration_number =  $request->get('registration_number');
        $student->mail = $request->get('mail');
        $student->anniversaire = $request->get('anniversaire');

        $student->phone = $request->get('phone');
        $student->address = $request->get('address');
        $student->departement_id = $request->get('departement_id');

        $student->save();
        return redirect()->route('Students.index')
                        ->with('success','Students has been updated succesfully !');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('Students.index')
        ->with('success','student supprimé avec succès');    
    
    }
}
