<?php
/*
 * Template name: contato
*/
get_header();
?>
<?php include(get_template_directory()."/page-reference.php"); ?>
<section class="contact">
  <div class="container">
    <div class="contact-presentation whole-block">
      <h2 class="text-title text-blue text-center">Fale Conosco</h2>
      <span class="text-grey whole-block text-center">Nós estamos mais próximos do que você imagina.</span>
    </div>
    <div class="row write-for-us">
      <div class="col-xs-12 col-md-4 left-side">
        <h4 class="text-blue text-subtitle">Você pode escrever pra gente!</h4>
        <span class="whole-block text-justify text-grey">Basta preencher o nosso formulário. Você tambem pode no enviar um email pelo nosso endereço:</span>
        <a class="text-grey"href="mailto:contato@conceptionengenharia.com.br"><i class="fa fa-envelope-o" aria-hidden="true"></i> contato@conceptionengenharia.com.br </a>
      </div>
      <div class="col-xs-12 col-md-8 right-side form no-padding">
        <?php do_shortcode('[contact-form-7 id="44" title="Contact form 1"]') ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
