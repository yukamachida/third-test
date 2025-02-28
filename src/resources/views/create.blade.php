<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
</head>

<body>
    <h1>Weight Logを追加</h1>
    <form method="POST" action="/weight_logs/store">
        @csrf
        <label class="label">日付</label>
        <input type="date" id="date" name="date" value="{{ date('Y-m-d') }}" required>
        <label class="label">体重</label>
        <input type="number" id="" name="weight" required>


        <label class="label">摂取カロリー</label>
        <input type="number" id="calories" name="calories" required>


        <label class="label">運動時間</label>
        <input type="time" id="exercise_time" name="exercise_time" required>


        <label class="label">運動内容</label>
        <textarea id="exercise_content" name="exercise_content" required></textarea>

        <a href="/weight_logs" class="back">戻る</a>
        <button type="submit">登録</button>
    </form>

</body>

</html>