<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Post;

class PostPolicy
{
    use HandlesAuthorization;

    public function author(User $user,Post $post)
    {
        if($user->id == $post->usuario_id){
            return true;
        }else{
            return false;
        }
       
    }
     public function published(?User $user, Post $post)
    {
        if ($post->estado==2) {
            return true;
        }else{
            return false;
        }
    } 
}
