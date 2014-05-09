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
        $tokens[0] = static::getConfig()->twitter->oauth_access_token;
        $tokens[1] = static::getConfig()->twitter->oauth_access_token_secret;
        $tokens[2] = static::getConfig()->twitter->consumer_key;
        $tokens[3] = static::getConfig()->twitter->consumer_secret;

        return $tokens;
    }
}