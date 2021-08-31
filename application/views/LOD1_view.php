<body>
    <div class="sample-box">
        <div class="title">
            <h1>Do you<br>like or dislike?</h1>
            <h2>好きですか？嫌いですか？</h2>
        </div>
        <div class="product">
            <div class="img">
                <img src="/assets/img/<?= $product["IMAGE"] ?>" alt="タイパンツ 2,000円" width="360px" height="auto" />
            </div>
            <input id="product_number" type="hidden" name="product_number" value="<?= $product["ID"] ?>">
            <input id="product_name" type="hidden" name="product_name" value="<?= $product["PRODUCT_NAME"] ?>">
            <div class="judgment">
                <div class="good">
                    <input class="judg_good" type="button" value="Good" id="like" onclick="OnButtonClickLike();" />
                </div>
                <div class="hate">
                    <input class="judg_hate" type="button" value="Bad" id="dislike" onclick="OnButtonClickDislike();" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
        function OnButtonClickLike() {
            let number;
            $.ajax({
                url: "/LikeorDislike/click", // URLを指定
                type: "POST", // GET,POSTなどを指定
                data: { // データを指定
                    id: document.getElementById("product_number").value,
                    name: document.getElementById("product_name").value,
                    like: 1,
                    dislike: null
                }
            }).done(function(data) {
                // 通信成功時のコールバック処理
                location.href = '/LikeorDislike/product/' + data;
            }).fail(function(data) {
                // 通信失敗時のコールバック処理
            }).always(function(data) {
                // 常に実行する処理
            });
        }

        function OnButtonClickDislike() {
            $.ajax({
                url: "/LikeorDislike/click", // URLを指定
                type: "POST", // GET,POSTなどを指定
                data: { // データを指定
                    id: document.getElementById("product_number").value,
                    name: document.getElementById("product_name").value,
                    like: null,
                    dislike: 1
                }
            }).done(function(data) {
                // 通信成功時のコールバック処理
                location.href = '/LikeorDislike/product/' + data;
            }).fail(function(data) {
                // 通信失敗時のコールバック処理
            }).always(function(data) {
                // 常に実行する処理
            });
        }
    </script>

</body>

</html>