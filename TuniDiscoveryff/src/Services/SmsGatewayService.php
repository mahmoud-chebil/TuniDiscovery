<?php

//app/src/Service/SmsGatewayService.php
namespace App\Services;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Infobip\Configuration;
use Infobip\Api\SendSmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;
use GuzzleHttp\Client;

class SmsGatewayService
{
    private $params;

    public function __construct(ContainerBagInterface $params)
    {
        $this->params = $params;
    }

    public function send(array $messages)
    {
        $baseurl = $this->params->get("sms_gateway.baseurl");
        $apikey = $this->params->get("sms_gateway.apikey");
        $apikeyPrefix = $this->params->get("sms_gateway.apikeyprefix");

        $configuration = (new Configuration())
            ->setHost($baseurl)
            ->setApiKeyPrefix('Authorization', $apikeyPrefix)
            ->setApiKey('Authorization', $apikey);

        $client = new Client();
        $sendSmsApi = new SendSMSApi($client, $configuration);
        $_messages = [];

        foreach($messages as $message){
            $destination = (new SmsDestination())->setTo($message["to"]);
            $_messages[] = (new SmsTextualMessage())
                ->setFrom($message["from"])
                ->setText($message["message"])
                ->setDestinations([$destination])
            ;
        }

        $request = (new SmsAdvancedTextualRequest())->setMessages($_messages);

        return $sendSmsApi->sendSmsMessage($request);
    }
}