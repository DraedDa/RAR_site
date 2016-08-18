{% extends 'base.html.twig' %}
{% block body %}
<div id="content">
        <form id="connexion" method="post" action="inscriptionPartie">
            <fieldset>
                <legend>inscription partie</legend>     
                <label for="parties">Partie disponibles<span class="requis">*</span></label>                
                <select>
                	<option>test
                	<OPTION VALUE="sessionScope.sessionUilisateur.listPartie[1]);">
                </select>
                <span class="erreur">${form.erreurs['parties']}</span>

                <label for="username">username<span class="requis">*</span></label>
                <input type="text" id="username" name="username" value="${sessionScope.sessionUtilisateur.username}" onclick="this.value ='';" size="20" maxlength="60" disabled />
                <span class="erreur">${form.erreurs['username']}</span>
                
                <label for="nom">Nom <span class="requis">*</span></label>
                <input type="text" id="nom" name="nom" value="<c:out value="${sessionScope.sessionUtilisateur.nom}"/>" onclick="this.value = '';" size="20" maxlength="20" disabled />
                <span class="erreur">${form.erreurs['nom']}</span>
                
                <label for="prenom">Prénom<span class="requis">*</span></label>
                <input type="text" id="prenom" name="prenom" value="<c:out value="${sessionScope.sessionUtilisateur.prenom}"/>" onclick="this.value = '';" size="20" maxlength="20" disabled />
                <span class="erreur">${form.erreurs['prenom']}</span>
                
                <label for="mail">Adresse mail<span class="requis">*</span></label>
                <input type="text" id="mail" name="mail" value="<c:out value="${sessionScope.sessionUtilisateur.email}"/>" onclick="this.value = '';" size="20" maxlength="20" disabled />
                <span class="erreur">${form.erreurs['mail']}</span>
                
                <label for="phone">Numéros de téléphone <span class="requis">*</span></label>
                <input type="text" id="phone" name="phone" value="<c:out value="${sessionScope.sessionUtilisateur.phone}"/>" onclick="this.value = '';" size="20" maxlength="20" disabled />
                <span class="erreur">${form.erreurs['phone']}</span>
                
                <label for="payement">Payement<span class="requis">*</span></label>
                <input type="radio" id="payement" name="payement" value="paypal" size="20" maxlength="60" />paypal (CB)
                <input type="radio" id="payement" name="payement" value="cash"size="20" maxlength="60" />Sur place (cash)
                <span class="erreur">${form.erreurs['payement']}</span>			
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