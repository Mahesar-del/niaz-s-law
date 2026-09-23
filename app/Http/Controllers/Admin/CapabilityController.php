<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\Capability; use Illuminate\Http\Request; use Illuminate\Support\Str;
class CapabilityController extends Controller {
 public function index(){return view('admin.capabilities', ['capabilities'=>Capability::latest()->get()]);}
 public function store(Request $request){$data=$request->validate(['title'=>['required','string','max:150'],'description'=>['required','string','max:1000'],'image'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:5120']]);if($request->hasFile('image')){$image=$request->file('image');$file='capability-'.Str::uuid().'.'.$image->getClientOriginalExtension();$image->move(public_path('images'),$file);$data['image']=$file;}Capability::create($data);return back()->with('success','Capability added successfully.');}
}
