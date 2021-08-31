<body>
    <form method="post" action="/Form/thankyou">
        <div id="app">
            <h1 class="register">登録確認</h1>
            <div class="element_wrap">
                <b><label>名前:</label></b>
                <?php echo $your_name; ?>
            </div>
            <div class="element_wrap">
                <b><label>カナ:</label></b>
                <?php echo $kana; ?>
            </div>
            <div class="element_wrap">
                <b><label>電話:</label></b>
                <?php echo $tel; ?>
            </div>
            <div class="element_wrap">
                <b><label>e-mail:</label></b>
                <?php echo $mail; ?>
            </div>
            <div class="element_wrap">
                <b><label>パスワード</label></b>
                <?php echo $password; ?>
            </div>
            <div class="element_wrap">
                <b><label>生まれ年:</label></b>
                <?php echo $year; ?>
                </select>
            </div>
            <div class="element_wrap">
                <b><label>性別:</label></b>
                <?php echo $gender == "1" ? "男性" : "女性"; ?>
            </div>
            <input type="submit" class="btn btn-primary" name="btn_submit" value="登録">
            <div class=backBtn>
                <a href="/form/index">戻る</a>
            </div>
        </div>
        <input type="hidden" name="your_name" value="<?php echo $your_name; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <input type="hidden" name="year" value="<?php echo $year; ?>">
        <input type="hidden" name="gender" value="<?php if ($gender == "1") {
                                                            echo "男性";
                                                        } else {
                                                            echo "女性";
                                                        } ?>">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>