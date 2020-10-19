<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Function that returns all news on database
     */
    public function showAllNews()
    {
        // Build response
        $response = array(
            'data' => News::all(),
            'message' => 'OK'
        );

        // Return the response in JSON format
        return response()->json($response);
    }

    /**
     * Function that creates a news
     */
    public function create(Request $request)
    {
        // Validate the request
        $this->validate($request,[
            'name'      => 'required',
            'content'   => 'required'
        ]);

        $news = News::create($request->all());
        if(!$news){
            response()->json(['error' => 'Failed to create news'], 400);
        }

        // Build the response
        $response = array(
            'message' => 'CREATED',
            'data'    => $news
        );
        return response()->json($response, 201);
    }
}
