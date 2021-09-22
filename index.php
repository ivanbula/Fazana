<?php $naslovStranice = 'Home'; ?>
<?php include 'partials/header.php'; ?>

    <!-- header -->
    <header class="mainHeader">
        <hgroup>
            <h2>Čarobno malo mjesto</h2>
        </hgroup>
    </header>

  <!-- istrazite -->

  <section class="istrazite container">
          <h2>Istražite</h2>
          <?php include 'partials/istrazite-part.php'; ?>
  </section>

  <!-- dogadjaji -->
  <section class="dogadjaji bkg">
      <div class="container">
        <h2>Događanja u Fažani</h2>
        <?php include 'partials/dogadjanja-part.php'; ?>
      </div>
  </section>

  <?php include 'partials/footer.php'; ?>




