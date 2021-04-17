<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	body{
            margin: 50px;
            background-color: #ECB59D;
        }

		a.back, a.crud{
            display: block;
            margin: 20px;
        }

        .button{
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 16px 18px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button:hover {
            background-color: white; 
            color: black; 
            border: 2px solid #008CBA;
        }
		</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
	    <a class="back" href='<?php echo site_url('news')?>'><button class="button">Tornar a la llista de notícies</button></a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

	<em>&copy; Portal de notícies - Tània Garcia Font - 2n semestre curs 2020/21</em>

</body>
</html>
