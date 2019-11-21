<?php

namespace App\Controller;

use App\Entity\Days;
use DateTime;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    public function api(){

    }

    private function connect(){
        $url = 'https://api.tutiempo.net/xml/?lan=es&apid=zwDX4azaz4X4Xqs&lid=3768';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);


        $result = curl_exec($ch);
        $data = new \SimpleXMLElement($result, LIBXML_NOCDATA);

        return $data;
    }


    /**
     * @Route("/weather")
     */
    public function elements(){
        $element = $this->connect();

        $monday = new Days();
        foreach ($element->day1 as $day) {
            $monday->setDate($day->date);
            $monday->setTemperatureMax(intval($day->temperature_max));
            $monday->setTemperatureMin(intval($day->temperature_min));
            $monday->setText($day->text);
            $monday->setWind(intval($day->wind));
            $monday->setWindDirection($day->wind_direction);
            $monday->setSunrise($day->sunrise);
            $monday->setSunset($day->sunset);
            $monday->setMoonrise($day->moonrise);
            $monday->setMoonset($day->moonset);

        }

        return $this->render('home.html.twig',[
            'monday' => $monday
        ]);



    }
}
