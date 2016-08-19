{% extends 'base.html.twig' %}
{% block body %}
	<div id="content">
	<!--modal Terrain1 -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <h3>{{ Terrain.titre }}</h3>
		Description :<br>
		aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
  </div>
</div>

		<div class="row">
	  		 <div id="backterrain1" class="terrain" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" background="{{ asset('bundles/framework/images/terrain1.jpeg') }}"><div id="terrain">Terrain1</div></div>
	  		 <div id="backterrain2" class="terrain" onclick="terrain2()" class="col-md-12"><div id="terrain">Terrain2</div></div>
	  		 <div id="backterrain3" class="terrain" onclick="terrain3()" class="col-md-12"><div id="terrain">Terrain3</div></div>	  		
	  	</div>
	</div>  
{% endblock %}