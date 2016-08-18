{% extends 'base.html.twig' %}
{% block body %}
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">
<head>
  <meta http-equiv="Content-Language" content="fr" />
  <meta name="Copyright" content="v.sypowski" />
  <meta name="Author" content="v.sypowski" />
  <meta protected_copyright="true">
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <link href="{{ asset('bundles/framework/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('bundles/framework/css/styles.css') }}" rel="stylesheet" />
  <script type="text/javascript" src="{{ asset('bundles/framework/js/jquery-3.10.min.js') }}"></script>
  <script src="{{ asset('bundles/framework/js/bootstrap.min.js') }}"></script>
  </head>
	</body>
		<div id="content">
			<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23AC9D84&amp;ctz=Indian%2FReunion" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>  
{% endblock %}