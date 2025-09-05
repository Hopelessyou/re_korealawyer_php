@props(['title', 'services'])

<div class="ls-section">
  <div class="ls-rail-title">{{ $title }}</div>
  <div class="ls-grid">
    @foreach($services as $service)
      <div class="ls-card">
        <div class="title">{{ $service['title'] }}</div>
        @if(isset($service['price']))
          <div class="price">{{ $service['price'] }}</div>
        @endif
      </div>
    @endforeach
  </div>
</div>
