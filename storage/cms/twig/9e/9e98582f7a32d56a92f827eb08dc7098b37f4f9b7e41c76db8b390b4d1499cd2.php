<?php

/* /var/www/html/themes/martin-new-event/partials/template/program.htm */
class __TwigTemplate_f4d0ce0552e1ab63c68cba0360b0e6dab9708ba1ae6b8fb02b9d48628c1d9064 extends Twig_Template
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
        echo "<section id=\"program\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-12 col-sm-12\" data-wow-delay=\"0.6s\">
                <div class=\"section-title\">
                    <h2>Our Programs</h2>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-10 col-sm-10\" data-wow-delay=\"0.9s\">
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#fday\" aria-controls=\"fday\" role=\"tab\" data-toggle=\"tab\">FIRST DAY</a></li>
                    <li><a href=\"#sday\" aria-controls=\"sday\" role=\"tab\" data-toggle=\"tab\">SECOND DAY</a></li>
                    <li><a href=\"#tday\" aria-controls=\"tday\" role=\"tab\" data-toggle=\"tab\">THIRD DAY</a></li>
                </ul>
                <!-- tab panes -->
                <div class=\"tab-content\">

                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"fday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img1.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 09.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Introduction to Design</h3>
                            <h4>By Jenny Green</h4>
                            <p>Maecenas accumsan metus turpis, eu faucibus ligula interdum in. Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img2.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 10.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 360</span>
                            </h6>
                            <h3>Front-End Development</h3>
                            <h4>By Johnathan Mark</h4>
                            <p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img3.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Social Media Marketing</h3>
                            <h4>By Johnathan Doe</h4>
                            <p>Nam pulvinar, elit vitae rhoncus pretium, massa urna bibendum ex, aliquam efficitur lorem odio vitae erat. Integer rutrum viverra magna, nec ultrices risus rutrum nec.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"sday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 75
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img4.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Backend Development</h3>
                            <h4>By Matt Lee</h4>
                            <p>Integer rutrum viverra magna, nec ultrices risus rutrum nec. Pellentesque interdum vel nisi nec tincidunt. Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 92
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img5.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 01.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Web Application Lite</h3>
                            <h4>By David Orlando</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 109
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img6.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 650</span>
                            </h6>
                            <h3>Professional UX Design</h3>
                            <h4>By James Lee Mark</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"tday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 125
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img7.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Online Shopping Business</h3>
                            <h4>By Michael Walker</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 142
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img8.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 05.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 850</span>
                            </h6>
                            <h3>Introduction to Mobile App</h3>
                            <h4>By Cherry Stella</h4>
                            <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"";
        // line 159
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/program-img9.jpg");
        echo "\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 07.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Bootstrap UI Design</h3>
                            <h4>By John David</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
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
        return "/var/www/html/themes/martin-new-event/partials/template/program.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 159,  183 => 142,  163 => 125,  144 => 109,  124 => 92,  104 => 75,  85 => 59,  65 => 42,  45 => 25,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"program\" class=\"parallax-section\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"wow fadeInUp col-md-12 col-sm-12\" data-wow-delay=\"0.6s\">
                <div class=\"section-title\">
                    <h2>Our Programs</h2>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>

            <div class=\"wow fadeInUp col-md-10 col-sm-10\" data-wow-delay=\"0.9s\">
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#fday\" aria-controls=\"fday\" role=\"tab\" data-toggle=\"tab\">FIRST DAY</a></li>
                    <li><a href=\"#sday\" aria-controls=\"sday\" role=\"tab\" data-toggle=\"tab\">SECOND DAY</a></li>
                    <li><a href=\"#tday\" aria-controls=\"tday\" role=\"tab\" data-toggle=\"tab\">THIRD DAY</a></li>
                </ul>
                <!-- tab panes -->
                <div class=\"tab-content\">

                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"fday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img1.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 09.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Introduction to Design</h3>
                            <h4>By Jenny Green</h4>
                            <p>Maecenas accumsan metus turpis, eu faucibus ligula interdum in. Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img2.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 10.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 360</span>
                            </h6>
                            <h3>Front-End Development</h3>
                            <h4>By Johnathan Mark</h4>
                            <p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img3.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Social Media Marketing</h3>
                            <h4>By Johnathan Doe</h4>
                            <p>Nam pulvinar, elit vitae rhoncus pretium, massa urna bibendum ex, aliquam efficitur lorem odio vitae erat. Integer rutrum viverra magna, nec ultrices risus rutrum nec.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"sday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img4.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 11.00 AM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 240</span>
                            </h6>
                            <h3>Backend Development</h3>
                            <h4>By Matt Lee</h4>
                            <p>Integer rutrum viverra magna, nec ultrices risus rutrum nec. Pellentesque interdum vel nisi nec tincidunt. Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img5.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 01.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 450</span>
                            </h6>
                            <h3>Web Application Lite</h3>
                            <h4>By David Orlando</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img6.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 650</span>
                            </h6>
                            <h3>Professional UX Design</h3>
                            <h4>By James Lee Mark</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"tday\">
                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img7.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 03.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Online Shopping Business</h3>
                            <h4>By Michael Walker</h4>
                            <p>Aliquam faucibus lobortis dolor, id pellentesque eros pretium in. Aenean in erat ut quam aliquet commodo. Vivamus aliquam pulvinar ipsum ut sollicitudin. Suspendisse quis sollicitudin mauris.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img8.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 05.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 850</span>
                            </h6>
                            <h3>Introduction to Mobile App</h3>
                            <h4>By Cherry Stella</h4>
                            <p>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit. Mauris justo erat, rhoncus in arcu at, scelerisque tempor erat.</p>
                        </div>

                        <!-- program divider -->
                        <div class=\"program-divider col-md-12 col-sm-12\"></div>

                        <!-- program speaker here -->
                        <div class=\"col-md-2 col-sm-2\">
                            <img src=\"{{ 'assets/images/program-img9.jpg'|theme }}\" class=\"img-responsive\" alt=\"program\">
                        </div>
                        <div class=\"col-md-10 col-sm-10\">
                            <h6>
                                <span><i class=\"fa fa-clock-o\"></i> 07.00 PM</span>
                                <span><i class=\"fa fa-map-marker\"></i> Room 750</span>
                            </h6>
                            <h3>Bootstrap UI Design</h3>
                            <h4>By John David</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>", "/var/www/html/themes/martin-new-event/partials/template/program.htm", "");
    }
}
