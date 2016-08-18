{% extends 'base.html.twig' %}
{% block body %}
	<div id="content">
	<div id="title"><center><h3>Prochaine Partie</h3></center>
	</div>
	<div id="hided" class="col-md-12" class="hidden" style="display:none">
		Etat de la partie : ${sessionScope.sessionPartie.etat}<br>
		Nombre de participant : ${sessionScope.sessionPartie.inscrit}<br>
		<br>
		<br>
		Informations : <br>
		Les autorités ont connaissance du déroulement d'une partie depuis le : JJ/MM/AAAA.<br>
		
		<div class="size" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
		Image de partie
		</div>
		
		<div class="size" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
		Plan d'accès
		</div>
		
		<div class="size" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
		Météo
		</div>
		
		<div class="size" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
		Contacts
		</div>
		
	</div>
	<div class="size" class="col-md-12" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
	<div class="size" class="col-md-12" class="btn btn-primary">
	<center>
	Pour toutes informations complémentaires, nos coordonnées sont dans l'onglet contact.</br>
	</center>
	<div class="col-md-4" class="btn btn-primary">youtube</div>
	<div class="col-md-4" class="btn btn-primary">facebook page</div>
	<div class="col-md-4" class="btn btn-primary">Airsoft Révolution</div>
	
	</div>
	</div>
	
	</div> 
{% endblock %}
