<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
</head>
<body>
    <div class="container">
        <h2>体重情報の入力</h2>
    
        <form method="POST" action="/weight_logs">
            @csrf
            <div class="form-group">
                <label for="current_weight">現在の体重</label>
                <input id="current_weight" type="number" step="0.1" class="form-control" name="current_weight"
                    value="{{ old('current_weight') }}" required>
            </div>
    
            <div class="form-group">
                <label for="target_weight">目標体重</label>
                <input id="target_weight" type="number" step="0.1" class="form-control" name="target_weight"
                    value="{{ old('target_weight') }}" required>
            </div>
    
            <button type="submit" class="btn btn-primary">アカウント作成</button>
        </form>
    </div>
</body>
</html>