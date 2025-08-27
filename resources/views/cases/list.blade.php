<!DOCTYPE html>
<html>
<head>
    <title>해결사례 목록</title>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .case-item { padding: 15px 0; border-bottom: 1px solid #eee; }
        .case-title { font-size: 16px; font-weight: bold; margin-bottom: 5px; }
        .case-title a { color: #333; text-decoration: none; }
        .case-summary { color: #666; margin-bottom: 5px; }
        .case-meta { font-size: 12px; color: #999; }
        .pagination { margin-top: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h1>해결사례 목록</h1>
        
        @foreach($items as $case)
            <div class="case-item">
                <div class="case-title">
                    <a href="{{ route('cases.show', $case->id) }}">{{ $case->title }}</a>
                </div>
                <div class="case-summary">{{ $case->summary }}</div>
                <div class="case-meta">
                    {{ $case->published_at->format('Y-m-d') }} · 
                    @if($case->lawfirm) {{ $case->lawfirm->name }} @endif
                </div>
            </div>
        @endforeach
        
        <div class="pagination">
            {{ $items->links() }}
        </div>
    </div>
</body>
</html>
