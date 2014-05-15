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

    public static function getTwitterTokens()
    {
        $tokens["oauth_access_token"] = static::getConfig()->twitter->oauth_access_token;
        $tokens["oauth_access_token_secret"] = static::getConfig()->twitter->oauth_access_token_secret;
        $tokens["consumer_key"] = static::getConfig()->twitter->consumer_key;
        $tokens["consumer_secret"] = static::getConfig()->twitter->consumer_secret;

        return $tokens;
    }
}