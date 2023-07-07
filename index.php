<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>映画観覧予約フォーム</h1>
        <form action="confirm.php" method="post">
            <div class="mb-3 row">
                <label for="namesei" class="col-sm-2 col-form-label">名前（姓）</label>
                <div class="col-sm-10">

                    <input type="text" name="namesei" class="form-control" id="namesei">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namemei" class="col-sm-2 col-form-label">名前（名）</label>
                <div class="col-sm-10">
                    <input type="text" name="namemei" class="form-control" id="namemei">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sei_kana" class="col-sm-2 col-form-label">ふりがな（せい）</label>
                <div class="col-sm-10">
                    <input type="text" name="sei_kana" class="form-control" id="sei_kana">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="mei_kana" class="col-sm-2 col-form-label">ふりがな（めい）</label>
                <div class="col-sm-10">
                    <input type="text" name="mei_kana" class="form-control" id="mei_kana">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="juusho" class="col-sm-2 col-form-label">住所</label>
                <div class="col-sm-10">
                    <input type="text" name="juusho" class="form-control" id="juusho">
                </div>
                <div class="mb-3 row">
                    <label for="dennwa" class="col-sm-2 col-form-label">電話番号</label>
                    <div class="col-sm-10">
                        <input type="tel" name="dennwa" class="gname" id="dennwa">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seki_otona" class="col-sm-2 col-form-label">席数（大人）</label>
                    <div class="col-sm-10">
                        <input type="number" name="seki_otona" class="form-control" id="seki_otona">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seki_gaki" class="col-sm-2 col-form-label">席数（子供）</label>
                    <div class="col-sm-10">
                        <input type="number" name="seki_gaki" class="form-control" id="seki_gaki">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jikan" class="col-sm-2 col-form-label">時間</label>
                    <div class="col-sm-10">
                        <input type="time" name="jikan" class="form-control" id="jikan">
                    </div>
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
            <div class="mb-3 row">
                <label for="payment" class="col-sm-2 col-form-label">支払い</label>
                <div class="col-sm-10">
                    <select class="form-select" name="payment" id="payment">
                        <option selected disabled>選択してください</option>
                        <option selected value="カード">カード</option>
                        <option value="現金">現金</option>
                        <option value="交通系">交通系</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kaiinsho" class="col-sm-2 col-form-label">会員証</label>
                <div class="col-sm-10">
                    <input type="password" name="kaiinsho" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
                <div class="col-sm-10">
                    <select class="form-select" name="shokugyou" id=”shokugyu”>
                        <option selected disabled>選択してください</option>
                        <option selected value="自営業">自営業</option>
                        <option value="経営者・役員"></option>
                        <option value="会社員">会社員</option>
                        <option value="契約社員">契約社員</option>
                        <option value="パート・アルバイト">パート・アルバイト</option>
                        <option value="公務員">公務員</option>
                        <option value="医療関係者">医療関係者</option>
                        <option value="主婦">主婦</option>
                        <option value="学生">学生</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>