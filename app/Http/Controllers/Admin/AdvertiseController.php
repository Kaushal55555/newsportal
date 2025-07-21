<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises = Advertise::all();
        return view("admin.advertise.index", compact('advertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.advertise.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            "company_name" => "required",
        ]);
        $advertise = new Advertise();
        $advertise->company_name = $request->company_name;
        $advertise->contact = $request->contact;
        $advertise->expire_date = $request->expire_date;
        $advertise->schedule_date = $request->schedule_date;
        $advertise->redirect_url = $request->redirect_url;
        $file = $request->image;
        if ($file) {
            $newName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('advertises/', $newName);
            $advertise->image = "advertises/$newName";
        }
        $advertise->save();
        toast("Advertise Created Successfully", 'success');

        return redirect()->back();
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
        $advertise = Advertise::find($id);
        return view('admin.advertise.edit',  compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $advertise = Advertise::find($id);
        $advertise->company_name = $request->company_name;
        $advertise->contact = $request->contact;
        $advertise->expire_date = $request->expire_date;
        $advertise->redirect_url = $request->redirect_url;
        $file = $request->image;
        if ($file) {
            $newName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('advertises/', $newName);
            $advertise->image = "advertises/$newName";
        }
        toast("Advertise Updated Successfully", 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
