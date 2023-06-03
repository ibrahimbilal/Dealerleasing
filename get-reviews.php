<?php

// Prevent direct access to a php file
if (!isset($_SERVER['HTTP_REFERER'])) {

    header('HTTP/1.0 403 Forbidden', TRUE, 403);

    /* choose the appropriate page to redirect users */
    die(header('location: https://ibrahimbilal.com/my_projects/dealerleasing/ '));

} else {

    function connect() {
        // init curl
        $ch = curl_init();
        // HTTP headers
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
        );
        // set curl url
        curl_setopt($ch, CURLOPT_URL, "https://app.richplugins.com/gpaw/get/json?siteurl=https://ibrahimbilal.com/my_projects/dealerleasing/&authcode=8886cb8707de1991f929e33a4b5bc0e4&pid=ChIJ12UUTpYnx0cRVjdgMWQIz0k&lang=nl-NL");
        // set HTTP headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the transfer as a string

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // get results
        $result = curl_exec($ch);

        // send results to fornt-end
        echo $result;
    }

    connect();
}
