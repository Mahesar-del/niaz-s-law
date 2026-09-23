<?php
namespace App\Http\Controllers;
use App\Models\Attorney;
class AttorneyDetailController extends Controller { public function show(Attorney $attorney){return view('attorney-detail',compact('attorney'));} }
