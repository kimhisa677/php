<?php

extract($_POST);
$errors = [];

//名前
if (empty($namesei)) {
    $errors['aname'] = "名前（姓）が未入力です";
}
if (empty($namemei)) {
    $errors['namemei'] = "名前（名）が未入力です";
}
if (empty($sei_kana)) {
    $errors['sei_kana'] = "ふりがな（せい）が未入力です";
}
if (empty($mei_kana)) {
    $errors['mei_kana'] = "ふりがな（めい）が未入力です";
}
if (empty($juusho)) {
    $errors['juusho'] = "住所が未入力です";
}
if (empty($dennwa)) {
    $errors['dennwa'] = "電話番号が未入力です";
}
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
        <?php if (empty($errors)) { ?>
            <form action="./complate.php" method="post">
                <div class="mb-3 row">
                    <label for="namesei" class="col-sm-2 col-form-label">名前（姓）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namesei" readonly class="form-control-plaintext" id="namesei" value="<?php echo $_POST['namesei']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namemei" class="col-sm-2 col-form-label">名前（名）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namemei" class="form-control" id="namemei" value="<?php echo $_POST['namemei']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sei_kana" class="col-sm-2 col-form-label">ふりがな（せい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="sei_kana" class="form-control" id="sei_kana" value="<?php echo $_POST['sei_kana']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mei_kana" class="col-sm-2 col-form-label">ふりがな（めい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="mei_kana" class="form-control" id="mei_kana" value="<?php echo $_POST['mei_kana']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="juusho" class="col-sm-2 col-form-label">住所</label>
                    <div class="col-sm-10">
                        <input type="text" name="juusho" class="form-control" id="juusho" value="<?php echo $_POST['juusho']; ?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="dennwa" class="col-sm-2 col-form-label">電話番号</label>
                        <div class="col-sm-10">
                            <input type="tel" name="dennwa" class="form-control" id="dennwa" value="<?php echo $_POST['dennwa']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="seki_otona" class="col-sm-2 col-form-label">席数（大人）</label>
                        <div class="col-sm-10">
                            <input type="number" name="seki_otona" class="form-control" id="seki_otona" value="<?php echo $_POST['seki_otona']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="seki_gaki" class="col-sm-2 col-form-label">席数（子供）</label>
                        <div class="col-sm-10">
                            <input type="number" name="seki_gaki" class="form-controlt" id="seki_gaki" value="<?php echo $_POST['seki_gaki']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jikan" class="col-sm-2 col-form-label">時間</label>
                        <div class="col-sm-10">
                            <input type="time" name="jikan" class="form-control" id="jikan" value="<?php echo $_POST['jikan']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie" class="col-sm-2 col-form-label">閲覧映画</label>
                        <div class="col-sm-10">
                            <?php echo $_POST['movie']; ?>
                            <input type="hidden" name="movie" value="<?php echo $_POST['movie']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="支払い" class="col-sm-2 col-form-label">支払い</label>
                        <div class="col-sm-10">
                            <?php echo $_POST['payment']; ?>
                            <input type="hidden" name="支払い" value="<?php echo $_POST['hidden']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kaiinsho" class="col-sm-2 col-form-label">会員証</label>
                        <div class="col-sm-10">
                            <input type="password" name="kaiinsho" class="form-control" id="inputPassword" value="<?php echo $_POST['kaiinsho']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
                        <div class="col-sm-10">
                            <?php echo $_POST['shokugyou']; ?>
                            <input type="hidden" name="shokugyou" value="<?php echo $_POST['shokugyou']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode("<br>", $errors); ?>
            </div>
            <form action="./confirm.php" method="post">
                <div class="mb-3 row">
                    <label for="namesei" class="col-sm-2 col-form-label">名前（姓）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namesei" class="form-control <?php echo in_array("aname", array_keys($errors)) ? "is-invalid" : "" ?>" id="namesei" value="<?php echo $_POST['namesei']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namemei" class="col-sm-2 col-form-label">名前（名）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namemei" class="form-control <?php echo in_array("namemei", array_keys($errors)) ? "is-invalid" : "" ?>" id="namemei" value="<?php echo $_POST['namemei']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sei_kana" class="col-sm-2 col-form-label">ふりがな（せい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="sei_kana" class="form-control <?php echo in_array("sei_kana", array_keys($errors)) ? "is-invalid" : "" ?>" id="sei_kana" value="<?php echo $_POST['sei_kana']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mei_kana" class="col-sm-2 col-form-label">ふりがな（めい）</label>
                    <div class="col-sm-10">

                        <input type="text" name="mei_kana" class="form-control <?php echo in_array("sei_kana", array_keys($errors)) ? "is-invalid" : "" ?>" id="mei_kana" value="<?php echo $_POST['mei_kana']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="juusho" class="col-sm-2 col-form-label">住所</label>
                    <div class="col-sm-10">
                        <input type="text" name="juusho" class="form-control <?php echo in_array("juusho", array_keys($errors)) ? "is-invalid" : "" ?>" id="juusho" value="<?php echo $_POST['juusho']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dennwa" class="col-sm-2 col-form-label">電話番号</label>
                    <div class="col-sm-10">
                        <input type="number" name="dennwa" class="form-control <?php echo in_array("dennwa", array_keys($errors)) ? "is-invalid" : "" ?>" id="dennwa" value="<?php echo $_POST['dennwa']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seki_otona" class="col-sm-2 col-form-label">席数（大人）</label>
                    <div class="col-sm-10">
                        <input type="number" name="seki_otona" class="form-control" id="seki_otona" value="<?php echo $_POST['seki_otona']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seki_gaki" class="col-sm-2 col-form-label">席数（子供）</label>
                    <div class="col-sm-10">
                        <input type="number" name="seki_gaki" class="form-control" id="seki_gaki" value="<?php echo $_POST['seki_gaki']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jikan" class="col-sm-2 col-form-label">時間</label>
                    <div class="col-sm-10">
                        <input type="time" name="jikan" class="form-control" id="jikan" value="<?php echo $_POST['jikan']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="movie" class="col-sm-2 col-form-label">閲覧映画</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="movie" id="movie">
                            <option selected disabled>選択してください</option>
                            <option <?php if ($_POST["movie"] === 'イエスマン') echo " selected"; ?>  value="イエスマン">イエスマン"</option>
                            <option <?php if ($_POST["movie"] === 'ビリギャル') echo " selected"; ?>  value="ビリギャル">ビリギャル</option>
                            <option <?php if ($_POST["movie"] === '君の名は') echo " selected"; ?>  value="君の名は">君の名は</option>
                            <option <?php if ($_POST["movie"] === 'アンパンマン') echo " selected"; ?>  value="アンパンマン">アンパンマン</option>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="支払い" class="col-sm-2 col-form-label">支払い</label>
                    <div class="col-sm-10">
                        <?php echo $_POST['payment']; ?>
                        <input type="hidden" name="支払い" value="<?php echo $_POST['hidden']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kaiinsho" class="col-sm-2 col-form-label">会員証</label>
                    <div class="col-sm-10">
                        <input type="password" name="kaiinsho" class="form-control" id="inputPassword" value="<?php echo $_POST['kaiinsho']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
                    <div class="col-sm-10">
                        <?php echo $_POST['shokugyou']; ?>
                        <input type="hidden" name="shokugyou" value="<?php echo $_POST['shokugyou']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>