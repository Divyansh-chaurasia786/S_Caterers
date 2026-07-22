@props(['service'])

<div class="service-card glass-panel" data-category="{{ $service->category }}">
  <div class="service-img-wrapper">
    <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}">
    @if(!empty($service->tag))
      <div class="service-tag">{{ $service->tag }}</div>
    @endif
  </div>
  <div class="service-body">
    <h3 class="service-title">{{ $service->title }}</h3>
    <p class="service-desc">{{ $service->description }}</p>
    
    @if(!empty($service->features))
      <ul class="service-features">
        @foreach($service->features as $feature)
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ $feature }}</span>
          </li>
        @endforeach
      </ul>
    @endif

    <div class="service-footer">
      <div class="price-hint">Starting from <span>${{ number_format($service->price_per_head, 0) }} / person</span></div>
      <button class="btn btn-outline open-inquiry" data-service="{{ $service->title }}">Inquire Now</button>
    </div>
  </div>
</div>
