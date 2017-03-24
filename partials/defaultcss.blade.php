<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>

<!-- Styles -->
{{generate_theme_css('mallaneka/assets/css/bootstrap.css')}}
{{generate_theme_css('mallaneka/assets/css/font-awesome.css')}}
@if($tema->isiCss=='')
	{{generate_theme_css('mallaneka/assets/css/styles.css')}}
@else
	{{generate_theme_css('mallaneka/assets/css/editstyle.css')}}
@endif
{{generate_theme_css('mallaneka/assets/css/mystyles.css')}}

{{favicon()}}