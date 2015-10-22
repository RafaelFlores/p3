

<!DOCTYPE HTML>

<html>
	<head>
    <title>
        @yield('title', 'DeveloperBF')
    </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php echo HTML::style('css/main.css');?>
    

	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->

				<header id="header" class="alt">
					<h1><a href="/">Developer BestFriend</a> by Rafael@CS15</h1>
					<nav id="nav">
						<ul>
							<li><a href="/" class="button">Home</a></li>

							<li><a href="/lorem" class="button">LoremIpsum</a></li>
              <li><a href="/randomuser" class="button">RandomUser</a></li>
							<li><a href="/passgen" class="button">PasswordGenerator</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->

      <section id="banner">
        @yield('content')
      </section>




			<!-- Footer -->

				<footer id="footer" class="alt">
          <ul class="actions">
            <li><a href="/lorem" class="button special">LoremIpsum Generator</a></li>
            <li><a href="/randomuser" class="button">Random User Generator</a></li>
						<li><a href="/passgen" class="button special">xkcd Password Generator</a></li>
          </ul>

				</footer>

		</div>



	</body>
</html>
