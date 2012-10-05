<h1>Categoria tickets List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categoria_tickets as $categoria_ticket): ?>
    <tr>
      <td><a href="<?php echo url_for('categoria/edit?id='.$categoria_ticket->getId()) ?>"><?php echo $categoria_ticket->getId() ?></a></td>
      <td><?php echo $categoria_ticket->getNombre() ?></td>
      <td><?php echo $categoria_ticket->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('categoria/new') ?>">New</a>
