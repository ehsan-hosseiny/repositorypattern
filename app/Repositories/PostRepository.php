<?php
namespace App\Repositories;

use App\Model\Post;


class PostRepository
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($post_id)
    {
        return Post::find($post_id);
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Post::all();
    }

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($post_id)
    {
        Post::destroy($post_id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data)
    {
        $post = Post::find($post_id);
        $post->title = $post_data->title;
        $post->post = $post_data->post;
        $post->user_id = $post_data->user_id;
        $post->save();
    }
}
