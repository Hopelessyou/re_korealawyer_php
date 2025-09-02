<!-- 판례 사이드바 컴포넌트 -->
<aside class="precedent-sidebar">
  <!-- 분야 필터 -->
  <div class="precedent-filter-card">
    <h3 class="precedent-filter-title">분야</h3>
    <div class="precedent-filter-options">
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="criminal">
        <span class="precedent-option-text">형사</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="civil">
        <span class="precedent-option-text">민사</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="family">
        <span class="precedent-option-text">가사/상속</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="labor">
        <span class="precedent-option-text">노동</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="realestate">
        <span class="precedent-option-text">부동산·건설</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="commercial">
        <span class="precedent-option-text">상사/회사</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="ip">
        <span class="precedent-option-text">지재/콘텐츠</span>
      </label>
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="field" value="administrative">
        <span class="precedent-option-text">행정/조세</span>
      </label>
    </div>
  </div>

  <!-- 법원 필터 -->
  <div class="precedent-filter-card">
    <h3 class="precedent-filter-title">법원</h3>
    <div class="precedent-filter-options">
      <label class="precedent-radio-option">
        <input type="radio" name="court" value="all" checked>
        <span class="precedent-option-text">전체</span>
      </label>
      <label class="precedent-radio-option">
        <input type="radio" name="court" value="supreme">
        <span class="precedent-option-text">대법원</span>
      </label>
      <label class="precedent-radio-option">
        <input type="radio" name="court" value="high">
        <span class="precedent-option-text">고등법원</span>
      </label>
      <label class="precedent-radio-option">
        <input type="radio" name="court" value="district">
        <span class="precedent-option-text">지방법원</span>
      </label>
    </div>
  </div>

  <!-- 선고 연도 필터 -->
  <div class="precedent-filter-card">
    <h3 class="precedent-filter-title">선고 연도</h3>
    <div class="precedent-year-buttons">
      <button type="button" class="precedent-year-button">2025</button>
      <button type="button" class="precedent-year-button">2024</button>
      <button type="button" class="precedent-year-button">2023</button>
      <button type="button" class="precedent-year-button">2022</button>
      <button type="button" class="precedent-year-button">2021</button>
    </div>
  </div>

  <!-- 옵션 필터 -->
  <div class="precedent-filter-card">
    <h3 class="precedent-filter-title">옵션</h3>
    <div class="precedent-filter-options">
      <label class="precedent-checkbox-option">
        <input type="checkbox" name="explanation" value="only">
        <span class="precedent-option-text">해설 있는 판례만</span>
      </label>
    </div>
    <button type="button" class="precedent-reset-filters">필터 초기화</button>
  </div>
</aside>
