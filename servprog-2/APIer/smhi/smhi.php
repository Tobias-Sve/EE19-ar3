<?php
    //Adress to the API
    $url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";
    //Explanation: 
    //https://opendata.smhi.se/apidocs/metfcst/parameters.html

    //Call the API
    $json = file_get_contents($url);

    //Decode JSON answer
    $dataJSON = json_decode($json);

    //Extract the datas
    $timeSeries = $dataJSON->timeSeries;

    //Send a JSON answer
    $tempData = [];

    foreach ($timeSeries as $timeStamp) {
    
        
        //Create empty object
        $data = new stdClass();
        
        //Get the time
        $time = $timeStamp->validTime;
        $data->label = $time;


        $parameters = $timeStamp->parameters;
        //Search for the temperature
        foreach ($parameters as $parameter) {
            if ($parameter->name == "t") {
                $temp = $parameter->values[0];
                $data->t = $temp;
                
                //Put together a JSON package
                $tempData[] = $data;
            }
        }
        //echo $time . " ($i): " . $temp . "<br>";
    }

    echo json_encode($tempData);


    ?>