<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-horizontal" action="<?php echo url_for('categoria/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

    <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <!-- Muestro los errores globales -->
  <?php echo $form->renderGlobalErrors() ?>
  <!-- Muestro los camppos ocultos globales -->
  <?php echo $form->renderHiddenFields(false) ?>
  <!-- Campo nombre  -->
  <div class="control-group <?php echo ($form['nombre']->renderError() != false ? "error" : "") ?>">
    <label class="control-label" for="inputError"><?php echo $form['nombre']->renderLabel() ?></label>
    <div class="controls">
      <?php echo $form['nombre'] ?>
      <span class="help-inline"><?php echo $form['nombre']->renderError() ?></span>
    </div>
  </div>
  <!-- Campo descripcion  -->
  <div class="control-group <?php echo ($form['descripcion']->renderError() != false ? "error" : "") ?>">
    <label class="control-label" for="inputError"><?php echo $form['descripcion']->renderLabel() ?></label>
    <div class="controls">
      <?php echo $form['descripcion'] ?>
      <span class="help-inline"><?php echo $form['descripcion']->renderError() ?></span>
    </div>
  </div>
  <!-- Botonera debajo del form  -->
  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <?php if (!$form->getObject()->isNew()): ?>
        <?php echo link_to('Eliminar', 'categoria/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Confirma que desea eliminar la categoria?', 'class' =>'btn btn-danger')) ?>
    <?php endif; ?>
    <a class="button btn" href="<?php echo url_for('categoria/index') ?>">Cancelar</a>
  </div>

  
</form>
