<div class="container">
    <div class="blog-detail-content">
        <div class="row text-center mb-2">
            <div class="col-4">
                <i class="fas fa-calendar"></i>
                <span class="d-block custom-text">{{ $blog->release_date }}</span>
            </div>
            <div class="col-4">
                <i class="fas fa-folder"></i>
                <span class="d-block custom-text">{{ $blog->category->name }}</span>
            </div>
            <div class="col-4">
                <i class="fas fa-user"></i>
                <span class="d-block custom-text">{{ $blog->user->name }} {{ $blog->user->lastname }}</span>
            </div>
        </div>
        @if ($blog->image)
            @if(substr($blog->image->name, 0, 8) !== 'https://')
                <img src="{{ asset('storage/' . $blog->image->name)}}" class="img-fluid blog-detail-img" alt="{{$blog->image->alt}}" loading="lazy">
            @else
                <img src="{{$blog->image->name}}" class="img-fluid blog-detail-img" alt="{{$blog->image->alt}}" loading="lazy">
            @endif
        @else
            <img src="{{ asset('storage/blogDefault.jpg')}}" class="img-fluid blog-detail-img" alt="{{$blog->title}}" loading="lazy">
        @endif
        <p class="blog-detail-description custom-text">{{ $blog->description }}</p>
    </div>
</div>