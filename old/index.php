<?php
require_once 'php-includes/head.inc.php';
?>

<body id="content">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <?php
// Navbar
require_once 'php-includes/nav.inc.php';

// Jumbotron
require_once 'php-includes/jumbotron.inc.php';

// WatWeDoen
require_once 'php-includes/watWeDoen.inc.php';

// LatestProjects
require_once 'php-includes/latestProjects.inc.php';
?>


            <hr class="featurette-divider" />
    <!--
  ================== Portfolio =====================
-->
<div id="portfolio" class="container-fluid">
	<div  class="row center-block">
		<div class="col-md-12 center-block">
			<br>
			<br>
			<h2 class="text-center title">PORTFOLIO</h2>

            <!-- Begin MixItUp -->
            <div class="row">
                <div class="col-md-2 hidden-md hidden-sm hidden-xs">
                </div>
                <div class="col-md-12 col-sm-12">
                   <button class="filter btn btn-portfolio" data-filter="all">All</button>
                   <button class="filter btn btn-portfolio" data-filter=".category-honda">Honda</button>
                   <button class="filter btn btn-portfolio" data-filter=".category-yamaha">yamaha</button>
                   <button class="filter btn btn-portfolio" data-filter=".category-kawasaki">kawasaki</button>
                   <button class="filter btn btn-portfolio" data-filter=".category-suzuki">suzuki</button>
                   <button class="filter btn btn-portfolio" data-filter=".category-harley">harley</button>
                   <button class="filter btn btn-portfolio" data-filter=".category-buell">buell</button>
               </div>
               <div class="col-md-2 hidden-md hidden-sm hidden-xs"></div>
           </div>

           <div id="Container" class="row center-block">
            <?php
//honda-cbr-600
require_once 'php-includes/portfolio/honda-cbr-600.inc.php';
// yamaha-fzr-1000
require_once 'php-includes/portfolio/yamaha-fzr-1000.inc.php';
// honda-cbr-600-f1
require_once 'php-includes/portfolio/honda-cbr-600-f1.inc.php';
// honda-cbr-600-f2
require_once 'php-includes/portfolio/honda-cbr-600-f2.inc.php';
// yamaha-fzr-1000-streetfighter
require_once 'php-includes/portfolio/yamaha-fzr-1000-streetfighter.inc.php';
// yamaha-fzr-1000-streetfighter-orange
require_once 'php-includes/portfolio/yamaha-fzr-1000-streetfighter-orange.inc.php';
// honda-cm-450-bobber
require_once 'php-includes/portfolio/honda-cm-450-bobber.inc.php';
// kawasaki-zxr750
require_once 'php-includes/portfolio/kawasaki-zxr750.inc.php';
// honda-cbr-600-f-cafe-racer
require_once 'php-includes/portfolio/honda-cbr-600-f-cafe-racer.inc.php';
// yamaha-yzf-r6
require_once 'php-includes/portfolio/yamaha-yzf-r6.inc.php';
// yamaha-yzf1000r-streetfighter
require_once 'php-includes/portfolio/yamaha-yzf1000r-streetfighter.inc.php';
// suzuki-gsx-r-750-streetfighter
require_once 'php-includes/portfolio/suzuki-gsx-r-750-streetfighter.inc.php';
// honda-cb-650-bobber
require_once 'php-includes/portfolio/honda-cb-650-bobber.inc.php';
// yamaha-xs-400-bobber
require_once 'php-includes/portfolio/yamaha-xs-400-bobber.inc.php';
// yamaha-fzr-1000-streetfighter-2
require_once 'php-includes/portfolio/yamaha-fzr-1000-streetfighter-2.inc.php';
// yamaha-xs-400-bobber-2
require_once 'php-includes/portfolio/yamaha-xs-400-bobber-2.inc.php';
// yamaha-seca-750
require_once 'php-includes/portfolio/yamaha-seca-750.inc.php';
// honda-nighthawk-650
require_once 'php-includes/portfolio/honda-nighthawk-650.inc.php';
// honda-nighthawk-2
require_once 'php-includes/portfolio/honda-nighthawk-2.inc.php';
// yamaha-yzf-750r
require_once 'php-includes/portfolio/yamaha-yzf-750r.inc.php';
// kawasaki-zx9r
require_once 'php-includes/portfolio/kawasaki-zx9r.inc.php';
// suzuki-gr-650
require_once 'php-includes/portfolio/suzuki-gr-650.inc.php';
// suzuki-gsx-750
require_once 'php-includes/portfolio/suzuki-gsx-750.inc.php';
// yamaha-seca-750-2
require_once 'php-includes/portfolio/yamaha-seca-750-2.inc.php';
// harley-sportster-833
require_once 'php-includes/portfolio/harley-sportster-833.inc.php';
// honda-cmx-450
require_once 'php-includes/portfolio/honda-cmx-450.inc.php';
// honda-vlx-600
require_once 'php-includes/portfolio/honda-vlx-600.inc.php';
// buell-m2-streetfighter
require_once 'php-includes/portfolio/buell-m2-streetfighter.inc.php';
// yamaha-xs-400-bobber-3
require_once 'php-includes/portfolio/yamaha-xs-400-bobber-3.inc.php';
// honda-cb500-76
require_once 'php-includes/portfolio/honda-cb500-76.inc.php';
// honda-vlx-600-bobber
require_once 'php-includes/portfolio/honda-vlx-600-bobber.inc.php';
?>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
        <!-- /#container -->

    </div>
</div>
</div>
<!-- /.container -->

<!-- Contact -->
<?php require_once 'php-includes/contact.inc.php';?>
</div>
<!-- </div> -->
<!-- /.container marketing -->




<!-- FOOTER -->
<?php require_once 'php-includes/footer.inc.php';?>
<!-- /.Container -->



<?php require_once 'php-includes/scripts.inc.php';?>
