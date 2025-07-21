<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::first();
        return view("admin.company.index", compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::first();
        if (!$company) {
            return view("admin.company.create");
        }
        return redirect()->route("admin.company.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->facebook_url = $request->facebook;
        $company->youtube_url = $request->youtube;
        $company->instagram_url = $request->instagram;
        $company->meta_keywords = $request->keywords;
        $company->meta_description = $request->description;
        $file = $request->logo;
        if ($file) {
            $newName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('images/', $newName);
            $company->logo = "images/$newName";
        }
        $company->save();
        toast("Company Created Successfully", 'success');

        return redirect()->route("admin.company.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('admin.company.edit',  compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->facebook_url = $request->facebook;
        $company->youtube_url = $request->youtube;
        $company->instagram_url = $request->instagram;
        $company->meta_keywords = $request->keywords;
        $company->meta_description = $request->description;
        $file = $request->logo;
        if ($file) {
            if ($company->logo) {
                unlink($company->logo);
            }
            $newName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('images/', $newName);
            $company->logo = "images/$newName";
        }
        $company->save();
        toast("Company Updated Successfully", 'success');
        return redirect()->route("admin.company.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
