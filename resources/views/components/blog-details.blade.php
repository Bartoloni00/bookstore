<div class="card position-static text-center">

  <!--Información del blog-->
  <div class="card-header-blog">
    Release date: {{ $blog->release_date }} | Category: {{ $blog->category->name}}
  </div>

  <!--Contenido del blog-->
  <div class="card-body-blog">

    <!--Titulo del blog-->
    <h5 class="card-title">{{$blog->title}}</h5>

    <!--Descripción del blog-->
    <p class="card-text">{{ $blog->description }}</p>
  </div>

  <!--Author del blog-->
  <div class="card-footer-blog text-body-secondary">
    Author: {{$blog->user->name}}
  </div>
</div>
