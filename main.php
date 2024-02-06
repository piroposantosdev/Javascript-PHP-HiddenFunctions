<?php
    // Start the session
    session_start();

    // Check if the session variable is set
    if (!isset($_SESSION['access_granted'])) {         
        echo "error";
        exit();
    }

    //Check if the PHP script is accessed from the page using AJAX or XMLHttpRequest or IFRAME or if is a direct URL access//
    if(isset($_SERVER['HTTP_REFERER']) && str_contains($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME'])) { 
        //Javascript function to parse as response//       
        $function = "            
            var xhr2 = new XMLHttpRequest();
            xhr2.open('GET', './x1', true); //Second script that will be rewritten by the .htaccess file
            xhr2.onreadystatechange = function () {
                if (xhr2.readyState == 4 && xhr2.status == 200) {
                    var response = JSON.parse(xhr2.responseText);                    
                    //Your content from hidden PHP File goes here;                   
                }
            };
            xhr2.send();            
        ";

        //Optional - Convert javascript function to Base64 code//
        $jsArguments = base64_encode($function);

        //Convert back from Base64 to Normal String//
        $jsFunctionName = 'atob';
        

        // Concatenate the parts into a string that can be evaluated by JavaScript
        $jsCode = $jsFunctionName . "('" . $jsArguments . "')";

        header('data:'. $jsCode);                
    } else {
        // Page is accessed directly by URL and client is redirected to an Error page
        header("Location: ./error.html");        
    }
?>