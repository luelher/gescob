<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Gentión de Cobranza - Agencia Royal 33</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Blogs</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div>
</div>
<div id="logo">
	<h1><a href="#">supplementary</a></h1>
	<h2> Design by Free Css Templates</h2>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
  <div id="content">
    <?php if ($sf_user->hasFlash('notice')): ?>
      <div class="flash_notice">
        <?php echo $sf_user->getFlash('notice') ?>
      </div>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
      <div class="flash_error">
        <?php echo $sf_user->getFlash('error') ?>
      </div>
    <?php endif; ?>

    <div class="post">
      <?php echo $sf_content ?>
    </div>
  </div>
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal">(c) 2007 YourSite. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
</div>
<!-- end footer -->
  </body>
</html>