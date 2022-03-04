<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    
    public function creating(Post $publicacione)
    {
        
        if(! \App::runningInConsole()){
            $publicacione->usuario_id=auth()->user()->id;
        }
    }

   
    public function deleting(Post $publicacione)
    {
        if ($publicacione->image) {
            Storage::delete($publicacione->image->url);
        }
    }

    

    
}
