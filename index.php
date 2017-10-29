<?php get_header(); ?>
<body>
  <style>
    .color1 {background: <?= the_field('color1'); ?> !important;}
    .color2 {background: <?= the_field('color2'); ?> !important;}
    .color3 {color: <?= the_field('color3'); ?> !important;}
    .color4 {color: <?= the_field('color4'); ?> !important;}

    body {
      color: <?= the_field('color3'); ?>;
      background: <?= the_field('color2'); ?>;
    }
    @media screen and (min-width: 494px) {
      body {
        background: <?= the_field('color1'); ?>;
      }
    }
  </style>

  <div id="app" class="color2">
    <header>
      <h1 class="color4"><?= the_field('je_name'); ?></h1>
      <h2 class="color4"><?= the_field('je_slogan'); ?></h2>
    </header>

    <div class="view view--welcome">
      <p><?= the_field('header_intro'); ?></p>
      <p><?= the_field('header_precisions'); ?></p>

      <?php if (get_field('emailcheck_boolean')): ?>
        <form method="post" class="emailcheck--true">
          <label for="heticmail--text">Entre ton mail @<?= the_field('emailcheck_domain') ?></label>
          <input required type="email" name="heticmail--text" value="" placeholder="prenom.nom@<?= the_field('emailcheck_domain') ?>" autocomplete="email" pattern="([a-zA-Z0-9\.\-]*)?@(<?= the_field('emailcheck_domain') ?>)">
          <input required type="submit" name="heticmail--submit" class="color1" value="Vérifier mon mail">
          <input type="text" name="heticmail-imothep" value="" style='height:0;opacity:0;visibility:hidden;margin:0;'>
        </form>
      <?php else: ?>
        <form method="post" class="emailcheck--false">
          <input required type="submit" name="heticmail--submit" class="color1" value="Remplir le formulaire">
          <input type="text" name="heticmail-imothep" value="" style='height:0;opacity:0;visibility:hidden;margin:0;'>
        </form>
      <?php endif; ?>
    </div>

    <div class="view view--form">
      <?php echo do_shortcode( '[contact-form-7 id="52" title="Formulaire d\'adhésion"]' ); ?>
      <span class="hidden-rules" data-href="<?= the_field('je_rules') ?>" style="display:none;"></span>

      <?php
        $stripe_code = '[direct-stripe type="payment" amount="'.get_field('stripe_amount').'00" name="'.get_field('je_name').'" description="Adhésion" label="Payer mon adhésion" panellabel="Payer"]';
        echo do_shortcode($stripe_code);
      ?>
    </div>

    <div class="view view--confirmation">
      <span><?= the_field('confirmation_text'); ?></span>
      <p>Tu peux d’ores et déjà nous suivre sur les réseaux sociaux :</p>
      <div class="social">
        <?php if(get_field('je_fb')): ?>
          <a href="<?= the_field('je_fb') ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
              <path fill="<?= the_field('color1'); ?>" d="M22.52.76H3.48C1.98.76.76 1.98.76 3.48v19.04c0 1.5 1.22 2.72 2.72 2.72H13v-9.52h-2.72v-3.37H13V9.57c0-2.95 1.65-5 5.12-5h2.45V8.1h-1.62c-1.36 0-1.87 1.02-1.87 1.96v2.3h3.5l-.78 3.36h-2.72v9.52h5.44c1.5 0 2.72-1.22 2.72-2.72V3.48c0-1.5-1.22-2.72-2.72-2.72z"/>
            </svg>
          </a>
        <?php endif; ?>

        <?php if (get_field('je_tw')) : ?>
          <a href="<?= the_field('je_tw') ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="22" viewBox="0 0 26 22">
              <path fill="<?= the_field('color1'); ?>" d="M22.55 5.775c.01.22.015.443.015.663 0 6.787-5.164 14.61-14.607 14.61-2.9 0-5.597-.85-7.87-2.31.403.05.81.074 1.224.074 2.407 0 4.62-.822 6.376-2.197-2.246-.042-4.143-1.524-4.796-3.564.313.06.635.09.966.09.47 0 .923-.06 1.353-.176-2.346-.473-4.115-2.547-4.115-5.036v-.064c.692.385 1.485.616 2.326.643-1.38-.922-2.285-2.49-2.285-4.274 0-.94.253-1.82.696-2.58C4.36 4.757 8.147 6.8 12.413 7.015c-.087-.377-.132-.767-.132-1.17 0-2.835 2.297-5.132 5.133-5.132 1.477 0 2.81.62 3.748 1.62 1.17-.232 2.27-.66 3.26-1.246-.38 1.198-1.195 2.204-2.254 2.84 1.04-.126 2.026-.4 2.948-.81-.688 1.032-1.56 1.935-2.562 2.658z"/>
            </svg>
          </a>
        <?php endif; ?>

        <?php if (get_field('je_lk')) : ?>
          <a href="<?= the_field('je_lk') ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
              <path fill="<?= the_field('color1'); ?>" d="M4.55 2.276c0 1.25-.795 2.275-2.274 2.275C.91 4.55 0 3.53 0 2.39 0 1.137.91 0 2.276 0 3.64 0 4.55 1.024 4.55 2.276zM0 20.48h4.55V5.69H0v14.79zM15.474 5.916c-2.39 0-3.755 1.366-4.324 2.276h-.114l-.227-1.934h-4.1c0 1.25.114 2.73.114 4.437v9.785h4.55v-8.078c0-.455 0-.797.115-1.138.34-.796.91-1.82 2.16-1.82 1.594 0 2.277 1.365 2.277 3.185v7.85h4.55v-8.42c0-4.21-2.162-6.146-5.006-6.146z"/>
            </svg>
          </a>
        <?php endif; ?>

        <?php if (get_field('je_yt')) : ?>
          <a href="<?= the_field('je_yt') ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="22" viewBox="0 0 28 22">
              <path fill="<?= the_field('color1'); ?>" d="M14 .53C.63.53.4 1.73.4 11c0 9.28.23 10.47 13.6 10.47S27.6 20.27 27.6 11C27.6 1.72 27.37.53 14 .53zm4.36 10.92l-6.1 2.85c-.54.25-.98-.03-.98-.62V8.32c0-.6.44-.87.97-.62l6.1 2.85c.54.25.54.65 0 .9z"/>
            </svg>
          </a>
        <?php endif; ?>
      </div>
    </div>

    <footer>
      <p>
        <strong><?= the_field('footer_text1'); ?></strong>
        <br>
        <?= the_field('footer_text2'); ?>
      </p>
      <a href="<?= the_field('je_website') ?>"><img src="<?= the_field('je_logo'); ?>" alt="Logo de <?= the_field('je_name') ?>"></a>
    </footer>
  </div>

</body>
<?php get_footer(); ?>
