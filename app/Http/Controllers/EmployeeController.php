<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employee::latest()->paginate(4);
    
        return view('employee.index',compact('employes'))
            ->with('i', (request()->input('page', 1) - 1) * 4);



        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'nom' => 'required',
        //     ]);
        Employee::create($request->all());
        return view('employee.index',['employes'=>Employee::all()])->with('success','Teacher créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $employee= Employee::where('id',$id)->first();
        return view ('employee.show')->with (['employee'=>$employee]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  return view('employee.edit',compact('employes'));

       $employee= Employee::find($id);
        return view ('employee.edit',compact('employee'));
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
            'registration_number' => 'required',
            'fullname' => 'required',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',

        ]);
        $employee = Employee::find($id);
        $employee->registration_number =  $request->get('registration_number');
        $employee->fullname = $request->get('fullname');
        $employee->depart = $request->get('depart');
        $employee->hire_date = $request->get('hire_date');
        $employee->phone = $request->get('phone');
        $employee->address = $request->get('address');
        $employee->city = $request->get('city');
        $employee->created_at = $request->get('created_at');
        $employee->updated_at = $request->get('updated_at');

        $employee->save();
        return redirect()->route('Employees.index')
                        ->with('success','les coordonnees mis à jour avec succès');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('Employees.index')
        ->with('success','Employee supprimé avec succès');        }
}
