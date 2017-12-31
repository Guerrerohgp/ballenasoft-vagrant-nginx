<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellcome</title>
        
        <link href="/assets/logo-white.png" rel="stylesheet" type="icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #1c1c1c;
                color: #0090d9;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .floating{
			    float: left;
			    -webkit-animation-name: Floatingx;
			    -webkit-animation-duration: 3s;
			    -webkit-animation-iteration-count: infinite;
			    -webkit-animation-timing-function: ease-in-out;
			    -moz-animation-name: Floating;
			    -moz-animation-duration: 3s;
			    -moz-animation-iteration-count: infinite;
			    -moz-animation-timing-function: ease-in-out;
			    margin-left: 30px;
			    margin-top: 5px;
			}

			@-webkit-keyframes Floatingx{
			    from {-webkit-transform:translate(0, 0px);}
			    65% {-webkit-transform:translate(0, 15px);}
			    to {-webkit-transform: translate(0, -0px);    }    
			}
			    
			@-moz-keyframes Floating{
			    from {-moz-transform:translate(0, 0px);}
			    65% {-moz-transform:translate(0, 15px);}
			    to {-moz-transform: translate(0, -0px);}    
			}


			.scaling{
			    float: left;
			    -webkit-animation-name: scalex;
			    -webkit-animation-duration:3s;
			    -webkit-animation-iteration-count:infinite;
			    -webkit-animation-timing-function:ease-in-out;
			    -moz-animation-name: scale;
			    -moz-animation-duration:3s;
			    -moz-animation-iteration-count:infinite;
			    -moz-animation-timing-function:ease-in-out;
			}
			    
		    @-webkit-keyframes scalex{
		        from {-webkit-transform: scale(0.9);}
		        65% {-webkit-transform: scale(1.0);}
		        to {-webkit-transform: scale(0.9);}    
		    }
		        
		    @-moz-keyframes scale{
		        from {-moz-transform: scale(0.9);}
		        65% {-moz-transform: scale(1.0);}
		        to {-moz-transform: scale(0.9);}    
		    }
			.center{    
				width: 250px;
			    margin: 0 auto;
			    position: absolute;
			    top: 60%;
			    left: 0;
			    right: 0;
			}
            a {
                display: inline-block;
                text-transform: uppercase;
                padding: 8px 10px;
                margin: 20px 50px;
                position: relative;
                z-index: 10;
                font-weight: 600;
                cursor: pointer;
                text-decoration: none;
                color: #444;
            }

             a.borders {
                color: #f3fafc;
                -webkit-transition: color 0.4s ease-in-out;
                transition: color 0.4s ease-in-out;
              }
              a.borders::before,
              a.borders::after,
              a.borders span::before,
              a.borders span::after {
                position: absolute;
                content: '';
                background: #198edf;
                -webkit-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
              }
              a.borders::before,
              a.borders::after {
                width: 2px;
              }
              a.borders::before {
                top: 0;
                left: 0;
                bottom: 70%;
              }
              a.borders::after {
                bottom: 0;
                right: 0;
                top: 70%;
              }
              a.borders span::before,
              a.borders span::after {
                height: 2px;
                -webkit-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
              }
              a.borders span::before {
                top: 0;
                left: 0;
                right: 90%;
              }
              a.borders span::after {
                bottom: 0;
                right: 0;
                left: 90%;
              }
              a.borders:hover {
                color: white;
                -webkit-transition: color 0.4s ease-in-out;
                transition: color 0.4s ease-in-out;
              }
              a.borders:hover::before,
              a.borders:hover::after,
              a.borders:hover span::before,
              a.borders:hover span::after {
                -webkit-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
                background: #198edf;
              }
              a.borders:hover::before {
                bottom: 0;
              }
              a.borders:hover::after {
                top: 0;
              }
              a.borders:hover span::before {
                right: 0;
              }
              a.borders:hover span::after {
                left: 0;
              }
              a.borders:active {
                text-shadow: 0 2px rgba(0, 0, 0, 0.2);
              }
              a.borders:active::before,
              a.borders:active::after,
              a.borders:active span::before,
              a.borders:active span::after {
                -webkit-transform: scale(0.85);
                        transform: scale(0.85);
              }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="buttons" style="position: absolute;top: 15%;">
                <a class="borders" target="_blank" href="http://guerrerohgp.com/blog/vagrant-ballenasoft-nginx"><span>More Info</span></a>
                <a class="borders" target="_blank" href="/phpmyadmin/"><span>PhpMyadmin</span></a>
                <a class="borders" target="_blank" href="http://192.168.26.26:8025"><span>Mail Hog</span></a>
                <a class="borders" target="_blank" href="/phpinfo.php"><span>PhpInfo</span></a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Looks Good!<br>
                    <img src="/assets/logo-white2.png" alt="Ballenasoft" class="floating center">
                </div>
            </div>
        </div>
    </body>
</html>