<?php
class app
{
    public static function renderSocialSites()
    {
        $social = json_decode(file_get_contents("./social.json"));

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
            echo "<p class=\"social-description\">TODO: Show followers / subscribers / likes / whatever</p>";
            echo "</div>";

            echo "</a>";
            echo "</div>";
        }

        echo "</div>";
    }
} 