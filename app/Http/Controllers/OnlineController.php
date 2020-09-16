<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Post;
use App\Mail\Newsletter;
use Illuminate\Support\Facades\Mail;
use Auth;
class OnlineController extends Controller
{
    public function index()
    {
    	
    $owner_id = Auth::user()->id;
    $online = Movie::where('owner_id',$owner_id)->get();
     return view('members.successlogin', compact('online'));
    }

    public function create()
    {
    	return view('movies.create');
    }



 public function show(Movie $online)
 {
return view('movies.view', compact('online'));

 }

 public function edit($id)
 {
 	$online = Movie::findOrFail($id);
  

    return view('movies.edit', compact('online'));

 }

  public function update($id)
  {

     $online = Movie::findOrFail($id);
  $online->name = request('name');
  $online->age = request('age');
  $online->gender = request('gender');
  $online->occupation = request('occupation');
  $online->blood = request('blood');
  $online->citizenship = request('citizenship');
  $online->passport = request('passport');
  $online->pad = request('pad');
  $online->pav = request('pav');
  $online->paw = request('paw');
  $online->tad = request('tad');
  $online->tavt = request('tavt');
  $online->taw = request('taw');
  $online->email = request('email');
  $online->phone = request('phone');
  $online->vehicle = request('vehicle');
  $online->education = request('education');
  $online->citizenship_issue = request('citizenship_issue');
  $online->document = request('document');
  $online->save();
  return redirect('/members/successlogin');
  }

public function destroy($id)
  {
 Movie::find($id)->delete();
 return redirect('/members/successlogin');
  }

public function store()
{

  // if($request->hasFile('document')!=null){
  //  $filenameWithExt = $request->file('document')->getClientOriginalName();
  //  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
  //  $fileNameToStore= $filename.'_'.time().'_'.$extension;
  //  $path = $request->file('document')->storeAs('public/documents, $fileNameToStore');
  //  }

	$online = new Movie();
	$online->name = request('name');
	$online->age = request('age');
  $online->gender = request('gender');
  $online->occupation = request('occupation');
  $online->blood = request('blood');
  $online->citizenship = request('citizenship');
  $online->passport = request('passport');
  $online->pad = request('pad');
  $online->pav = request('pav');
  $online->paw = request('paw');
  $online->tad = request('tad');
  $online->tavt = request('tavt');
  $online->taw = request('taw');
  $online->email = request('email');
  $online->phone = request('phone');
  $online->vehicle = request('vehicle');
  $online->education = request('education');
  $online->citizenship_issue = request('citizenship_issue');
  // $online->document = $fileNameToStore;
   


  $online->rating = request('rating');
  $online->owner_id = Auth::user()->id;
  $online->owners = Auth::user()->name;
  $online->save();

  Mail::to($online->owner->email)->send(
   new Newsletter($online) 
  ); 

	return redirect('members/successlogin');

}    
public function __construct() 
{
  $this->middleware('auth');
}

public function saveWatch()
{

   return $posts = post::where('owner_id',1);
}

// public function view_movie($owner_id){
//     $owner = User::find($owner_id);
//     $online = $owner->online()->get();

//     return View::make("view")->with(array("owner" => $owner, "online" => $online));
// }



}
