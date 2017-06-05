<?php
/*
 * Template name: contato
*/
get_header();
?>
<?php 
$imgPage = do_shortcode('[easy_options id="ContactBanner"]');
include(get_template_directory()."/page-reference.php"); ?>
<section class="contact">
  <div class="container">
    <div class="contact-presentation whole-block">
      <h2 class="text-title text-blue text-center">Fale Conosco</h2>
      <span class="text-grey whole-block text-center">Nós estamos mais próximos do que você imagina.</span>
    </div>
    <div class="row write-for-us">
      <div class="col-xs-12 col-md-4 left-side">
        <h3 class="text-blue text-subtitle">Você pode escrever pra gente!</h3>
        <span class="whole-block text-justify text-grey">Basta preencher o nosso formulário. Você tambem pode no enviar um email pelo nosso endereço:</span>
        <a class="text-grey"href="mailto:contato@conceptionengenharia.com.br"><i class="fa fa-envelope-o" aria-hidden="true"></i> contato@conceptionengenharia.com.br </a>
      </div>
      <div class="contact-form col-xs-12 col-md-8 right-side">
          <?php echo do_shortcode('[contact-form-7 id="17" title="Formulário de Contato"]'); ?>
      </div>

    </div>
    <div class="row avaliable">
      <div class="col-xs-12 col-md-4 left-side">
        <h3 class="text-blue text-subtitle">Estamos à sua disposição</h3>
        <span class="whole-block text-justify text-grey "> Fique à vontade. Você já tem o nosso número, acesso às nossas redes sociais, horário de funcionamento, e agora... você ja sabe o caminho</span>
        <div class="map whole-block large-border-blue">
          <a  class="text-center whole-block bg-blue text-white" target="_blank" href="https://www.google.com.br/maps/place/R.+Volunt%C3%A1rios+da+P%C3%A1tria,+2-55+-+Alto+Higien%C3%B3polis,+Bauru+-+SP,+17013-026/@-22.3221575,-49.067846,17z/data=!3m1!4b1!4m5!3m4!1s0x94bf67a36efff8d3:0x7c379602017ed2e!8m2!3d-22.3221575!4d-49.0656573"><i class="fa fa-map-marker" aria-hidden="true"></i> Como Chegar</a>
          <iframe class="whole-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.8329278831116!2d-49.06784598529295!3d-22.322157485312193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf67a36efff8d3%3A0x7c379602017ed2e!2sR.+Volunt%C3%A1rios+da+P%C3%A1tria%2C+2-55+-+Alto+Higien%C3%B3polis%2C+Bauru+-+SP%2C+17013-026!5e0!3m2!1spt-BR!2sbr!4v1483417116057" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-xs-12 col-md-4 center-side">
        <h4 class="text-blue text-subtitle">Informações</h4>
        <div class="col-field whole-block">
          <div class="line-query whole-block">
            <h5 class="text-blue text-subtitle no-padding"> <i class="fa fa-map-o text-blue" aria-hidden="true"></i> Endereço</h5>
            <span class="text-grey whole-block">Rua Voluntários da Pátria, nº2-55</span>
            <span class="text-grey whole-block">Higienópolis, Bauru/São Paulo</span>
          </div>
          <div class="line-query whole-block">
            <h5 class="text-blue text-subtitle no-padding"> <i class="fa fa-clock-o text-blue" aria-hidden="true"></i> Horário de Funcionamento</h5>
            <span class="text-grey whole-block">Segunda à Sexta, 08:00 às 20:00</span>
            <span class="text-grey whole-block">Sábados, 10:00 às 14:00</span>
          </div>
          <div class="line-query whole-block">
            <h5 class="text-blue text-subtitle no-padding"> <i class="fa fa-whatsapp text-blue" aria-hidden="true"></i> WhatsApp</h5>
            <span class="text-grey whole-block">(14)99669-2010</span>
          </div>
          <div class="line-query whole-block">
            <h5 class="text-blue text-subtitle no-padding"> <i class="fa fa-phone text-blue" aria-hidden="true"></i> Telefone</h5>
            <span class="text-grey whole-block">(14) 98810-2010</span>
          </div>
          <div class="line-query whole-block">
            <h5 class="text-blue text-subtitle no-padding"> <i class="fa fa-envelope-o text-blue" aria-hidden="true"></i> E-mail</h5>
            <a href="mailto:contato@conceptionengenharia.com.br"><span class="text-grey whole-block">contato@conceptionengenharia.com.br</span></a>
            <a href="mailto:suporte@conceptionengenharia.com.br"><span class="text-grey whole-block">suporte@conceptionengenharia.com.br</span></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-4 right-side">
          <h4 class="text-blue text-subtitle">Redes Sociais</h4>
          <div class="col-field whole-block">
            <div class="line-query whole-block">
              <iframe class="whole-block"name="f7204b1f874a58" width="1000px" height="300px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiPrOY23SGAp.js%3Fversion%3D42%23cb%3Df2e1b48e93e1024%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff337a914eb1187c%26relation%3Dparent.parent&amp;container_width=370&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fconceptionengenharia&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 340px; height: 300px;" class=""></iframe>
            </div>
            <div class="line-query whole-block">
              <a target="_blank" href="https://www.facebook.com/ConceptionEngenharia/">
                <div class="col-xs-4 ct-fb">
                  <i class="circle fa fa-facebook" aria-hidden="true"></i>
                </div>
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCZeUv9_Gf-5xEmAfe0QhJuA">
                <div class="col-xs-4 ct-yt">
                  <i class="circle fa fa-youtube" aria-hidden="true"></i>
                </div>
              </a>
              <a target="_blank" href="https://www.youtube.com">
                <div class="col-xs-4 ct-li">
                  <i class="circle fa fa-linkedin" aria-hidden="true"></i>
                </div>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

</div>

