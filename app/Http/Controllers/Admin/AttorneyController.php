<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Attorney;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AttorneyController extends Controller
{
    public function create(){return view('admin.attorneys.create', ['attorneys' => Attorney::latest()->get()]);}
    public function details(){return view('admin.attorneys.details', ['attorneys' => Attorney::latest()->get()]);}
    public function store(Request $request){
        $data=$request->validate(['photo'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:5120'],'name'=>['required','string','max:120'],'practice'=>['required','array','min:1'],'practice.*'=>['string','max:120'],'practice_custom'=>['nullable','string','max:120'],'industry'=>['required','array','min:1'],'industry.*'=>['string','max:120'],'industry_custom'=>['nullable','string','max:120'],'location'=>['required','array','min:1'],'location.*'=>['string','max:120'],'title'=>['required','string','max:120']]);
        if (!empty($data['practice_custom'])) $data['practice'][]=$data['practice_custom'];
        if (!empty($data['industry_custom'])) $data['industry'][]=$data['industry_custom'];
        $data['practice']=implode(', ', $data['practice']);
        $data['industry']=implode(', ', $data['industry']);
        unset($data['practice_custom'],$data['industry_custom']);
        $data['location']=implode(', ', $data['location']);
        $data['email']='';
        $data['phone']='';
        if($request->hasFile('photo')){$photo=$request->file('photo');$file='attorney-'.Str::uuid().'.'.$photo->getClientOriginalExtension();$photo->move(public_path('images'),$file);$data['photo']=$file;}
        $data['slug']=Str::slug($data['name']).'-'.Str::lower(Str::random(6));
        Attorney::create($data);
        return back()->with('success','Attorney added successfully.');
    }

    public function edit(Attorney $attorney)
    {
        return view('admin.attorneys.edit', compact('attorney'));
    }

    public function update(Request $request, Attorney $attorney)
    {
        $data=$request->validate(['photo'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:5120'],'name'=>['required','string','max:120'],'practice'=>['required','array','min:1'],'practice.*'=>['string','max:120'],'practice_custom'=>['nullable','string','max:120'],'industry'=>['required','array','min:1'],'industry.*'=>['string','max:120'],'industry_custom'=>['nullable','string','max:120'],'location'=>['required','array','min:1'],'location.*'=>['string','max:120'],'title'=>['required','string','max:120'],'email'=>['required','email','max:255'],'phone'=>['required','string','max:40'],'overview'=>['nullable','string','max:2000'],'experience'=>['nullable','string','max:4000'],'experience_points'=>['nullable','string','max:2000'],'education'=>['nullable','string','max:2000'],'admissions'=>['nullable','string','max:2000']]);
        if (!empty($data['practice_custom'])) $data['practice'][]=$data['practice_custom'];
        if (!empty($data['industry_custom'])) $data['industry'][]=$data['industry_custom'];
        $data['practice']=implode(', ', $data['practice']);
        $data['industry']=implode(', ', $data['industry']);
        unset($data['practice_custom'],$data['industry_custom']);
        $data['location']=implode(', ', $data['location']);
        if($request->hasFile('photo')){$photo=$request->file('photo');$file='attorney-'.Str::uuid().'.'.$photo->getClientOriginalExtension();$photo->move(public_path('images'),$file);$data['photo']=$file;}
        unset($data['photo']);
        $attorney->fill($data);
        if(isset($file))$attorney->photo=$file;
        $attorney->save();
        return redirect()->route('admin.attorneys.create')->with('success','Attorney updated successfully.');
    }

    public function destroy(Attorney $attorney)
    {
        $attorney->delete();

        return redirect()->route('admin.attorneys.create')->with('success', 'Attorney deleted successfully.');
    }
}
