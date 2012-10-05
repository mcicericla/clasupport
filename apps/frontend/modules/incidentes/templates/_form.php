<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('incidentes/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('incidentes/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'incidentes/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['descripcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['descripcion']->renderError() ?>
          <?php echo $form['descripcion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_alta']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_alta']->renderError() ?>
          <?php echo $form['fecha_alta'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_actualizacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_actualizacion']->renderError() ?>
          <?php echo $form['fecha_actualizacion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_cierre']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_cierre']->renderError() ?>
          <?php echo $form['fecha_cierre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['usuario_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['usuario_id']->renderError() ?>
          <?php echo $form['usuario_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado_ticket_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_ticket_id']->renderError() ?>
          <?php echo $form['estado_ticket_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['categoria_ticket_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['categoria_ticket_id']->renderError() ?>
          <?php echo $form['categoria_ticket_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>