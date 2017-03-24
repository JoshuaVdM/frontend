<?php

/* /var/www/html/themes/martin-new-event/partials/template/speakers.htm */
class __TwigTemplate_5447b14b95dfaf0037fb66499d54bf6a746eb40769c9536629d24bdbc24a0a1c extends Twig_Template
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
        echo "<section id=\"speakers\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12 wow bounceIn\">
                <div class=\"section-title\">
                    <h2>Creative Speakers</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div id=\"owl-speakers\" class=\"owl-carousel\">

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/speakers-img1.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Jenny Green</h3>
                                <h6>UI Designer</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/speakers-img2.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>David Yoon</h3>
                                <h6>Creative Director</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/speakers-img3.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Je Mary Lee</h3>
                                <h6>Web Specialist</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/speakers-img4.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Johnathan Doe</h3>
                                <h6>Frontend Dev</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/speakers-img5.jpg");
        echo "\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Elite Hamilton</h3>
                                <h6>Marketing Guru</h6>
                            </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/speakers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 56,  75 => 46,  62 => 36,  49 => 26,  36 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"speakers\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12 wow bounceIn\">
                <div class=\"section-title\">
                    <h2>Creative Speakers</h2>
                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                </div>
            </div>

            <div id=\"owl-speakers\" class=\"owl-carousel\">

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img1.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Jenny Green</h3>
                                <h6>UI Designer</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img2.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>David Yoon</h3>
                                <h6>Creative Director</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.9s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img3.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Je Mary Lee</h3>
                                <h6>Web Specialist</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img4.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Johnathan Doe</h3>
                                <h6>Frontend Dev</h6>
                            </div>
                    </div>
                </div>

                <div class=\"item wow fadeInUp col-md-3 col-sm-3\" data-wow-delay=\"0.6s\">
                    <div class=\"speakers-wrapper\">
                        <img src=\"{{ 'assets/images/speakers-img5.jpg'|theme }}\" class=\"img-responsive\" alt=\"speakers\">
                            <div class=\"speakers-thumb\">
                                <h3>Elite Hamilton</h3>
                                <h6>Marketing Guru</h6>
                            </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/speakers.htm", "");
    }
}
