<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Blog;

class BlogDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Blog $blog)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-details');
    }
}
