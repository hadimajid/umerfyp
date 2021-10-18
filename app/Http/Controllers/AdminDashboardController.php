<?php

namespace App\Http\Controllers;

use App\Hopeewinner;
use App\Kameeti;
use App\Set;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class AdminDashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function image(Set $set){

        $hopees = $set->hopees();
        return view('admin.dashboard.image',compact('hopees','set'));
    }
    public function imageupload(Request $request,Set $set){
        dd($request);
        $hopees = $set->hopees();
        return view('admin.dashboard.image',compact('hopees','set'));
    }


    public function active()   {
        $sets = Set::where('state','active')->get();
        return view('admin.dashboard.active',compact('sets'));
    }
    public function history(){
        $sets = Set::where('state','history')->get();
        return view('admin.dashboard.history',compact('sets'));
    }
    public function registration()   {
        $sets = Set::where('state','registration')->get();

        return view('admin.dashboard.registration',compact('sets'));
    }
    public function activeUsers()   {
        $users = User::has('sets')->paginate(10);
        return view('admin.dashboard.activeuser',compact('users'));
    }
    public function inactiveUsers()   {
        $users = User::doesnthave('sets')->paginate(10);
        return view('admin.dashboard.inactiveuser',compact('users'));
    }


    public function create()
    {
        return view('admin.dashboard.create');
    }


    public function store(Request $request)
    {
        $request->validate([
           'perday' => 'required|integer',
           'totaldays' => 'required|integer',
           'totalusers' => 'required|integer',
        ]);
        $set = new Set();
//        dd($request->perday * $request->totaldays * $request->totalusers);
        $set = $this->newSet($request,$set);

        $sets = Set::where('state','registration')->get();
        return view('admin.dashboard.registration',compact('sets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Set  $set
     * @return \Illuminate\Http\Response
     */
    public function show(Set $set)
    {
        //
    }


    public function edit(Set $set)
    {
        return view('admin.dashboard.edit',compact('set'));
    }


    public function update(Request $request, Set $set)
    {

        $request->validate([
            'perday' => 'required|integer',
            'totaldays' => 'required|integer',
            'totalusers' => 'required|integer',
        ]);

        $this->newSet($request,$set);

        $sets = Set::where('state','registration')->get();
        return view('admin.dashboard.registration',compact('sets'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Set  $set
     * @return \Illuminate\Http\Response
     */
    public function destroy(Set $set)
    {
        //
    }

    public function newSet($request,$set)
    {
        $set->perday = $request->perday;
        $set->totalday = $request->totaldays;
        $set->totalusers = $request->totalusers;
        $set->state = 'registration';
        $set->totalamount = $request->perday * $request->totaldays * $request->totalusers;
        $set->totalamountperperson = $request->perday * $request->totaldays;
        $set->returnperperson = $set->totalamountperperson / 100 * 79;
        $set->returnamount = $set->totalamount / 100 * 79 - ($set->returnperperson * 3);
        $set->firsthopee = $set->totalamount / 100 * 8.5;
        $set->secondhopee = $set->totalamount / 100 * 5;
        $set->thirdhopee = $set->totalamount / 100 * 3.5;
        $set->mycommission = $set->totalamount / 100 * 4 + ($set->returnperperson * 3);
        $set->jazzcommission = 0;
        $set->registereddate = now()->toDate();
        $set->save();
    }
    public function addKameeti(){
        return view('admin.Dashboard.kameeti-add');
    }
    public function submitKameeti(Request $request){
        $validateData=$request->validate([
           'name'=>['required','unique:kameetis,name'],
           'duration'=>'required',
           'price'=>'required',
           'amount'=>'required',
        ]);
        $data=array_merge($validateData,['admin_id'=>auth()->guard('admin')->user()->id]);
        $kameeti=new Kameeti($data);
        $kameeti->save();
        return redirect()->back()->with('success',"Kameeti added successfully.");

    }
    public function kameetiList(){
        $kameetis=Kameeti::paginate(10);
        return view('admin.Dashboard.kameeti-list',compact('kameetis'));
    }
}
