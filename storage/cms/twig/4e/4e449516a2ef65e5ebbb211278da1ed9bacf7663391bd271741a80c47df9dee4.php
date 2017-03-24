<?php

/* /var/www/html/themes/martin-new-event/partials/template/sponsors.htm */
class __TwigTemplate_b0cf111d4dedfbaba6266652d1c0a04874792ecff2186cfbbe57846516aff0e0 extends Twig_Template
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
        echo "<section id=\"sponsors\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow bounceIn col-md-12 col-sm-12\">
                <div class=\"section-title\">
                    <h2>Our Sponsors</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.3s\">
                <img src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/sponsor-img1.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.6s\">
                <img src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/sponsor-img2.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.9s\">
                <img src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/sponsor-img3.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"1s\">
                <img src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/sponsor-img4.jpg");
        echo "\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/sponsors.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 25,  47 => 21,  40 => 17,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"sponsors\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow bounceIn col-md-12 col-sm-12\">
                <div class=\"section-title\">
                    <h2>Our Sponsors</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.3s\">
                <img src=\"{{ 'assets/images/sponsor-img1.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.6s\">
                <img src=\"{{ 'assets/images/sponsor-img2.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"0.9s\">
                <img src=\"{{ 'assets/images/sponsor-img3.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

            <div class=\"wow fadeInUp col-md-3 col-sm-6 col-xs-6\" data-wow-delay=\"1s\">
                <img src=\"{{ 'assets/images/sponsor-img4.jpg'|theme }}\" class=\"img-responsive\" alt=\"sponsors\">
            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/sponsors.htm", "");
    }
}
