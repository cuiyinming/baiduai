<?php
namespace cym\BaiduAi;

use cym\BaiduAi\Service\AipNlp;
use cym\BaiduAi\Service\AipSpeech;
use cym\BaiduAi\Service\AipFace;
use cym\BaiduAi\Service\AipImageCensor;
use cym\BaiduAi\Service\AipImageClassify;
use cym\BaiduAi\Service\AipKg;
use cym\BaiduAi\Service\AipImageSearch;
use cym\BaiduAi\Service\AipOcr;

class Ai
{
    const MAP = [
            'Nlp' => AipNlp::class,
            'Speech' => AipSpeech::class,
            'Face' => AipFace::class,
            'ImageCensor' => AipImageCensor::class,
            'ImageClassify' => AipImageClassify::class,
            'Kg' => AipKg::class,
            'ImageSearch' => AipImageSearch::class,
            'Ocr' => AipOcr::class,
    ];

    protected $driver;
    protected $app_id;
    protected $api_key;
    protected $api_secret;

    public function __construct($app_id, $api_key, $api_secret)
    {
        $this->app_id = $app_id;
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
    }
    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        if (!key_exists($name, self::MAP)) {
            throw new \Exception('driver does not exists.');
        }
        $driver = self::MAP[$name];
        return new $driver($this->app_id, $this->api_key, $this->api_secret);
    }
}