<?php

/* /var/www/html/themes/martin-new-event/partials/template/intro.htm */
class __TwigTemplate_b85e030a40711aef79b4ba0d836349f69a4d9e3b6ff38e4853a5a018183f1a94 extends Twig_Template
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
        echo "<section id=\"intro\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <h3 class=\"wow bounceIn\" data-wow-delay=\"0.9s\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "intro_line1", array()), "html", null, true);
        echo "</h3>
                <h1 class=\"wow fadeInUp\" data-wow-delay=\"1.6s\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "intro_line2", array()), "html", null, true);
        echo "</h1>
                <a href=\"#overview\" class=\"btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs\" data-wow-delay=\"2.3s\">LEARN MORE</a>
                <a href=\"#register\" class=\"btn btn-lg btn-danger smoothScroll wow fadeInUp\" data-wow-delay=\"2.3s\">REGISTER NOW</a>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"intro\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <h3 class=\"wow bounceIn\" data-wow-delay=\"0.9s\">{{ this.theme.intro_line1 }}</h3>
                <h1 class=\"wow fadeInUp\" data-wow-delay=\"1.6s\">{{ this.theme.intro_line2 }}</h1>
                <a href=\"#overview\" class=\"btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs\" data-wow-delay=\"2.3s\">LEARN MORE</a>
                <a href=\"#register\" class=\"btn btn-lg btn-danger smoothScroll wow fadeInUp\" data-wow-delay=\"2.3s\">REGISTER NOW</a>
            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/intro.htm", "");
    }
}
