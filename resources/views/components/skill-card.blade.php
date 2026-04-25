@props(['icon', 'color', 'name', 'delay' => '0'])

<div class="skill-card" data-card data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="skill-card-inner glass-panel">
        <i class="{{ $icon }} skill-icon" style="color: {{ $color }};"></i>
        <h3>{{ $name }}</h3>
    </div>
</div>