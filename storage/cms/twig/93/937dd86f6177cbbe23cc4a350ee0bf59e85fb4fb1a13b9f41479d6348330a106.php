<?php

/* /var/www/html/themes/martin-new-event/partials/template/detail.htm */
class __TwigTemplate_8308f7f108b8f5d2c903a2ea810eec3ad184e04fef6c18b8af296854ca443d20 extends Twig_Template
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
        echo "<section id=\"detail\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-4 col-sm-4\" data-wow-delay=\"0.3s\">
                <i class=\"fa ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box1_icon", array()), "html", null, true);
        echo "\"></i>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box1_title", array()), "html", null, true);
        echo "</h3>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box1_content", array()), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-4 col-sm-4\" data-wow-delay=\"0.6s\">
                <i class=\"fa ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box2_icon", array()), "html", null, true);
        echo "\"></i>
                <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box2_title", array()), "html", null, true);
        echo "</h3>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box2_content", array()), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInRight col-md-4 col-sm-4\" data-wow-delay=\"0.9s\">
                <i class=\"fa ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box3_icon", array()), "html", null, true);
        echo "\"></i>
                <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box3_title", array()), "html", null, true);
        echo "</h3>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "detail_box3_content", array()), "html", null, true);
        echo "</p>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  60 => 19,  56 => 18,  49 => 14,  45 => 13,  41 => 12,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"detail\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-4 col-sm-4\" data-wow-delay=\"0.3s\">
                <i class=\"fa {{ this.theme.detail_box1_icon }}\"></i>
                <h3>{{ this.theme.detail_box1_title }}</h3>
                <p>{{ this.theme.detail_box1_content }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-4 col-sm-4\" data-wow-delay=\"0.6s\">
                <i class=\"fa {{ this.theme.detail_box2_icon }}\"></i>
                <h3>{{ this.theme.detail_box2_title }}</h3>
                <p>{{ this.theme.detail_box2_content }}</p>
            </div>

            <div class=\"wow fadeInRight col-md-4 col-sm-4\" data-wow-delay=\"0.9s\">
                <i class=\"fa {{ this.theme.detail_box3_icon }}\"></i>
                <h3>{{ this.theme.detail_box3_title }}</h3>
                <p>{{ this.theme.detail_box3_content }}</p>
            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/detail.htm", "");
    }
}
