@props(['category', 'summary', 'detail', 'clientName', 'serviceType', 'date', 'diagnosis', 'badges'])

<div class="lr-review-item">
  <div class="lr-review-category">[{{ $category }}]</div>
  <div class="lr-review-content">
    <div class="lr-review-summary">{{ $summary }}</div>
    <div class="lr-review-detail">{{ $detail }}</div>
    <div class="lr-review-info">
      <span>{{ $clientName }}</span>
      <span>{{ $serviceType }}</span>
      <span>{{ $date }}</span>
      <span>{{ $diagnosis }}</span>
    </div>
    <div class="lr-review-badges">
      <div class="lr-badges-header">
        <div class="lr-badges-icon"></div>
        <div class="lr-badges-title">이런 점이 좋았어요.</div>
      </div>
      <div class="lr-badges-list">
        @foreach($badges as $badge)
          <div class="lr-badge">
            <div class="lr-badge-circle">{{ $badge['number'] }}</div>
            <div class="lr-badge-label">{{ $badge['label'] }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
