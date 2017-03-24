<?php

/* /var/www/html/themes/martin-new-event/partials/template/register.htm */
class __TwigTemplate_79017cfc9752fbea849a30c0130319e323c51233d52da8eb4be518f1b092e708 extends Twig_Template
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
        echo "<section id=\"register\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-7 col-sm-7\" data-wow-delay=\"0.6s\">
                <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "register_header", array()), "html", null, true);
        echo "</h2>
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "register_subheader", array()), "html", null, true);
        echo "</h3>
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "register_content", array()), "html", null, true);
        echo "</p>
            </div>

            <div class=\"wow fadeInUp col-md-5 col-sm-5\" data-wow-delay=\"1s\">
                <form action=\"#\" method=\"post\">
                    <input name=\"firstname\" type=\"text\" class=\"form-control\" id=\"firstname\" placeholder=\"First Name\">
                    <input name=\"lastname\" type=\"text\" class=\"form-control\" id=\"lastname\" placeholder=\"Last Name\">
                    <input name=\"phone\" type=\"telephone\" class=\"form-control\" id=\"phone\" placeholder=\"Phone Number\">
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email Address\">
                    <div class=\"col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10\">
                        <input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"REGISTER\">
                    </div>
                </form>
            </div>

            <div class=\"col-md-1\"></div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"register\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-7 col-sm-7\" data-wow-delay=\"0.6s\">
                <h2>{{ this.theme.register_header }}</h2>
                <h3>{{ this.theme.register_subheader }}</h3>
                <p>{{ this.theme.register_content }}</p>
            </div>

            <div class=\"wow fadeInUp col-md-5 col-sm-5\" data-wow-delay=\"1s\">
                <form action=\"#\" method=\"post\">
                    <input name=\"firstname\" type=\"text\" class=\"form-control\" id=\"firstname\" placeholder=\"First Name\">
                    <input name=\"lastname\" type=\"text\" class=\"form-control\" id=\"lastname\" placeholder=\"Last Name\">
                    <input name=\"phone\" type=\"telephone\" class=\"form-control\" id=\"phone\" placeholder=\"Phone Number\">
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email Address\">
                    <div class=\"col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10\">
                        <input name=\"submit\" type=\"submit\" class=\"form-control\" id=\"submit\" value=\"REGISTER\">
                    </div>
                </form>
            </div>

            <div class=\"col-md-1\"></div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/register.htm", "");
    }
}
