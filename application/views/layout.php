<html>

<head>
    <title>edUcate - {_title}</title>
    <meta name="description" content="<?php echo $_description ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="refresh" content="7200" />
    <meta name="application-name" content="edUcate" />
    <meta name="keywords" content="edUcate, videos, educacion" />
    <meta name="author" content="edUcate" />
    <meta name="revisit-after" content="30 days" />
    <meta name="distribution" content="web" />
    <meta name="robots" content="index, follow" />
    <link href="assets\img\icons\reproductor-de-video.png" type="image/png" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css?v=<?php echo date("YmdHi")?>" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.min.css?v=<?php echo date("YmdHi")?>">
</head>

<body class="bg-body">

	<?php 
		$this->load->model('areas_model');   
		$CI = get_instance();
		$areas = $CI->areas_model->get_areas();
		$this->load->view('sections/navbar', ['areas' => $areas, 'CI' => $CI]); 
	?>

    {_content}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=<?php echo date("YmdHi")?>" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js?v=<?php echo date("YmdHi")?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js?v=<?php echo date("YmdHi")?>" crossorigin="anonymous"></script>
</body>

</html>