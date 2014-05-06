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

            echo "<div class=\"col-md-4\">";
            echo "<button type=\"button\" class=\"btn social-button\" style=\"background-color: " . $background . "\">";

            echo "<div class=\"social-icon\">";
            echo "<i class=\"fa " . $icon . " fa-5x\"></i>";
            echo "</div>";

            echo "<div class=\"social-body\">";
            echo "<h3 class=\"social-title\">" . $name . "</h3>";
            echo "<p class=\"social-description\">TODO: Show followers / subscribers / likes / whatever</p>";
            echo "</div>";

            echo "</button>";
            echo "</div>";
        }

        echo "</div>";
    }
} 