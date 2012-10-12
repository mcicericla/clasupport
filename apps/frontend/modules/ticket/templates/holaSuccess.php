<?php foreach ($mensajes as $valor) { ?>
    
    <span style="color: <?php  echo ($valor > 10) ? 'red' : 'blue'; ?>"><?php echo $valor; ?></span><br />

<?php }?>
