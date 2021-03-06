<html>
	<head>
		<title>Laravel</title>
		
                <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
                                <nav class='nav navbar nav-pills'>
                                    <ul class="nav nav-tabs nav-justified">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                    </ul>
                                </nav>
			</div>
		</div>
	</body>
</html>
