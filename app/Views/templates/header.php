<!doctype html>
<html>
<head>
    <title>Portal de notícies</title>
    
    <style>

        body{
            margin: 50px;
            background-color: #ECB59D;
        }

        ul {
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 20px;
			text-align: center;
		}
		li {
			display: inline-block;
            padding: 10px;
		}

        li a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
            text-decoration: none;
		}

		li a:hover{
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
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

        .buttonCRUD{
            background-color: #119E1C;
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

        .buttonCRUD:hover {
            background-color: white; 
            color: black; 
            border: 2px solid #119E1C;
        }



    </style>
</head>
<body>

    <h1><?= esc($title) ?></h1>