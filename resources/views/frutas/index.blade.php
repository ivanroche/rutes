<h1> Listado de frutas</h1>

<a href="{{action("FrutasController@getnaranjas")}}">Ĺink naranjas </a>
<p> </p>

<a href="{{action("FrutasController@getperas")}}">Ĺink peras </a>


<ul>
<?php foreach ($frutas as $fruta): ?>
  <li> {{$fruta}}</li>
<?php endforeach; ?>
</ul>
