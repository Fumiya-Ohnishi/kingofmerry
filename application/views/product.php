<body>
    <header>
        <div class="header_logo">
            <img src="/assets/img/kingofmerry.jpg">
        </div>
        <h1>
            Do you
            <br>
            Like or Dislike?
        </h1>
        <h2>好きですか？嫌いですか？</h2>
    </header>
    <div class="product_wrapper">
        <?php foreach ($product_list as $key => $value) { ?>
            <div class="center_wrapper">
                <div class="space_wrapper">
                    <div class="product_img">
                        <a href="#info<?= $key ?>" class="modal-open"><img src="/assets/img/<?php echo $value["image"]; ?>"></a>
                    </div>
                    <div class="right_text">
                        <ul class="text_wrapper">
                            <li>商品名：<?php echo $value["name"]; ?></li>
                            <li>価格：<?php echo $value["price"]; ?>円</li>
                        </ul>
                        <div class="icon">
                            <img src="/assets/img/good.jpg" alt="goodボタン"> <?php echo $value['good'] ?> 回
                            <img src="/assets/img/bad.jpg" alt="badバタン"> <?php echo $value['bad'] ?> 回
                        </div>
                    </div>
                </div>
            </div>

            <section id="info<?= $key ?>" class="hed">
                <div class="info_space">
                    <img class="info-img" src="/assets/img/<?php echo $value["image"]; ?>">
                    <?php echo $value["text"]; ?>
                </div>
            </section>
        <?php } ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <script type="text/javascript" src="/assets/jquery.cookie.js"></script>
    <script type="text/javascript" src="/assets/product_style.js"></script>
</body>

</html>