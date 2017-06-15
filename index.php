<?php include 'species_data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AquaMaps</title>
	<!-- include the Google fonts stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i%7CRoboto:400,400i,500,500i" rel="stylesheet">
	<!-- include the bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css" media="all">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/main.css" media="all">
	<!-- include jQuery library -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<!-- include bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- include custom JavaScript -->
	<script src="js/jquery.main.js" defer></script>
	<script src="js/lory.min.js" defer></script>
	<script src="js/index.js" defer></script>
</head>
<body>
	<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
			<symbol id="icon-arrow" viewBox="0 0 53 32">
				<path d="M26.667 30.4l-23.467-22.933 4.267-4.267 19.2 19.733 19.2-19.733 3.733 4.267z"></path>
			</symbol>
			<symbol id="icon-close" viewBox="0 0 32 32">
				<path d="M17.9 15.8l13.7-13.8c0.5-0.5 0.5-1.3 0-1.9s-1.3-0.5-1.9 0l-13.7 13.8-13.7-13.7c-0.5-0.5-1.3-0.5-1.9 0s-0.5 1.3 0 1.9l13.7 13.7-13.7 13.7c-0.5 0.5-0.5 1.3 0 1.9 0.3 0.3 0.5 0.4 0.9 0.4s0.7-0.1 0.9-0.4l13.8-13.8 13.7 13.7c0.3 0.3 0.7 0.4 0.9 0.4 0.3 0 0.7-0.1 0.9-0.4 0.5-0.5 0.5-1.3 0-1.9l-13.6-13.6z"></path>
			</symbol>
		</defs>
	</svg>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- social networks -->
    <ul class="social-networks text-center">
      <li><a href="http://www.aquamaps.org/am_eubon/" target="_blank" class="aquamaps-link">AquaMaps</a></li>
			<li><a href="http://biodiversity.eubon.eu/" target="_blank" class="icon-eubon">EU BON</a></li>
			<li><a href="https://www.facebook.com/sharer/sharer.php" target="_blank" class="icon-facebook">FACEBOOK</a></li>
			<li><a href="https://twitter.com/share?" target="_blank" class="icon-twitter">TWITTER</a></li>
			<li><a href="mailto:eubon@mfn-berlin.de?Subject=AquaMaps" target="_blank" class="icon-email">EMAIL</a></li>
		</ul>
		<!-- section intro -->
		<section class="section intro text-center" data-nav="light">
			<!-- page logo -->
			<div class="logo"><a href="/">AquaMaps</a></div>
			<!-- section bg (intro) -->
			<div class="bg-holder">
				<img src="images/bg1.jpg" alt="image description">
			</div>
			<!-- section content (intro) -->
			<div class="section-holder">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6 col-lg-5 center-block">
							<div class="text-box">
								<p>Our oceans are under multiple pressures, from fishing to pollution and environmental change. To conserve important fish species, you can use AquaMaps to model where fish are and where they may be in the future, as the foundation for plans to save species.</p>
							</div>
							<a href="#services" class="btn-go">Go</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<!-- section services -->
			<section class="section services" id="services" data-nav="light" data-logo="inverse">
				<!-- section bg (services) -->
				<div class="bg-holder">
					<img src="images/bg2.jpg" alt="image description">
				</div>
				<!-- section content (intro) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 info-block">
								<h1>What does it do?</h1>
								<div class="text-block">
									<div class="text-col">
										<p>AquaMaps pulls in the best data from around the world to help you find out where species occur. Based on a range of environmental variables, it calculates where a species is likely to be found. </p>
									</div>
									<div class="text-col">
										<p>From there you can explore diversity of several pre-defined groups, focus on the range extent of a specific species, or look at a list of species that may be present in a certain area. By combining expert knowledge and occurrence data, AquaMaps presents fairly accurate and valid representations of species distributions.</p>
										<a href="http://www.aquamaps.org/am_eubon/" target="_blank" class="btn btn-default">explore AquaMaps</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="img-responsive">
									<picture>
										<source srcset="images/img1.png, images/img1-2x.png 2x" media="(min-width: 768px)">
										<source srcset="images/img1-small.png, images/img1-small-2x.png 2x">
										<img src="images/img1.png" alt="What does it do?">
									</picture>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section procedure (step 1) -->
			<section class="section procedure" data-nav="light" data-logo="light" data-page="1">
				<!-- section bg (procedure) -->
				<div class="bg-holder">
					<img src="images/bg3.jpg" alt="How could I use it?">
				</div>
				<!-- section content (procedure) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 center-block">
								<h1>How could I use it?</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-9 pull-right">
								<div class="text-block">
									<!-- paging -->
									<ul class="paging">
										<li class="active" data-value="1">1</li>
										<li data-value="2">2</li>
										<li data-value="3">3</li>
									</ul>
									<div class="text-mask">
										<p>Why not see which species may potentially invade your area?</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-9 pull-right">
								<?php $procedureSpecies = array_slice($species, 0, 3); ?>
								<?php foreach ($procedureSpecies as $specieId => $specie) :?>
									<div class="slider js_slider <?= $specieId == 0 ? "-selected" : ""?>" data-specie-id="<?= $specie['key'] ?>">
		                <div class="frame js_frame">
	                    <ul class="slides js_slides">
												<?php foreach ($specie['pictures'] as $pictureId => $picture) :?>
													<li class="js_slide slide">
														<div class="c-pic-slide js_pic_slide" data-pic-url="<?= $picture['url'] ?>" data-pic-name="<?= $picture['name'] ?> of <a href='<?= $specie['url'] ?>' target='_blank'><?= $specie['name'] ?></a>"  data-id="procedure-1-<?= $specie['key'] ?>-<?= $pictureId ?>" data-legend-title="Relative probabilities of occurrence" data-legend-values="&gt;0.2|0.3|0.5|0.7|&lt;0.8">
															<div class="c-pic-slide__picture" style="background-image: url('<?= $picture['url'] ?>')"></div>
															<div class="c-pic-slide__separator"></div>
															<div class="c-pic-slide__name"><?= $picture['name'] ?></div>
														</div>
													</li>
												<?php endforeach ?>
	                    </ul>
		                </div>
			            </div>
								<?php endforeach ?>

								<div class="c-select">
									<label>Species</label>
									<select class="js_select">
										<?php foreach ($procedureSpecies as $specie) :?>
											<option value="<?= $specie['key'] ?>"><?= $specie['name'] ?></option>
										<?php endforeach ?>
									</select>
									<svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
								</div>
                <div class="section-map-legend pull-right">
                  <div class="section-map-legend__title-light">Relative probabilities of occurrence</div>
                  <div class="section-map-legend__values-light">
                    <img src="images/legend-colours.svg">
                    <ul>
                      <li>&gt;0.19</li>
                      <li>0.39</li>
                      <li>0.59</li>
                      <li>0.79</li>
                      <li>&lt;1.0</li>
                    </ul>
                  </div>
                </div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section procedure (step 2) -->
			<section class="section procedure is-hidden" data-nav="light" data-logo="light" data-page="2">
				<!-- section bg (procedure) -->
				<div class="bg-holder">
					<img src="images/bg4.jpg" alt="How could I use it?">
				</div>
				<!-- section content (procedure) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 center-block">
								<h1>How could I use it?</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-9 pull-right">
								<div class="text-block">
									<!-- paging -->
									<ul class="paging">
										<li data-value="1">1</li>
										<li class="active" data-value="2">2</li>
										<li data-value="3">3</li>
									</ul>
									<div class="text-mask">
										<p>Find out how suitable habitat will change for Europe’s species because of climate change</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-9 pull-right">
								<?php $procedureSpecies = array_slice($species, 3, 3); ?>
								<?php foreach ($procedureSpecies as $specieId => $specie) :?>
									<div class="slider js_slider <?= $specieId == 0 ? "-selected" : ""?>" data-specie-id="<?= $specie['key'] ?>">
		                <div class="frame js_frame">
	                    <ul class="slides js_slides">
												<?php foreach ($specie['pictures'] as $pictureId => $picture) :?>
													<li class="js_slide slide">
														<div class="c-pic-slide js_pic_slide" data-pic-url="<?= $picture['url'] ?>" data-pic-name="<?= $picture['name'] ?> of <a href='<?= $specie['url'] ?>' target='_blank'><?= $specie['name'] ?></a>" data-id="procedure-2-<?= $specie['key'] ?>-<?= $pictureId ?>" data-legend-title="Relative probabilities of occurrence" data-legend-values="&gt;0.2|0.3|0.5|0.7|&lt;0.8">
															<div class="c-pic-slide__picture" style="background-image: url('<?= $picture['url'] ?>')"></div>
															<div class="c-pic-slide__separator"></div>
															<div class="c-pic-slide__name"><?= $picture['name'] ?></div>
														</div>
													</li>
												<?php endforeach ?>
	                    </ul>
		                </div>
			            </div>
								<?php endforeach ?>

								<div class="c-select">
									<label>Species</label>
									<select class="js_select">
										<?php foreach ($procedureSpecies as $specie) :?>
											<option value="<?= $specie['key'] ?>"><?= $specie['name'] ?></option>
										<?php endforeach ?>
									</select>
                  <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section procedure (step 3) -->
			<section class="section procedure is-hidden" data-nav="light" data-logo="light" data-page="3">
				<!-- section bg (procedure) -->
				<div class="bg-holder">
					<img src="images/bg5.jpg" alt="How could I use it?">
				</div>
				<!-- section content (procedure) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 center-block">
								<h1>How could I use it?</h1>
							</div>
						</div>
						<div class="row">
              <div class="col-xs-12 col-sm-5 pull-right">
                <img src="/images/planning_tool/MPA_Step8.png" width="100%" />
              </div>
							<div class="col-xs-12 col-sm-4 pull-right">
								<div class="text-block">
									<!-- paging -->
									<ul class="paging">
										<li data-value="1">1</li>
										<li data-value="2">2</li>
										<li class="active" data-value="3">3</li>
									</ul>
									<div class="text-mask">
										<p>See where to best place a new marine protected area (MPA) with respect to the species you want to protect</p>
                    <a href="http://www.aquamaps.org/tools/mpa_wizard/details.php?area=EU" target="_blank" class="btn btn-default">explore the tool</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section future -->
			<section class="section future inverse" data-nav="inverse" data-logo="inverse">
				<!-- section bg (future) -->
				<div class="bg-holder">
					<img src="images/bg6.jpg" alt="How could I use it?">
				</div>
				<!-- indicators info -->
				<div class="info text-right">
					<div class="indicators">
						<ul>
							<li class="yellow">Indicator</li>
							<li class="dark-yellow">Indicator</li>
							<li class="orange">Indicator</li>
							<li class="red">Indicator</li>
						</ul>
						<span class="title">species suitability</span>
					</div>
				</div>
				<!-- section content (future) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-10">
								<h1>What will future generations have?</h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section news -->
			<section class="section block inverse" data-nav="inverse" data-logo="inverse">
				<!-- section content (news) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 center-block">
								<!-- article -->
								<article class="article">
									<div class="text-holder">
										<h1><a href="http://www.aquamaps.org/am_eubon/OtherSpeciesList.php?type=threatened" target="_blank">See how climate impacts Europe’s threatened fish</a></h1>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section map -->
			<section id="inverse-map" class="section block inverse" data-nav="inverse" data-logo="inverse">
				<!-- section content (map) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 center-block graph">
								<div class="img-area">
									<picture>
										<img src="images/species/acipenser_nacarii/pic_Fis-29589_native.jpg" alt="map description" width="100%">
									</picture>
                  <div class="section-map-legend">
                    <div class="section-map-legend__title">Relative probabilities of occurrence</div>
                    <div class="section-map-legend__values">
                      <img src="images/legend-colours.svg">
                      <ul>
                        <li>&gt;0.2</li>
                        <li>0.3</li>
                        <li>0.5</li>
                        <li>0.7</li>
                        <li>&lt;0.8</li>
                      </ul>
                    </div>
                  </div>
                  <div class="section-map-buttons">
                    <div class="js-inverse-graph-map-switcher -selected" data-section-id="inverse-map" data-map-url="images/species/acipenser_nacarii/pic_Fis-29589_native.jpg">NOW</div>
                    <div class="js-inverse-graph-map-switcher" data-section-id="inverse-map" data-map-url="images/species/acipenser_nacarii/pic_Fis-29589_y2100.jpg">2100</div>
                  </div>
								</div>
								<div class="text-block add">
									<!-- paging -->
									<ul class="paging">
										<li class="active">1</li>
										<li onclick="goTo('inverse-graph');">2</li>
									</ul>
									<div class="text-mask map-mask">
                    <h2><a href="http://www.aquamaps.org/am_eubon/premap.php?map=cached&SpecID=Fis-29589&cache=1&type_of_map=regular" target="_blank">Adriatic sturgeon (<i>Acipenser naccarii</i>, endangered)</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section graph -->
			<section id="inverse-graph" class="section block inverse" data-nav="inverse" data-logo="inverse">
				<!-- section content (graph) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 center-block graph text-right">
								<div class="img-area">
									<picture>
										<source srcset="images/graph_sturgeon.png, images/graph_sturgeon-2x.png 2x" media="(min-width: 768px)">
										<img src="images/graph_sturgeon.png" alt="Sturgeon's area change">
									</picture>
								</div>
								<div class="text-block" style="vertical-align: top;">
									<!-- paging -->
									<ul class="paging">
										<li onclick="goTo('inverse-map');">1</li>
										<li class="active">2</li>
									</ul>
									<div class="text-mask">
                    <h2>By 2100 Europe's Adriatic sturgeon could lose 49% of its current distribution area but gain new suitable area. <span>(~38.4% based on predicted 2100 distribution)</span></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
      <!-- section map -->
      <section id="inverse-map2" class="section block inverse" data-nav="inverse" data-logo="inverse">
        <!-- section content (map) -->
        <div class="section-holder">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 center-block graph">
                <div class="img-area">
                  <picture>
                    <img src="images/species/carcharhinus_longimanus/exp_7_pic_Fis-23061_native.jpg" alt="map description" width="100%">
                  </picture>
                  <div class="section-map-legend">
                    <div class="section-map-legend__title">Relative probabilities of occurrence</div>
                    <div class="section-map-legend__values">
                      <img src="images/legend-colours.svg">
                      <ul>
                        <li>&gt;0.2</li>
                        <li>0.3</li>
                        <li>0.5</li>
                        <li>0.7</li>
                        <li>&lt;0.8</li>
                      </ul>
                    </div>
                  </div>
                  <div class="section-map-buttons">
                    <div class="js-inverse-graph-map-switcher -selected" data-section-id="inverse-map2" data-map-url="images/species/carcharhinus_longimanus/exp_7_pic_Fis-23061_native.jpg">NOW</div>
                    <div class="js-inverse-graph-map-switcher" data-section-id="inverse-map2" data-map-url="images/species/carcharhinus_longimanus/exp_7_pic_Fis-23061_y2100.jpg">2100</div>
                  </div>
                </div>
                <div class="text-block add">
                  <!-- paging -->
                  <ul class="paging">
                    <li class="active">1</li>
                    <li onclick="goTo('inverse-graph2');">2</li>
                  </ul>
                  <div class="text-mask map-mask">
                    <h2><a href="http://www.aquamaps.org/am_eubon/premap.php?map=cached&SpecID=Fis-23061&expert_id=7&cache=1&type_of_map=regular" target="_blank">Oceanic whitetip shark (<i>Carcharhinus longimanus</i>, vulnerable)</a></h2>
										<a href="http://www.aquamaps.org/am_eubon/OtherSpeciesList.php?type=threatened" target="_blank" class="btn btn-primary">explore the tool</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
			<!-- section graph -->
			<section id="inverse-graph2" class="section block inverse" data-nav="inverse" data-logo="inverse">
				<!-- section content (graph) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 center-block graph text-right">
								<div class="img-area">
									<picture>
										<source srcset="images/graph_carcharhinus.png, images/graph_carcharhinus-2x.png 2x" media="(min-width: 768px)">
										<img src="images/graph_carcharhinus.png" alt="Sturgeon's area change">
									</picture>
								</div>
								<div class="text-block" style="vertical-align: top">
									<!-- paging -->
									<ul class="paging">
                    <li onclick="goTo('inverse-map2');">1</li>
										<li class="active">2</li>
									</ul>
									<div class="text-mask">
                    <h2>By 2100 decreased habitat suitability of the oceanic whitetip shark could be as high as 67% of its current distribution area. It gains new suitable habitat in the northeast Atlantic. <span>(~21% based on predicted 2100 distribution)</span></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section news -->
			<section class="section block inverse" data-nav="inverse" data-logo="inverse">
				<!-- section content (news) -->
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 center-block">
								<!-- article -->
								<article class="article">
									<div class="text-holder">
										<h1>See how biodiversity may change in Europe’s seas</h1>
									</div>
                  <div class="img-responsive">
                    <a href="http://wcmc.io/North-Sea" target="_blank">
                      <picture>
                        <source srcset="images/magazine.png, images/magazine-2x.png 2x">
                        <img src="images/magazine.png" alt="Case study screenshot">
                      </picture>
                    </a>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>

      <section class="section procedure" data-nav="light" data-logo="light">
        <!-- section bg (procedure) -->
        <div class="bg-holder">
          <img src="images/bg3.jpg" alt="How could I use it?">
        </div>
        <!-- section content (procedure) -->
        <div class="section-holder">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 center-block">
                <h3>The North Sea example</h3>
                <p>Richness maps for the relatively shallow North Sea show that
                   bony fish are mostly found along the shallow coasts. Species
                   richness decreases in the central deepest part of the North
                   Sea by the year 2100. As temperature increases, bony fish
                   with a preference for deeper waters may move away from the area.
                </p>
							  <a href="http://www.aquamaps.org/am_eubon/SpecRichLME.php" target="_blank" class="btn btn-default">explore the tool</a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-9 pull-right">
                <div class="slider js_slider -selected">
                  <div class="frame js_frame">
                    <ul class="slides js_slides">
                      <li class="js_slide slide">
                        <div class="c-pic-slide js_pic_slide" data-pic-url="images/changes_in_biodiversity_in_europes_seas/22.jpg" data-pic-name="Current species" data-id="procedure-4-1" data-legend-title="Species counts" data-legend-values="&gt;9|55|85|115|&lt;165">
                          <div class="c-pic-slide__picture" style="background-image: url('images/changes_in_biodiversity_in_europes_seas/22.jpg')"></div>
                          <div class="c-pic-slide__separator"></div>
                          <div class="c-pic-slide__name">Current species richness</div>
                          <div class="c-pic-slide__legend">
                            <img src="images/legend-colours.svg">
                            <ul>
                              <li>&gt;9</li>
                              <li>55</li>
                              <li>85</li>
                              <li>115</li>
                              <li>&lt;165</li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="js_slide slide">
                        <div class="c-pic-slide js_pic_slide" data-pic-url="images/changes_in_biodiversity_in_europes_seas/22_2100.jpg" data-pic-name="Predicted species in 2100" data-id="procedure-4-2" data-legend-title="Species counts" data-legend-values="&gt;9|55|85|115|&lt;165">
                          <div class="c-pic-slide__picture" style="background-image: url('images/changes_in_biodiversity_in_europes_seas/22_2100.jpg')"></div>
                          <div class="c-pic-slide__separator"></div>
                          <div class="c-pic-slide__name">Predicted species richness in 2100</div>
                          <div class="c-pic-slide__legend">
                            <img src="images/legend-colours.svg">
                            <ul>
                              <li>&gt;9</li>
                              <li>55</li>
                              <li>85</li>
                              <li>115</li>
                              <li>&lt;165</li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="js_slide slide">
                        <div class="c-pic-slide js_pic_slide" data-pic-url="images/changes_in_biodiversity_in_europes_seas/22_2100_percent.jpg" data-pic-name="% change in species composition" data-id="procedure-4-3" data-legend-title="" data-legend-values="&gt;0|9|25|49|&lt;100">
                          <div class="c-pic-slide__picture" style="background-image: url('images/changes_in_biodiversity_in_europes_seas/22_2100_percent.jpg')"></div>
                          <div class="c-pic-slide__separator"></div>
                          <div class="c-pic-slide__name">% change in species composition</div>
                          <div class="c-pic-slide__legend">
                            <img src="images/legend-colours.svg">
                            <ul>
                              <li>&gt;0</li>
                              <li>9</li>
                              <li>25</li>
                              <li>49</li>
                              <li>&lt;100</li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

			<div class="c-show-pic-modal is-hidden">
        <input class="js_pic_id" type="hidden" value=""/>
				<div class="section-holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 center-block">
								<div class="c-show-pic__picture js_show_pic"></div>
                <div class="c-show-pic-modal__arrow -prev js_prev_pic">
                  <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow"></use></svg>
                </div>
                <div class="c-show-pic-modal__arrow -next js_next_pic">
                  <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow"></use></svg>
                </div>
							</div>
							<div class="col-xs-12">
								<div class="c-show-pic__name js_show_name"></div>
							</div>
							<div class="col-xs-12">
								<div class="c-show-pic__legend">
									<div class="c-show-pic__legend-title js_legend_title"></div>
                  <img src="images/legend-colours.svg">
                  <ul class="c-show-pic__legend-values js_legend_values"></ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="c-show-pic-modal__close js_show_pic_modal_close">
					<svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg>
				</div>
				<div class="c-show-pic-modal__veil js_show_pic_modal_close"></div>
			</div>
		</main>
	</div>
</body>
</html>
