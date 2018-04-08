<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostingsController extends Controller{
    public function index(){
        return "show the main landing page to create new job postings";
    }
    public function create(){
        return "Create a new job posting here by filling in this form";
    }
    public function store(Request $request){
        return "Save your new job posting";
    }
    public function show($id){
        return view('postings.posting')->with(['companyName' => '7-Eleven', 'jobTitle' => 'Clerk']);
    }
    public function edit($id){
        return "edit existing job postings here";
    }
    public function update(Request $request, $id){
        return "save the newly-edited job posting here";
    }
    public function destroy($id){
        return "delete (or mark as deleted) job postings here";
    }
}

