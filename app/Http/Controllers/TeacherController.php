<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Type;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::latest()->paginate(4);
    
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 4);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Type::all();
        return view('teachers.create',compact('types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teacher::create($request->all());
        return view('teachers.index',['teachers'=>Teacher::all()])->with('success','Teacher créé avec succès.');
   
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
        $teacher= Teacher::where('id',$id)->first();
        return view ('teachers.show')->with (['teacher'=>$teacher]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher= Teacher::find($id);
        $types=Type::all();
        return view ('teachers.edit',compact('teacher','types'));
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
            'type_id' => 'required',
           

        ]);
        $teacher = Teacher::find($id);
        $teacher->registration_number =  $request->get('registration_number');
        $teacher->name = $request->get('name');
        $teacher->mail = $request->get('mail');
        $teacher->phone = $request->get('phone');
        $teacher->address = $request->get('address');
        $teacher->type_id = $request->get('type_id');
        $teacher->created_at = $request->get('created_at');
        $teacher->updated_at = $request->get('updated_at');

        $teacher->save();
        return redirect()->route('Teachers.index')
                        ->with('success','Teacher has been updated succesfully !');
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
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->route('Teachers.index')
        ->with('success','teachers supprimé avec succès');    
    }
}
