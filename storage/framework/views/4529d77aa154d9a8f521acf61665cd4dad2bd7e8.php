<h1> Listado de frutas</h1>

<a href="<?php echo e(action("FrutasController@naranjas")); ?>">Ĺink naranjas </a>
<p> </p>

<a href="<?php echo e(action("FrutasController@peras")); ?>">Ĺink peras </a>
<a href="<?php echo e(action("FrutasController@index")); ?>">Inicio frutas </a>

<ul>
<?php foreach ($frutas as $fruta): ?>
  <li> <?php echo e($fruta); ?></li>
<?php endforeach; ?>
</ul>
<?php /**PATH /media/ivan/Web/rutes/resources/views/frutas/index.blade.php ENDPATH**/ ?>