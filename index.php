<?php
    $type = $_REQUEST["type"];

    switch($type)
    {
        case "legislators":
            {
                $url = "http://104.198.0.197:8080/legislators?per_page=all";
                $json = file_get_contents($url);
                echo $json;
                break;
            }
        case "bills":
            {
                $url = "http://104.198.0.197:8080/bills?per_page=50";
                $json = file_get_contents($url);
                echo $json;
                break;
            }
        case "committees":
            {
                $url = "http://104.198.0.197:8080/committees?per_page=all";
                $json = file_get_contents($url);
                echo $json;
                break;
            }
        case "biocomm":
            {
                $url = "http://104.198.0.197:8080/committees?member_ids=";
                $bioid = $_REQUEST["bio"];
                $url .= $bioid;
                $url .= "&per_page=5&page=1";
                $json = file_get_contents($url);
                echo $json;
                break;
            }
        case "biobill":
            {
                $url = "http://104.198.0.197:8080/bills?sponsor_id=";
                $bioid = $_REQUEST["bio"];
                $url .= $bioid;
                $url .= "&per_page=5&page=1";
                $json = file_get_contents($url);
                echo $json;
                break;
            }
    }


?>