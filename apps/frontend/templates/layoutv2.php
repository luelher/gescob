<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Gestion de Cobranza - Agencia Royal 33</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1><a href="<?php echo url_for('sms/index') ?>">
            <img src="/images/logo.jpg" alt="Enviar SMS" />
          </a></h1>

          <div id="sub_header">
            <div class="post">
              <h2>Ask for people</h2>
              <div>
                <a href="<?php echo url_for('outbox/new') ?>">Enviar SMS</a>
              </div>
            </div>
            <div id="menu">  
            <ul>
              <li class="current_page_item"><a href="<?php echo url_for('default') ?>">Inicio</a></li>
              <li><a href="<?php echo url_for('sms') ?>">SMS Morosos</a></li>
              <li><a href="<?php echo url_for('enviados') ?>">SMS Enviados</a></li>
              <li><a href="<?php echo url_for('vencimientos') ?>">Vencimiento</a></li>
              <li><a href="<?php echo url_for('pagos') ?>">Pagos</a></li>
              <li><a href="<?php echo url_for('cartas') ?>">Cartas</a></li>
              <li class="last"><a href="#">Eficiencia</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>

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

        <div class="content">
          <?php echo $sf_content ?>
        </div>
      </div>

      <div id="footer">
        <div class="content">
          <span class="symfony">
            powered by <a href="http://www.symfony-project.org/">
            <img src="/images/symfony.gif" alt="symfony framework" />
            </a>
          </span>

        </div>
      </div>
    </div>
  </body>
</html>