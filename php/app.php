<?php
class app
{
    public static function renderSocialSites()
    {
        $social = json_decode(file_get_contents("./social.json"));

        foreach ($social as $website) {
            echo $website->displayName;
        }
    }
} 