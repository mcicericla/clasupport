<h3>Todas mis solicitudes</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Fecha alta</th>
      <th>Fecha actualizacion</th>
      <th>Fecha cierre</th>
      <th>Estado ticket</th>
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
      <td><?php echo $ticket->getFechaCierre() ?></td>
      <td><?php echo $ticket->getEstadoTicket() ?></td>
      <td><?php echo $ticket->getCategoriaTicket() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>