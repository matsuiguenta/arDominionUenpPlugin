<div id="row-hero" class="row">

	<div id="homepage-hero" class="container">

	  <?php $cacheKey = 'homepage-nav-'.$sf_user->getCulture() ?>
	  <?php if (!cache($cacheKey)): ?>
		<div class="span5" id="homepage-nav">
		  <h2><?php echo __('Browse by') ?></h2>
		  <ul>
			<?php $icons = array(
			  'browseInformationObjects' => '/images/icons-large/icon-archival.png',
			  'browseActors' => '/images/icons-large/icon-people.png',
			  'browseRepositories' => '/images/icons-large/icon-institutions.png',
			  'browseSubjects' => '/images/icons-large/icon-subjects.png',
			  'browseFunctions' => '/images/icons-large/icon-functions.png',
			  'browsePlaces' => '/images/icons-large/icon-places.png',
			  'browseDigitalObjects' => '/images/icons-large/icon-media.png') ?>
			<?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID) ?>
			<?php if ($browseMenu->hasChildren()): ?>
			  <?php foreach ($browseMenu->getChildren() as $item): ?>
				<li>
				  <a href="<?php echo url_for($item->getPath(array('getUrl' => true, 'resolveAlias' => true))) ?>">
					<?php if (isset($icons[$item->name])): ?>
					  <?php echo image_tag($icons[$item->name], array('width' => 42, 'height' => 42, 'alt' => '')) ?>
					<?php endif; ?>
					<?php echo esc_specialchars($item->getLabel(array('cultureFallback' => true))) ?>
				  </a>
				</li>
			  <?php endforeach; ?>
			<?php endif; ?>
		  </ul>
		</div>
		<?php cache_save($cacheKey) ?>
	  <?php endif; ?>

	  <div class="span6" id="intro">
	  
	 <!-- 
		<div class="page">
		  <?php echo render_value_html($sf_data->getRaw('content')) ?>
		</div>

		<?php if (QubitAcl::check($resource, 'update')): ?>
		  <?php slot('after-content') ?>
			<section class="actions">
			  <ul>
				<li><?php echo link_to(__('Edit'), array($resource, 'module' => 'staticpage', 'action' => 'edit'), array('title' => __('Edit this page'), 'class' => 'c-btn')) ?></li>
			  </ul>
			</section>
		  <?php end_slot() ?>
		<?php endif; ?>
	  -->
	  
		<?php if ('pt_BR' == $sf_user->getCulture()): ?>
		 <h2>
			<span class="title">CEDHIS/UENP</span>
			<span class="subtitle">Centro de Documentação Histórica</span>
		</h2>
			<p> O Centro de Documentação Histórica (CEDHIS) da Universidade Estadual do Norte do Paraná tem por objetivo recolher, guardar e preservar o patrimônio documental da região nordeste do Paraná, a fim de servir de apoio à pesquisa. Dessa forma, busca-se a preservação e (re) construção da história e da memória do chamado “norte pioneiro”, para além das memórias das elites, inscrevendo nelas também as experiências dos mais diversos grupos sociais e étnicos, presentes na história da região.</p>
			<p> Ao se preocupar em preservar as experiências de todos os cidadãos, o CEDHIS desempenha importante papel político em uma sociedade democrática que deve possibilitar que haja, nas disputas pelas memórias, minimamente, equanimidade de forças e resistência entre os diferentes grupos no e pelo poder.</p>
			<p>Assim, o CEDHIS tem a importante função de possibilitar a reconstrução da história da região nordeste do Paraná incluindo os diferentes atores que dela participaram, ricos e pobres, fazendeiros, sitiantes e colonos, políticos, médicos, pedreiros, lavadeiras, prostitutas, negros, brancos e índios, imigrantes e migrantes. Enfim, todos os sujeitos sobre os quais restaram vestígios que possam ser preservados em um centro de documentação.</p>
		<?php else: ?>
		<h2>
			<span class="title">CEDHIS/UENP</span>
			<span class="subtitle">Centro de Documentação Histórica</span>
		</h2>
			<p> O Centro de Documentação Histórica (CEDHIS) da Universidade Estadual do Norte do Paraná tem por objetivo recolher, guardar e preservar o patrimônio documental da região nordeste do Paraná, a fim de servir de apoio à pesquisa. Dessa forma, busca-se a preservação e (re) construção da história e da memória do chamado “norte pioneiro”, para além das memórias das elites, inscrevendo nelas também as experiências dos mais diversos grupos sociais e étnicos, presentes na história da região.</p>
			<p> Ao se preocupar em preservar as experiências de todos os cidadãos, o CEDHIS desempenha importante papel político em uma sociedade democrática que deve possibilitar que haja, nas disputas pelas memórias, minimamente, equanimidade de forças e resistência entre os diferentes grupos no e pelo poder.</p>
			<p>Assim, o CEDHIS tem a importante função de possibilitar a reconstrução da história da região nordeste do Paraná incluindo os diferentes atores que dela participaram, ricos e pobres, fazendeiros, sitiantes e colonos, políticos, médicos, pedreiros, lavadeiras, prostitutas, negros, brancos e índios, imigrantes e migrantes. Enfim, todos os sujeitos sobre os quais restaram vestígios que possam ser preservados em um centro de documentação.</p>
			
		<?php endif; ?>
		
	  </div>

	</div>
</div>
<!--
<div id="homepage" class="row">
  <div class="span12">
	<?php if (!include_slot('content')): ?>
      <div id="content" role="main">
        <?php echo $sf_content ?>
      </div>
    <?php endif; ?>
	</div>

  <div class="span4">
    <?php echo get_component('default', 'popular', array('limit' => 10, 'sf_cache_key' => $sf_user->getCulture())) ?>
  </div>

  <div class="span8" id="virtual-exhibit">
    <a href="http://museu.uenp.edu.br">
      <h3>
        <?php echo __('Virtual exhibits') ?><br />
        <span class="title">Museu UENP</span>
        <span class="small">Universidade Estadual do Norte do Paraná</span>
      </h3>
      <div>&nbsp;</div>
    </a>
  </div>

</div>
  -->