<h1> Listado de frutas</h1>

<a href="{{action("FrutasController@naranjas")}}">Ĺink naranjas </a>
<p> </p>

<a href="{{action("FrutasController@peras")}}">Ĺink peras </a>


<ul>
<?php foreach ($frutas as $fruta): ?>
  <li> {{$fruta}}</li>
<?php endforeach; ?>
</ul>
