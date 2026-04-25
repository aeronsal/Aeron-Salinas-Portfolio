@props(['image', 'title', 'description', 'tags' => [], 'link' => '#', 'delay' => '0'])

<div class="project-card glass-panel" data-card="flat" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="project-image">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="project-img">
    </div>
    <div class="project-info">
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
        
        <div class="project-tags">
            @foreach($tags as $tag)
                <span>{{ $tag }}</span>
            @endforeach
        </div>
        
        <div class="project-actions">
            @if($link !== '#')
                <a href="{{ $link }}" class="btn-project" target="_blank">
                    <i class="fas fa-link"></i> Live Demo
                </a>
            @endif
        </div>
    </div>
</div>