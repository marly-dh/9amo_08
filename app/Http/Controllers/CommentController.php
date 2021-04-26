<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
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
