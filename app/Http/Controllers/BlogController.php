<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $blog = Blog::all();

        return \response()->json([
            'message' => 'success fetching list blog',
            'data' => $blog
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $blog = Blog::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'id_user' => $request->input('id_user'),
        ]);

        if ($blog)
            return \response()->json([
                'message' => 'blog posted successfully'
            ], Response::HTTP_CREATED);


        return \response()->json([
            'message' => 'failed post blog'
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return \response()->json([
            'message' => 'success fetch blog details',
            'data' => $blog
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'id_user' => $request->input('id_user'),
        ]);

        if ($blog)
            return \response()->json([
                'message' => 'blog edited successfully'
            ], Response::HTTP_CREATED);

        return \response()->json([
            'message' => 'failed edit blog'
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $blog = Blog::find($id)->delete();

        if ($blog)
            return \response()->json([
                'message' => 'blog deleted successfully'
            ], Response::HTTP_CREATED);

        return \response()->json([
            'message' => 'failed delete blog'
        ], Response::HTTP_BAD_REQUEST);
    }
}
