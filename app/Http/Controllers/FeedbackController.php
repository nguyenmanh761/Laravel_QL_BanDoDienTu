<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback as Feedback;
use App\Http\Requests\StoreFeedback;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();

        return view('feedback.index', ['feedbacks'=>$feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedback $request)
    {
        $feedback = new Feedback();
        $feedback->fullname = $request->fullname;
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->title = $request->title;
        $feedback->content = $request->content;
        $feedback->status = $request->status;
        $feedback->save();
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
        $feedback = Feedback::findOrFail($id);

        return view('feedback.edit',['feedback'=>$feedback]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFeedback $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->fullname = $request->fullname;
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->title = $request->title;
        $feedback->content = $request->content;
        $feedback->status = $request->status;
        $feedback->save();
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
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return $this->index();
    }
}
