<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User();
        $users = User::all();

        return view('User.index', ['Users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->fullname = $request->fullname;
        $user->sex = $request->sex;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->save();
        if($request->hasfile('photos')){
            $dir = public_path('uploads') . "/Users/" . $user->id;
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
        $user = User::findOrFail($id);
        return view('User.edit', ['User'=>$user]);
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
        $user = User::findOrFail($id);
        $user->fullname = $request->fullname;
        $user->sex = $request->sex;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->save();

        if($request->hasfile('photos')){
            $dir = public_path('uploads') . "/Users/" . $user->id;

            // neu file ton tai thi xoa thu miuc anh cu.
            if(File::exists($dir))
                File::deleteDirectory($dir);

            // tao thu muc anh moi, them cac anh 
            File::makeDirectory($user->id);

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
        $user = User::findOrFail($id);
        $user->delete();
        $dir = public_path('uploads') . "/Users/" . $user->id;
        if(File::exists($dir))
            File::deleteDirectory($dir);
        return $this->index();
    }
}
