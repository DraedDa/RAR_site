{% trans_default_domain 'FOSUserBundle' %}
{% extends 'base.html.twig' %}
{% block body %}
<div id="content">
        <form id="connexion" method="post" action="inscriptionPartie">
            <fieldset>
                <legend>inscription pour partie {{ Partie.partieName }}</legend>                    

                <label for="username">username<span class="requis">*</span></label>
                <input type="hidden" id="username" name="username" value="{{ user.username }}"/>
                {{ user.username }}  <br><br>           
                
                <label for="nom">Nom <span class="requis">*</span></label>
                <input type="text" id="nom" name="nom" value="${sessionScope.sessionUtilisateur.nom}"/>
                
                <label for="prenom">Prénom<span class="requis">*</span></label>
                <input type="text" id="prenom" name="prenom" value="${sessionScope.sessionUtilisateur.prenom}"/>

                
                <label for="mail">Adresse mail<span class="requis">*</span></label>
                <input type="hidden" id="email" name="email" value="{{ user.email }}"/>
                {{ user.email }} <br><br>

                <label for="phone">Numéros de téléphone <span class="requis">*</span></label>
                <input type="text" id="phone" name="phone" value="${sessionScope.sessionUtilisateur.phone}"/>

                
                <label for="payement">Payement<span class="requis">*</span></label>
                <input type="radio" id="payement" name="payement" value="paypal" size="20" maxlength="60" />paypal (CB)
                <input type="radio" id="payement" name="payement" value="cash"size="20" maxlength="60" />Sur place (cash)
		
				</br>
                <input type="submit" value="S'inscrire à la partie" class="sansLabel" id="retour"/>	
                
                <div id="innerframmepay">innerframe</div>
            </fieldset>
        </form>
        </br>
	Choix de Payement : 
	requête sql de test : 
	<!--SI le champ prix de partie n'est pas vide => la partie est payante -->
	if select nom_partie from partie where prix = null 
	then 
		afficher la valeur du champ prix
		afficher fonction htmlinput (
			Moyen de payement :
			Case à cocher (choix unique, on ne sélectionne plusieurs moyens de payement)
			ex : Paypal (introduction du code paypal)
				 Sur place (cash)
		)		 

	else 
		aficher partie gratuite

	Fonction de test des champs
	
	javascript :
	http://www.lafermeduweb.net/billet/tutorial-integrer-paypal-a-son-site-web-en-php-partie-1-275.html
	while payement paypal code retour nonOK 
	then bouton s'inscrire grisé
	</div> 
    {% endblock %}