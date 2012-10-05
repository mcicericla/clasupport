<h1>Tickets List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Fecha alta</th>
      <th>Fecha actualizacion</th>
      <th>Fecha cierre</th>
      <th>Usuario</th>
      <th>Estado ticket</th>
      <th>Categoria ticket</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tickets as $ticket): ?>
    <tr>
      <td><a href="<?php echo url_for('incidentes/edit?id='.$ticket->getId()) ?>"><?php echo $ticket->getId() ?></a></td>
      <td><?php echo $ticket->getDescripcion() ?></td>
      <td><?php echo $ticket->getFechaAlta() ?></td>
      <td><?php echo $ticket->getFechaActualizacion() ?></td>
      <td><?php echo $ticket->getFechaCierre() ?></td>
      <td><?php echo $ticket->getUsuarioId() ?></td>
      <td><?php echo $ticket->getEstadoTicketId() ?></td>
      <td><?php echo $ticket->getCategoriaTicketId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('incidentes/new') ?>">New</a>
