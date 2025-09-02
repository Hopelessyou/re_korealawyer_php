@props(['mainCategory', 'subCategory', 'title', 'timeInfo', 'tags'])

<div class="la-case-item">
  <div class="la-case-categories">
    <span class="la-main-category">{{ $mainCategory }}</span>
    <span class="la-category-separator">·</span>
    <span class="la-sub-category">{{ $subCategory }}</span>
  </div>
  <div class="la-case-title">{{ $title }}</div>
  <div class="la-case-time">{{ $timeInfo }}</div>
  <div class="la-case-tags">
    @foreach($tags as $tag)
      <span class="la-tag"># {{ $tag }}</span>
    @endforeach
  </div>
</div>
