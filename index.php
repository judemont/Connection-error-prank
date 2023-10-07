<?php
function getBrowser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "N/A";

    $browsers = [
        '/msie/i' => 'ie',
        '/firefox/i' => 'firefox',
        '/safari/i' => 'safari',
        '/chrome/i' => 'chrome',
        '/edge/i' => 'edge',
        '/opera/i' => 'opea',
        '/mobile/i' => 'mobile',
    ];

    foreach ($browsers as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }

    return $browser;
}


switch (getBrowser()) {
    case 'firefox':
        include_once("firefox.html");
        break;
    
    default:
        include_once("chrome.html");
        break;
}

?>