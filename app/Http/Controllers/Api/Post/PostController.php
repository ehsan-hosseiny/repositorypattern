<?php

namespace App\Http\Controllers\Api\Post;

use App\Inside\Constants;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{

    /**
     * The user repository implementation.
     *
     * @var PostRepository
     */
    protected $posts;

    /**
     * Create a new controller instance.
     *
     * @param  PostRepository  $users
     * @return void
     */
    public function __construct(PostRepository $posts)
    {

        $this->posts = $posts;
    }


    /**
     * @return list of post
     */
    public function list()
    {
        $data = $this->posts->all();

        return response()->json(['data' => $data, 'error' => Constants::RESPONSE_ERROR_SUCCESS, 'message' => ''], Response::HTTP_OK);

    }


    /**
     * List of Post
     *
     * @param Request
     * @return Response
     */
    public function store(Request $request)
    {



    }
}
