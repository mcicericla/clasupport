<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div style="margin: 20px;">
      <?php echo image_tag('header_cla', array("size" => "290x100")) ?>
    </div>
      <?php include_partial("global/menu"); ?>
      <div style="margin: 20px;">
          <?php if($sf_user->hasFlash('info')): ?>
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Información: </strong> <?php echo $sf_user->getFlash('info'); ?>
          </div>
          <?php endif ?>
        <?php echo $sf_content ?>
    </div>
  </body>
</html>
