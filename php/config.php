<?php
class config
{
    public static function getWebsiteTitle()
    {
        return static::getConfig()->website_title;
    }

    private static function getConfig()
    {
        $config = json_decode(file_get_contents("./config.json"));
        $config = $config->config;

        return $config;
    }
}