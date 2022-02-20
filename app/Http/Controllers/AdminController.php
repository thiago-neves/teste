<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Question;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin', [
			'questions' => Question::all(),
		]);
    }

	public function add_product(Request $request)
	{
		$imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
		$input = $request->all();
		$input["image"] = "images/$imageName";
		Product::Create($input);
		return view('admin', [
			'questions' => Question::all(),
		]);
	}

	public function add_answer(Request $request, $id)
	{
		$question = Question::find($id);
		$question->answer = $request->answer;
		$question->save();
		return view('admin', [
			'questions' => Question::all(),
		]);
	}

	public function show_question(Question $question)
	{
		return view('showQuestion', ['question' => $question]);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
