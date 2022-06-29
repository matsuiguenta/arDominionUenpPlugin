<footer>

  <?php if (QubitAcl::check('userInterface', 'translate')): ?>
    <?php echo get_component('sfTranslatePlugin', 'translate') ?>
  <?php endif; ?>

  <?php echo get_component_slot('footer') ?>
  
  <div id="footer" class="container">
  
	  <div class="span6" id="footer1">
	  <?php echo link_to(image_tag('logo', array('alt' => 'AtoM')), '@homepage', array('id' => 'logo', 'rel' => 'home')) ?>
	  <p><span class="title">CENTRO DE DOCUMENTAÇÃO HISTÓRICA - CEDHIS</span></p>
		<p>Parque Universitário de Ciência, Cultura e Inovação da UENP <br>
		Av. Marciano de Barros, 700, Bairro Estação<br>
		CEP 86400-000 Jacarezinho - PR <br>
		<a href="https://goo.gl/maps/SMH5Ws7PG7V6d1Fx6" title="Localização no mapa" target="_blank">Localização no mapa</a></p>
	  
	  </div>
	  
	  <div class="span6" id="footer2">
		<a id="logo" href="https://nti.uenp.edu.br" title="Núcleo de Tecnologia da Informação"><img alt="NTI-UENP" src="/plugins/arDominionUenpPlugin/images/logo-nti.png"></a>	  
		<p><span class="title">Núcleo de Tecnologia da Informação NTI</span></p>
		<p>Desenvolvido com <span style="color:red">❤</span> por Rogério Matsui Guenta <br>
            Utilizando <a href="https://www.accesstomemory.org/pt-br/" target="_blank">Access to Memory- AtoM</a>
		</p>
	  </div>
  
  </div>

  <div id="print-date">
    <?php echo __('Printed: %d%', array('%d%' => date('Y-m-d'))) ?>
  </div>

</footer>

<?php $gaKey = sfConfig::get('app_google_analytics_api_key', '') ?>
<?php if (!empty($gaKey)): ?>
  <script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', '<?php echo $gaKey ?>', 'auto');
    <?php include_slot('google_analytics') ?>
    ga('send', 'pageview');
  </script>
  <script async src='https://www.google-analytics.com/analytics.js'></script>
<?php endif; ?>
