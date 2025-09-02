<!-- 용어 사이드바 컴포넌트 -->
<aside class="terms-sidebar">
  <!-- 분야 필터 -->
  <div class="terms-filter-card">
    <h3 class="terms-filter-title">분야</h3>
    <div class="terms-filter-options">
      <label class="terms-checkbox-option">
        <input type="checkbox" name="field" value="criminal" checked>
        <span class="terms-option-text">형사</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="field" value="civil" checked>
        <span class="terms-option-text">민사</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="field" value="administrative" checked>
        <span class="terms-option-text">행정</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="field" value="commercial" checked>
        <span class="terms-option-text">상사</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="field" value="family" checked>
        <span class="terms-option-text">가족</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="field" value="labor" checked>
        <span class="terms-option-text">노동</span>
      </label>
    </div>
  </div>

  <!-- 난이도 필터 -->
  <div class="terms-filter-card">
    <h3 class="terms-filter-title">난이도</h3>
    <div class="terms-filter-options">
      <label class="terms-checkbox-option">
        <input type="checkbox" name="difficulty" value="basic" checked>
        <span class="terms-option-text">기초</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="difficulty" value="intermediate" checked>
        <span class="terms-option-text">중급</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="difficulty" value="advanced" checked>
        <span class="terms-option-text">고급</span>
      </label>
    </div>
  </div>

  <!-- 정렬 옵션 -->
  <div class="terms-filter-card">
    <h3 class="terms-filter-title">정렬</h3>
    <div class="terms-filter-options">
      <label class="terms-radio-option">
        <input type="radio" name="sort" value="alphabetical" checked>
        <span class="terms-option-text">가나다순</span>
      </label>
      <label class="terms-radio-option">
        <input type="radio" name="sort" value="frequency">
        <span class="terms-option-text">자주 검색된 순</span>
      </label>
      <label class="terms-radio-option">
        <input type="radio" name="sort" value="recent">
        <span class="terms-option-text">최근 추가된 순</span>
      </label>
    </div>
  </div>

  <!-- 옵션 필터 -->
  <div class="terms-filter-card">
    <h3 class="terms-filter-title">옵션</h3>
    <div class="terms-filter-options">
      <label class="terms-checkbox-option">
        <input type="checkbox" name="example" value="include">
        <span class="terms-option-text">예시 포함</span>
      </label>
      <label class="terms-checkbox-option">
        <input type="checkbox" name="related" value="include">
        <span class="terms-option-text">관련 용어 표시</span>
      </label>
    </div>
    <button type="button" class="terms-reset-filters">필터 초기화</button>
  </div>
</aside>
