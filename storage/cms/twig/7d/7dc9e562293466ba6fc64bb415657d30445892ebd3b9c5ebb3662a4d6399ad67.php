<?php

/* /var/www/html/themes/martin-new-event/partials/template/footer.htm */
class __TwigTemplate_33a114b9eeeb94c11800ccb868c5dc064702f6ac036f3cc19dcbb82f38b07798 extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <p class=\"wow fadeInUp\" data-wow-delay=\"0.6s\">";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_copyright", array());
        echo "</p>
                <ul class=\"social-icon\">
                    ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_facebook", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_facebook_link", array()), "html", null, true);
            echo "\" class=\"fa fa-facebook    wow fadeInUp\" data-wow-delay=\"1s\"  ></a></li>";
        }
        // line 9
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_twitter", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_twitter_link", array()), "html", null, true);
            echo "\" class=\"fa fa-twitter     wow fadeInUp\" data-wow-delay=\"1.3s\"></a></li>";
        }
        // line 10
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_dribble", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_dribble_link", array()), "html", null, true);
            echo "\" class=\"fa fa-dribbble    wow fadeInUp\" data-wow-delay=\"1.6s\"></a></li>";
        }
        // line 11
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_behance", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_behance_link", array()), "html", null, true);
            echo "\" class=\"fa fa-behance     wow fadeInUp\" data-wow-delay=\"1.9s\"></a></li>";
        }
        // line 12
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_googlep", array())) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_googlep_link", array()), "html", null, true);
            echo "\" class=\"fa fa-google-plus wow fadeInUp\" data-wow-delay=\"2s\"  ></a></li>";
        }
        // line 13
        echo "                </ul>
            </div>

        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/partials/template/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  58 => 12,  51 => 11,  44 => 10,  37 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <p class=\"wow fadeInUp\" data-wow-delay=\"0.6s\">{{ this.theme.footer_copyright|raw }}</p>
                <ul class=\"social-icon\">
                    {% if this.theme.footer_facebook %}<li><a href=\"{{ this.theme.footer_facebook_link }}\" class=\"fa fa-facebook    wow fadeInUp\" data-wow-delay=\"1s\"  ></a></li>{% endif %}
                    {% if this.theme.footer_twitter  %}<li><a href=\"{{ this.theme.footer_twitter_link  }}\" class=\"fa fa-twitter     wow fadeInUp\" data-wow-delay=\"1.3s\"></a></li>{% endif %}
                    {% if this.theme.footer_dribble  %}<li><a href=\"{{ this.theme.footer_dribble_link  }}\" class=\"fa fa-dribbble    wow fadeInUp\" data-wow-delay=\"1.6s\"></a></li>{% endif %}
                    {% if this.theme.footer_behance  %}<li><a href=\"{{ this.theme.footer_behance_link  }}\" class=\"fa fa-behance     wow fadeInUp\" data-wow-delay=\"1.9s\"></a></li>{% endif %}
                    {% if this.theme.footer_googlep  %}<li><a href=\"{{ this.theme.footer_googlep_link  }}\" class=\"fa fa-google-plus wow fadeInUp\" data-wow-delay=\"2s\"  ></a></li>{% endif %}
                </ul>
            </div>

        </div>
    </div>
</footer>", "/var/www/html/themes/martin-new-event/partials/template/footer.htm", "");
    }
}
