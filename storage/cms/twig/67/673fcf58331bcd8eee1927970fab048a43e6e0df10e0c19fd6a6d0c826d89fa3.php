<?php

/* /var/www/html/themes/martin-new-event/partials/template/overview.htm */
class __TwigTemplate_b5fbf1b36f5fdef7c977ba96fa795b3e78d432b74d60a9c18ffd2f8cbcbd9190 extends Twig_Template
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
        echo "<section id=\"overview\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.6s\">
                <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "overview_title", array()), "html", null, true);
        echo "</h3>
                <p>";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "overview_content", array()), "html", null, true));
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.9s\">
                <img src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/overview-img.jpg");
        echo "\" class=\"img-responsive\" alt=\"Overview\">
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/overview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"overview\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.6s\">
                <h3>{{ this.theme.overview_title }}</h3>
                <p>{{ this.theme.overview_content|nl2br }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-6 col-sm-6\" data-wow-delay=\"0.9s\">
                <img src=\"{{ 'assets/images/overview-img.jpg'|theme }}\" class=\"img-responsive\" alt=\"Overview\">
            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/overview.htm", "");
    }
}
