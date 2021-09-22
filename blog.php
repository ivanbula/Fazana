<?php $naslovStranice = 'Bloguj me'; ?>
<?php include 'partials/header.php'; ?>

<header class="headers">
  <img src="img/blog1.webp" alt="">
</header>

<section class="intro container">
    <h1>Blog</h1>
    <p>Fažana, mjesto polaska u otkrivanju...</p>
</section>

<section class="blog container">
    <article>
        <div class="post">
            <div class="featuredImage">
                <img src="img/blog2.webp" alt="">
            </div>
            <div class="text">
                <h4>Pješačenje</h4>
                <div class="meta">05.08.2021 | <a href="">Admin</a></div>
                <p>Pješačenjem možete na najbolji mogući način doživjeti...</p>
                <a href="blog1.php" class="btn">Više &gt;</a>
            </div>
        </div>
        <div class="post">
            <div class="featuredImage">
                <img src="img/blog3.webp" alt="">
            </div>
            <div class="text">
                <h4>Bicikliranje</h4>
                <div class="meta">05.08.2021 | <a href="">Admin</a></div>
                <p>Doživite Fažanu biciklirajući...</p>
                <a href="blog2.php" class="btn">Više &gt;</a>
            </div>
        </div>
        <div class="post">
            <div class="featuredImage">
                <img src="img/blog4.webp" alt="">
            </div>
            <div class="text">
                <h4>Dragulji starogradske jezgre</h4>
                <div class="meta">05.08.2021 | <a href="">Admin</a></div>
                <p>Pješačenjem možete na najbolji mogući način doživjeti...</p>
                <a href="blog3.php" class="btn">Više &gt;</a>
            </div>
        </div>
    </article>
    <aside>
        <?php include 'partials/sidebar.php'; ?>
    </aside>
</section>

<?php include 'partials/footer.php'; ?>