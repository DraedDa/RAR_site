{% extends 'base.html.twig' %}
{% block body %}
	<div id="content">
		<div class="row">
		{% for Terrain in listTerrain %}
	  		 <div id="backterrain" class="terrain" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><div id="showDetailTerrain"><a href="showDetailTerrain/{{ Terrain.id }}">{{ Terrain.titre }}</a></div></div>
	  {% endfor %}		
	  	</div>
	</div>  
{% endblock %}
