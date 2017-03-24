<?php

/* /var/www/html/themes/martin-new-event/partials/template/navbar.htm */
class __TwigTemplate_29a0a621034933f6bb6ed9b26faa3547ebc72a8f8546fa9e1569e39fa67fb57f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
    <div class=\"container\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
            </button>
            <a href=\"#\" class=\"navbar-brand\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_brand", array()), "html", null, true);
        echo "</a>
        </div>

        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#intro\"    class=\"smoothScroll\">Intro</a></li>
                ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_overview", array())) {
            echo "<li><a href=\"#overview\" class=\"smoothScroll\">Overview</a></li>";
        }
        // line 17
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_speakers", array())) {
            echo "<li><a href=\"#speakers\" class=\"smoothScroll\">Speakers</a></li>";
        }
        // line 18
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_program", array())) {
            echo "<li><a href=\"#program\"  class=\"smoothScroll\">Programs</a></li>";
        }
        // line 19
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_register", array())) {
            echo "<li><a href=\"#register\" class=\"smoothScroll\">Register</a></li>";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_venue", array())) {
            echo "<li><a href=\"#venue\"    class=\"smoothScroll\">Venue</a></li>";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_sponsors", array())) {
            echo "<li><a href=\"#sponsors\" class=\"smoothScroll\">Sponsors</a></li>";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_contact", array())) {
            echo "<li><a href=\"#contact\"  class=\"smoothScroll\">Contact</a></li>";
        }
        // line 23
        echo "            </ul>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  68 => 22,  63 => 21,  58 => 20,  53 => 19,  48 => 18,  43 => 17,  39 => 16,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar navbar-fixed-top custom-navbar\" role=\"navigation\">
    <div class=\"container\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
                <span class=\"icon icon-bar\"></span>
            </button>
            <a href=\"#\" class=\"navbar-brand\">{{ this.theme.settings_brand }}</a>
        </div>

        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#intro\"    class=\"smoothScroll\">Intro</a></li>
                {% if this.theme.settings_overview  %}<li><a href=\"#overview\" class=\"smoothScroll\">Overview</a></li>{% endif %}
                {% if this.theme.settings_speakers  %}<li><a href=\"#speakers\" class=\"smoothScroll\">Speakers</a></li>{% endif %}
                {% if this.theme.settings_program   %}<li><a href=\"#program\"  class=\"smoothScroll\">Programs</a></li>{% endif %}
                {% if this.theme.settings_register  %}<li><a href=\"#register\" class=\"smoothScroll\">Register</a></li>{% endif %}
                {% if this.theme.settings_venue     %}<li><a href=\"#venue\"    class=\"smoothScroll\">Venue</a></li>{% endif %}
                {% if this.theme.settings_sponsors  %}<li><a href=\"#sponsors\" class=\"smoothScroll\">Sponsors</a></li>{% endif %}
                {% if this.theme.settings_contact   %}<li><a href=\"#contact\"  class=\"smoothScroll\">Contact</a></li>{% endif %}
            </ul>
        </div>

    </div>
</div>", "/var/www/html/themes/martin-new-event/partials/template/navbar.htm", "");
    }
}
