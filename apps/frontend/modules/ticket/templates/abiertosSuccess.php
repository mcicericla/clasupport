<h3>Tickets abiertos</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Código</th>
      <th>Descripcion</th>
      <th>Creado</th>
      <th>Actualizado</th>
      <th>Categoria ticket</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tickets as $ticket): ?>
    <tr>
      <td><a href="<?php echo url_for('ticket/edit?id='.$ticket->getId()) ?>"><?php echo $ticket->getId() ?></a></td>
      <td><?php echo $ticket->getDescripcion() ?></td>
      <td><?php echo $ticket->getFechaAlta() ?></td>
      <td><?php echo $ticket->getFechaActualizacion() ?></td>
      <td><?php echo $ticket->getCategoriaTicket() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>