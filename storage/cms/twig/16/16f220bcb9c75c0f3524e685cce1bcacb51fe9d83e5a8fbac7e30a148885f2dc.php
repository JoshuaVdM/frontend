<?php

/* /var/www/html/themes/martin-new-event/partials/template/venue.htm */
class __TwigTemplate_a5b28b67e6962ed85abcbac097a8a315138f8ca9e090bf8f92d671e90a7b2425 extends Twig_Template
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
        echo "<section id=\"venue\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8\" data-wow-delay=\"0.9s\">
                <h2>Venue</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                <h4>New Event</h4>
                <h4>120 Market Street, Suite 110</h4>
                <h4>San Francisco, CA 10110</h4>
                <h4>Tel: 010-020-0120</h4>
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/venue.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"venue\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8\" data-wow-delay=\"0.9s\">
                <h2>Venue</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                <h4>New Event</h4>
                <h4>120 Market Street, Suite 110</h4>
                <h4>San Francisco, CA 10110</h4>
                <h4>Tel: 010-020-0120</h4>
            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/venue.htm", "");
    }
}
