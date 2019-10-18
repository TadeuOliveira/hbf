<?php

namespace App\Http\Controllers;

use App\Review;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::all();
        return view('review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Review::class);
        $subjects = Subject::all();
        $review = new Review();
        return view('review.create',compact('subjects','review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //subject_id, user_id, title, text
        $this->authorize('create', Review::class);
        $data = $this->validateRequest('create');
        $data['user_id'] = Auth::id();
        $review = Review::create($data);
        return redirect('review');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('review.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //attempted to get polices to work here but had no success
        //will have to put authentication logic here
        if($review->author->id !== Auth::id()){
          abort(403, 'Unauthorized action.');
        }
        $subjects = Subject::all();
        return view('review.edit',compact('review','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {      
        if($review->author->id !== Auth::id()){
          abort(403, 'Unauthorized action.');
        }
        $data = $this->validateRequest('update');
        $review->update($data);
        return redirect('review/'.$review->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //$this->authorize('delete',Auth::user(),$review);
        $review->delete();
        return redirect('review');
    }

    public function validateRequest($method)
    {
        return request()->validate([
            'title' => 'required|max:50', //unique:reviews for creation
            'text' => 'required',
            'subject_id' => 'required'
        ]);
    }
}
