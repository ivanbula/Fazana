<?php $naslovStranice = 'Dogadjaj'; ?>
<?php include 'partials/header.php'; ?>

<header class="headers">
  <img src="img/dogadjanja.webp" alt="">
</header>

<section class="intro container">
    <h1>Događanja</h1>
    <p>Fažana, mjesto polaska u otkrivanju...</p>
</section>

 <!-- dogadjaji -->
 <section class="dogadjaji">
      <div class="container">
        <?php include 'partials/dogadjanja-part.php'; ?>
      </div>
  </section>

<?php include 'partials/footer.php'; ?>