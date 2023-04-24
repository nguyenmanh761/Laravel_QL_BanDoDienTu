<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer as Customer;
use App\Http\Requests\StoreCustomer;
use File;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = new Customer();
        $customers = Customer::all();

        return view('customer.index', ['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomer $request)
    {
        $customer = new Customer();
        $customer->fullname = $request->fullname;
        $customer->sex = $request->sex;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->description = $request->description;
        $customer->save();
        if($request->hasfile('photos')){
            $dir = public_path('uploads') . "/customers/" . $customer->id;
            File::makeDirectory($dir);

            foreach($request->file('photos') as $file){
                $file->move($dir, $file->getClientOriginalName());
            }
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', ['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->fullname = $request->fullname;
        $customer->sex = $request->sex;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->description = $request->description;
        $customer->save();

        if($request->hasfile('photos')){
            $dir = public_path('uploads') . "/customers/" . $customer->id;

            // neu file ton tai thi xoa thu miuc anh cu.
            if(File::exists($dir))
                File::deleteDirectory($dir);

            // tao thu muc anh moi, them cac anh 
            File::makeDirectory($customer->id);

            foreach($request->file('photos') as $file){
                $file->move($dir, $file->getClientOriginalName());
            }
        }
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        $dir = public_path('uploads') . "/customers/" . $customer->id;
        if(File::exists($dir))
            File::deleteDirectory($dir);
        return $this->index();
    }
}
