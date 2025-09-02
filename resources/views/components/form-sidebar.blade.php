<!-- 서식 사이드바 컴포넌트 -->
<aside class="form-sidebar">
  <!-- 분야 필터 -->
  <div class="form-filter-card">
    <h3 class="form-filter-title">분야</h3>
    <div class="form-filter-options">
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="criminal">
        <span class="form-option-text">형사</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="civil">
        <span class="form-option-text">민사</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="family">
        <span class="form-option-text">가사/상속</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="labor">
        <span class="form-option-text">노동</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="realestate">
        <span class="form-option-text">부동산·건설</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="commercial">
        <span class="form-option-text">상사/회사</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="ip">
        <span class="form-option-text">지재/콘텐츠</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="field" value="administrative">
        <span class="form-option-text">행정/조세</span>
      </label>
    </div>
  </div>

  <!-- 문서 유형 필터 -->
  <div class="form-filter-card">
    <h3 class="form-filter-title">문서 유형</h3>
    <div class="form-filter-options">
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="complaint">
        <span class="form-option-text">소장</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="agreement">
        <span class="form-option-text">합의서</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="apology">
        <span class="form-option-text">반성문</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="statement">
        <span class="form-option-text">진술서</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="opinion">
        <span class="form-option-text">의견서</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="certified_mail">
        <span class="form-option-text">내용증명</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="objection">
        <span class="form-option-text">이의신청서</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="doc_type" value="evidence_preservation">
        <span class="form-option-text">증거보존요청서</span>
      </label>
    </div>
  </div>

  <!-- 파일 형식 필터 -->
  <div class="form-filter-card">
    <h3 class="form-filter-title">파일 형식</h3>
    <div class="form-format-buttons">
      <button type="button" class="form-format-button">DOCX</button>
      <button type="button" class="form-format-button">HWPX</button>
      <button type="button" class="form-format-button">PDF</button>
    </div>
  </div>

  <!-- 옵션 필터 -->
  <div class="form-filter-card">
    <h3 class="form-filter-title">옵션</h3>
    <div class="form-filter-options">
      <label class="form-checkbox-option">
        <input type="checkbox" name="guide" value="include">
        <span class="form-option-text">작성 가이드 포함</span>
      </label>
      <label class="form-checkbox-option">
        <input type="checkbox" name="example" value="include">
        <span class="form-option-text">예시 기재 본문 포함</span>
      </label>
    </div>
    <button type="button" class="form-reset-filters">필터 초기화</button>
  </div>
</aside>
