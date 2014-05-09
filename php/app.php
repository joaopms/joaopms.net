<?php
class app
{
    public static function renderSocialSites()
    {
        $social = json_decode(file_get_contents("./config.json"));
        $social = $social->social;

        echo "<div class=\"row social-row\">";

        foreach ($social as $website) {
            $icon = $website->icon;
            $background = $website->background;

            $name = $website->name;
            $url = $website->url;

            echo "<div class=\"col-md-4\">";
            echo "<a type=\"button\" class=\"btn social-button\" style=\"background-color: " . $background . "\" role=\"button\" href=\"" . $url . "\" target=\"_blank\">";

            echo "<div class=\"social-icon\">";
            echo "<i class=\"fa " . $icon . " fa-5x\"></i>";
            echo "</div>";

            echo "<div class=\"social-body\">";
            echo "<h3 class=\"social-title\">" . $name . "</h3>";

            switch ($name) {
                case "YouTube":
                    echo "<p class=\"social-description\">" . static::getYoutubeSubscribers($url) . "</p>";
                    break;
                default:
                    echo "<p class=\"social-description\">Placeholder</p>";
                    break;
            }

            echo "</div>";

            echo "</a>";
            echo "</div>";
        }

        echo "</div>";
    }

    private static function getYoutubeSubscribers($url)
    {
        $username = explode("/", $url);
        $username = $username[count($username) - 1];

        $data = json_decode(file_get_contents("http://gdata.youtube.com/feeds/api/users/" . $username . "?alt=json"), true);
        $statistics = $data["entry"]['yt$statistics'];
        $subscriberCount = $statistics["subscriberCount"];
        return $subscriberCount . " " . ($subscriberCount == 1 ? "inscrito" : "inscritos");
    }
} 