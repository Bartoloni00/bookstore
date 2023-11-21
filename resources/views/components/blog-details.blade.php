<div class="card text-center">
  <div class="card-header">
    Release date: {{ $blog->release_date }} | Category: {{ $blog->category->name}} 
  </div>
  <div class="card-body blog">
    <h5 class="card-title">{{$blog->title}}</h5>
    <p class="card-text">{{ $blog->description }}</p>
  </div>
  <div class="card-footer text-body-secondary">
   Author: {{$blog->user->name}}
  </div>
</div>