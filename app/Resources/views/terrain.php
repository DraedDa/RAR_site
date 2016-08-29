{% extends 'base.html.twig' %}
{% block body %}
	<div id="content">
		<div class="row">
		{% for Terrain in listTerrain %}
	  		 <a href="showDetailTerrain/{{ Terrain.titre }}"><div id="backterrain" class="terrain" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><div id="showDetailTerrain">{{ Terrain.titre }}</div></div></a>
	  	{% endfor %}		
	  	</div>
	</div>  
{% endblock %}
