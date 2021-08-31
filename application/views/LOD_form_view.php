<body>
    <form method="post" action="/Form/add_form" enctype="multipart/form-data">
        <div id="app">
            <div class="form">
                <h1 class="register">会員登録</h1>
                <div class="error">
                    <ul class="error_list">
                        <?php echo validation_errors(); ?>
                    </ul>
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>名前</p>
                    <input type="text" class="Form-Item-Input" placeholder="例）山田太郎" name="your_name" value="">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>フリガナ</p>
                    <input type="text" class="Form-Item-Input" placeholder="例）ヤマダタロウ" name="kana" value="">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                    <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000" name="tel" value="">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                    <input type="text" class="Form-Item-Input" placeholder="例）tarouyamada@gmail.com" name="mail" value="">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>パスワード</p>
                    <input type="password" class="Form-Item-Input" name="password" value="">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>生まれ年</p>
                    <?php $year = date('Y'); ?>
                    <select name="year" class="form-control">
                        <option name="year" value="">選択して下さい</option>
                        <?php
                        for ($i = 1900; $i <= $year; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>性別</p>
                    <div>
                        <input class="sex" type="radio" name="gender" value="1">男性
                        <input class="sex" type="radio" name="gender" value="2">女性
                    </div>
                </div>
                <div class="verification">
                    <input type="submit" class="btn btn-primary" name="btn_confirm" value="確 認">
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>