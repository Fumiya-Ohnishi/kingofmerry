<body>
    <div class="error">
        <ul class="error_list">
            <?php echo validation_errors(); ?>
        </ul>
    </div>
    <div id="app">
        <div class="form">
            <h1>ログイン</h1>
            <form action="/login/index" method="post">
                <div class=elemnt_wrap>
                    <label for="exampleInputEmail1">ログインID</label>
                    <input type="text" class="form-control" name="id" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"> ※お客様のe-mailアドレスは保護されますのでご安心下さい。</small>
                </div>
                <div class=element_wrap>
                    <label>パスワード</label>
                    <input type="password" class="form-control" name="password"><br><br>
                </div>
                <div class=element_wrap>
                    <input type="submit" class="btn btn-primary" name="submit" value="ログイン">
                </div>
            </form>
            <div class=link>
                <p>初めての方は<a href="/Form/index">こちら</a></p>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>