<?php

namespace App\Http\Controllers;

use App\Models\News;

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
}
