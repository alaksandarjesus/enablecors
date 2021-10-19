<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QueryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {

        $this->validate($request, [
            'url' => 'required',
        ]);

        $url = $request->get('url');

        $request_headers = $request->get('requestHeaders', null);

        $base64 = $request->get('base64', null);

        $headers = [];

        if (!empty($request_headers)) {

            $headers = (array) json_decode(base64_decode($request_headers));

        }

        $decoded = base64_decode($url);

        $client = new \GuzzleHttp\Client();

        $form_params = [];

        $method = $request->method();

        if($method === 'POST' || $method === 'PUT'){

            $form_params = $request->get('payload', []);
        }
        
        try {

            $response = $client->request($method, $decoded, ['headers' => $headers, 'form_params' => $form_params]);

            $body = $response->getBody();

            $data = (string) $body->getContents();

            if ($base64 && json_decode($base64)) {
                $base64_string = 'data:' . $response->getHeaders()['Content-Type'][0];
                $base64_string .= ';base64,';
                $base64_string .= base64_encode($data);
                return (new Response($base64_string, $response->getStatusCode()));
            }
            return (new Response($data, $response->getStatusCode()))->withHeaders($response->getHeaders());
        } catch (ConnectException $e) {
            $statusCode = 404;
            return (new Response(null, $statusCode));
        } catch (RequestException $e) {
            $err = $e->getResponse()->getBody(true);
            $statusCode = $e->getResponse()->getStatusCode();
            $headers = [
                'Content-Type' => $e->getResponse()->getHeaderLine('Content-Type'),
            ];
            return (new Response($err, $statusCode))->withHeaders($headers);
        }

    }

  
    //
}
