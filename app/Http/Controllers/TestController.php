<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function sendMessages()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v12.0/101213296151399/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to": "51935219103",
    "type": "template",
    "template": {
        "name": "hello_world",
        "language": {
            "code": "en_US"
        }
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAISZBf9Xhr8BANXpc9h5ZAZBpOuDxybEybgcZClIyYEaKwxaAyj0ns7Wjm8vyDwZAULxXjUYGZC3Cu2M3q6U6oW4jE2rIHbQ6jYoGlaRjcyoFSrGjkZCZCA5n1K4W0cemZBxWQRSC7tEfzP71DUHkY7x1r0OBTk1ZCRSWHu8YSFTTr42oe3EPhVQakP8s5CfZCFdCTm4Pd1bh2DQZDZD'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
