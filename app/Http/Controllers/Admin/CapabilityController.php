<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; use App\Models\Capability; use Illuminate\Http\Request; use Illuminate\Support\Facades\File; use Illuminate\Support\Str;
class CapabilityController extends Controller {
 public function index(){return view('admin.capabilities', ['capabilities'=>Capability::latest()->get()]);}
 public function store(Request $request){$data=$request->validate(['title'=>['required','string','max:150'],'description'=>['required','string','max:1000'],'image'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:5120']]);if($request->hasFile('image')){$data['image']=$this->storeImage($request);}Capability::create($data);return back()->with('success','Capability added successfully.');}
 public function edit(Capability $capability){return view('admin.capabilities-edit', compact('capability'));}
 public function update(Request $request, Capability $capability){$data=$request->validate(['title'=>['required','string','max:150'],'description'=>['required','string','max:1000'],'image'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:5120']]);unset($data['image']);if($request->hasFile('image')){$capability->image=$this->storeImage($request);}$capability->fill($data)->save();return redirect()->route('admin.capabilities.index')->with('success','Capability updated successfully.');}
 public function destroy(Capability $capability){$capability->delete();return back()->with('success','Capability deleted successfully.');}
 private function storeImage(Request $request){$image=$request->file('image');$directory=public_path('uploads/capabilities');File::ensureDirectoryExists($directory);$file='capability-'.Str::uuid().'.'.$image->getClientOriginalExtension();$image->move($directory,$file);return 'uploads/capabilities/'.$file;}
}
