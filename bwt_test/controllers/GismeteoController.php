
<?php

namespace app\controllers;

use Yii;

use GuzzleHttp\Client;
use yii\helpers\Url;


class GismeteoController extends Controller
{
    public function actionGismeteo()
    {

        // создаем экземпляр класса
        $client = new Client();
        // отправляем запрос к странице Яндекса
        $res = $client->request('GET', 'https://www.gismeteo.ua/weather-zaporizhzhya-5093/');
        // получаем данные между открывающим и закрывающим тегами body
        $body = $res->getBody();
        // вывод страницы Яндекса в представление
        return $this->render('gismeteo', ['body' => $body]);
    }
}