<?php
namespace App\Http\Controllers;

use App\Contact;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.

    @param  \Illuminate\Http\Request  $request
    @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $this->getRules();
        $messages = $this->getMessages();
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect()->back()->with(['success' => 'success']);
    }
            protected function getRules()
    {
        return $rules = [
            'name' => 'required|max:50',
            'email' => 'required|max:200',
            'address' => 'required|max:200',
        ];
    }

        protected function getMessages()
    {
        return $messages = [
            'name.required' => 'please enter a name',
            'email.required' => 'please enter an email',
            'address.required' => 'please enter an address',
        ];
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
 //
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
  //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect(route('welc'));
    }
}


