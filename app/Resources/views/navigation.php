<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">
<head>
  <meta http-equiv="Content-Language" content="fr" />
  <meta name="Copyright" content="v.sypowski" />
  <meta name="Author" content="v.sypowski" />
  <meta protected_copyright="true">
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <title>RAR</title>
  <link href="{{ asset('bundles/framework/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('bundles/framework/css/styles.css') }}" rel="stylesheet" />
  <script type="text/javascript" src="{{ asset('bundles/framework/js/jquery-3.10.min.js') }}"></script>
  <script src="{{ asset('bundles/framework/js/bootstrap.min.js') }}"></script>
</head>
</body>
	<div id="menu">
		<ul>
		<c:if test="${!empty sessionScope.sessionUtilisateur}">
          <%-- Si l'utilisateur existe en session, alors --%>
           <li><a href="/RAR/deconnexion">Déconnexion</a></li>
           <li><a href="/RAR/profil">Profil</a></li>
         </c:if>
         
         <c:if test="${empty sessionScope.sessionUtilisateur}">
          <%-- Si l'utilisateur n'existe pas en session, alors --%>
           <li><a href="/RAR/inscription">Inscription</a></li>
           <li><a href="/RAR/connexion">Connexion</a></li>
         </c:if>
			 <li><a href="/RAR/contact">Contact</a></li>
			 <li><a href="/RAR/regles">Nos règles</a></li>
			 <!-- <li><a href="/RAR/historiqueParties">Historique parties	</a></li> -->
			 <li><a href="/RAR/agenda">Agenda</a></li>
			 <li><a href="/RAR/inscriptionPartie">Inscription Parties</a></li>
			 <li><a href="/RAR/terrain">Terrain</a></li>
			 <li><a href="/RAR/index">Accueil</a></li>
		</ul>
	</div>
</body>
</html>