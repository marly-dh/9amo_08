<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function createComment($post_id, $username, $comment_data) {
        return Comment::create([
            'post_id' => $post_id,
            'username' => $username,
            'comment_data' => $comment_data
        ]);
    }

    public function getComments($post_id)
    {
        return Comment::select('comments.id', 'comments.username', 'comments.comment_data', 'posts.created_at')
            ->where('posts.id', '=', $post_id)
            ->get();
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        return $comment->delete();
    }
}
