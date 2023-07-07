<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
extract($_POST);
$errors = [];

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'test';

$mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);
$wheres = [];
if (!empty($namesei)) {
 $wheres[] = "(`name sei kanji` LIKE '%{$namesei}%' OR `name Mei kanji` LIKE ' %{$namesei}%')";
}

//開始と終了がどちらも入っている時
if (!empty($created_at_start) && !empty($created_at_end)) {
}
//開始しか入ってない時
else if (!empty($created_at_start)) {
    $wheres[] = "created_at>='{$created_at_start}'";
}
//終了しか入っていない時
else if (!empty($created_at_end)) {
    $wheres[] = "created_at<='{$created_at_end}'";
}

if ($mysqli->connect_error) {
    $errors[] = "[{$mysqli->connect_errno}]::MySQLのエラーです";
} else {
    // 接続成功時の処理
    $query  = "SELECT id, created_at, `name sei kanji`, `name Mei kanji`, `name sei kana`, `name mei kana`, eturan,jikan,kanin FROM form ORDER BY id ASC";
    $stmt   = $mysqli->prepare($query);

    if (!empty($wheres)) {
        $where  = implode(" AND ", $wheres);
        $query  = "SELECT id, created_at, `name sei kanji`, `name Mei kanji`, `name sei kana`, `name mei kana`, eturan,jikan,kanin FROM form WHERE {$where} ORDER BY id ASC";
        $stmt   = $mysqli->prepare($query);
    }
    try {
        $stmt->execute();

        $rows = [];
        $result = $stmt->get_result();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
    } catch (Exception $e) {
        $errors[] = "[99999]::{$e->getMessage()}";
    }
}

$mysqli->close();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>映画観覧予約フォーム</h1>
        <form method="post" action="./list.php">
            <div class="mb-3 row">
                <label for="jikan" class="col-sm-2 col-form-label">時間</label>
                <div class="col-sm-10">
                    <input type="time" name="jikan" class="form-control" id="jikan" value="<?php echo $_POST['jikan']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namesei" class="col-sm-2 col-form-label">名前</label>
                <div class="col-sm-10">
                    <input type="text" name="namesei" class="form-control" id="namesei">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="movie" class="col-sm-2 col-form-label">閲覧映画</label>
                <div class="col-sm-10">
                    <select class="form-select" name="movie" id="movie">
                        <option selected disabled>選択してください</option>
                        <option selected value="イエスマン">イエスマン"</option>
                        <option value="ビリギャル">ビリギャル</option>
                        <option value="君の名は">君の名は</option>
                        <option value="アンパンマン">アンパンマン</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-info">検索</button>
        </form>
        <?php if (empty($errors)) { ?>
            <table class="table table-primary table-striped">
                <thead>
                    <th>ID</th>
                    <th>予約日時</th>
                    <th>名前<br>（ふりがな）</th>
                    <th>映画タイトル</th>
                    <th>来場予定時間</th>
                    <th>会員所番号</th>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                            <td>
                                <?php echo htmlspecialchars("{$row['name sei kanji']} {$row['name Mei kanji']}"); ?>
                                <br>
                                <?php echo htmlspecialchars("{$row['name sei kana']} {$row['name mei kana']}"); ?>
                            </td>
                            <td><?php echo htmlspecialchars($row['eturan']); ?></td>
                            <td><?php echo htmlspecialchars($row['jikan']); ?></td>
                            <td><?php echo htmlspecialchars($row['kanin']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode("<br>", $errors); ?>
            </div>

        <?php } ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>