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
			<span class="subtitle">Centro de Documenta????o Hist??rica</span>
		</h2>
			<p> O Centro de Documenta????o Hist??rica (CEDHIS) da Universidade Estadual do Norte do Paran?? tem por objetivo recolher, guardar e preservar o patrim??nio documental da regi??o nordeste do Paran??, a fim de servir de apoio ?? pesquisa. Dessa forma, busca-se a preserva????o e (re) constru????o da hist??ria e da mem??ria do chamado ???norte pioneiro???, para al??m das mem??rias das elites, inscrevendo nelas tamb??m as experi??ncias dos mais diversos grupos sociais e ??tnicos, presentes na hist??ria da regi??o.</p>
			<p> Ao se preocupar em preservar as experi??ncias de todos os cidad??os, o CEDHIS desempenha importante papel pol??tico em uma sociedade democr??tica que deve possibilitar que haja, nas disputas pelas mem??rias, minimamente, equanimidade de for??as e resist??ncia entre os diferentes grupos no e pelo poder.</p>
			<p>Assim, o CEDHIS tem a importante fun????o de possibilitar a reconstru????o da hist??ria da regi??o nordeste do Paran?? incluindo os diferentes atores que dela participaram, ricos e pobres, fazendeiros, sitiantes e colonos, pol??ticos, m??dicos, pedreiros, lavadeiras, prostitutas, negros, brancos e ??ndios, imigrantes e migrantes. Enfim, todos os sujeitos sobre os quais restaram vest??gios que possam ser preservados em um centro de documenta????o.</p>
		<?php else: ?>
		<h2>
			<span class="title">CEDHIS/UENP</span>
			<span class="subtitle">Centro de Documenta????o Hist??rica</span>
		</h2>
			<p> O Centro de Documenta????o Hist??rica (CEDHIS) da Universidade Estadual do Norte do Paran?? tem por objetivo recolher, guardar e preservar o patrim??nio documental da regi??o nordeste do Paran??, a fim de servir de apoio ?? pesquisa. Dessa forma, busca-se a preserva????o e (re) constru????o da hist??ria e da mem??ria do chamado ???norte pioneiro???, para al??m das mem??rias das elites, inscrevendo nelas tamb??m as experi??ncias dos mais diversos grupos sociais e ??tnicos, presentes na hist??ria da regi??o.</p>
			<p> Ao se preocupar em preservar as experi??ncias de todos os cidad??os, o CEDHIS desempenha importante papel pol??tico em uma sociedade democr??tica que deve possibilitar que haja, nas disputas pelas mem??rias, minimamente, equanimidade de for??as e resist??ncia entre os diferentes grupos no e pelo poder.</p>
			<p>Assim, o CEDHIS tem a importante fun????o de possibilitar a reconstru????o da hist??ria da regi??o nordeste do Paran?? incluindo os diferentes atores que dela participaram, ricos e pobres, fazendeiros, sitiantes e colonos, pol??ticos, m??dicos, pedreiros, lavadeiras, prostitutas, negros, brancos e ??ndios, imigrantes e migrantes. Enfim, todos os sujeitos sobre os quais restaram vest??gios que possam ser preservados em um centro de documenta????o.</p>
			
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
        <span class="small">Universidade Estadual do Norte do Paran??</span>
      </h3>
      <div>&nbsp;</div>
    </a>
  </div>

</div>
  -->