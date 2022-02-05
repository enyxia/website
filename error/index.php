<?php

$error_code = "";

if (isset($_GET['code']) && !empty($_GET['code'])){
    $error_code = $_GET['code'];
}

$error_name = "Erreur inconnue.";
$error_message = "Mh, c'était pas prévu ça.";

switch ($error_code) {
    case '400':
		$error_name = "Bad Request";
		$error_message = "Your browser sent a request that this server could not understand. Client sent malformed Host header.";
		break;

	case '401':
 		$error_name = "Authorization Required";
 		$error_message = "This server could not verify that you are authorized to access the document requested. Either you supplied the wrong credentials (e.g., bad password), or your browser doesn't understand how to supply the credentials required.";
 	  break;

	case '403':
 		$error_name = "Forbidden";
 		$error_message = "You do not have permission to access this document/directory.";
 	  break;

	case '404':
 		$error_name = "Page Not Found";
 		$error_message = "This page either doesn't exist, or it moved somewhere else.";
 	  break;

	case '405':
 		$error_name = "Method Not Allowed";
 		$error_message = "The HTTP verb used to access this page is not allowed.";
 	  break;

 	case '406':
 		$error_name = "Not Acceptable";
 		$error_message = "Your client browser does not accept the MIME type of the requested page.";
 	  break;

	case '407':
 		$error_name = "Proxy Authentication Required";
 		$error_message = "You must be authenticated by a proxy server before the Web server can execute your request.";
 	  break;

	case '412':
 		$error_name = "Precondition Failed";
 		$error_message = "The request was not completed due to preconditions that are set in the request header. Preconditions prevent the requested method from being applied to a resource other than the one intended.";
 	  break;

 	case '414':
 		$error_name = "Request-URI Too Long";
 		$error_message = "The Web server is refusing to service the request because the requested URL address is too long.";
 	  break;

 	case '415':
 		$error_name = "Unsupported Media Type";
 		$error_message = "The Web server cannot service the request because the requested file is in a format that the server is configured not to download.";
 	  break;

	case '500':
	  $error_name = "Internal Server Error";
	  $error_message = "The server encountered an internal error or misconfiguration and was unable to complete your request. Please contact the server administrator to inform of the time the error occurred and of anything you might have done that may have caused the error. More information about this error may be available in the server error log.";
	  break;

	case '501':
		$error_name = "Not Implemented";
		$error_message = "The page you are looking for cannot be displayed because a header value in the request does not match certain configuration settings on the Web server.";
	    break;

	case '502':
		$error_name = "Bad Gateway";
		$error_message = "Web server received an invalid response while acting as a gateway or proxy server.";
        break;

	case '503':
		$error_name = "Service Temporarily Unavailable";
		$error_message = "The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.";
	    break;

    default:
        $error_code = "";
        break;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php  include '../assets/meta.php' ?>

    <title>Enyxia - Erreur <?php echo $error_code; ?></title>

    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;

            background-color: white;
            background-image: url("../images/mosaiquenotquiteblack.png");
            background-attachment: fixed;
            color: black;
        }

        #content {
            padding-top: 15px;
            background-color: #f7f7f7;
        }

        #desc {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #category {
            background-color: white;
            border: 1px solid #d4d4d4;
            border-radius: 5px;
            text-align: justify;
            text-justify: inter-word;
            margin-bottom: 20px;
        }

        #title {
            font-family: 'Alegreya Sans SC', sans-serif;
            font-weight: 500;
            font-size: 250%;
        }
    </style>

</head>
<body>

    <?php  include '../assets/navdiv.php' ?>

    <div id="content" class="container">

        <p id="desc">
            <b><?php echo $error_code; ?> <?php echo $error_name; ?></b> 
            <br><br>
            <?php echo $error_message; ?>
        </p>

        <hr>

        <p id="desc" class="text-center">
            <b>Si l'erreur persiste, nous vous conseillons de regarder cette vidéo en attendant.</b>
            <iframe style="padding-top:2%" width="560" height="315" src="https://www.youtube-nocookie.com/embed/_yqSbnbUsj4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>

        <hr>

        <?php  include '../assets/footer.php' ?>

    </div>

</body>
</html>
