<?php

/* /var/www/html/themes/martin-new-event/layouts/default.htm */
class __TwigTemplate_25b0a4dd9528387dee8823b5c83a2eceecc011228671a3a3a61bb8dbe9b23a3d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/animate.css", 2 => "assets/css/font-awesome.min.css", 3 => "assets/css/owl.theme.css", 4 => "assets/css/owl.carousel.css", 5 => "assets/css/style.css"));
        // line 22
        echo "\" rel=\"stylesheet\">
</head>
<body data-spy=\"scroll\" data-offset=\"50\" data-target=\".navbar-collapse\">

    <div class=\"preloader\">
        <div class=\"sk-rotating-plane\"></div>
    </div>

    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("template/navbar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("template/intro"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_overview", array())) {
            // line 34
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/overview"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/detail"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/video"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 38
        echo "
";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_speakers", array())) {
            // line 40
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/speakers"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 42
        echo "
";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_program", array())) {
            // line 44
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/program"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 46
        echo "
";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_register", array())) {
            // line 48
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/register"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 49
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/faq"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 51
        echo "
";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_venue", array())) {
            // line 53
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/venue"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 55
        echo "
";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_sponsors", array())) {
            // line 57
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/sponsors"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 59
        echo "
";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_contact", array())) {
            // line 61
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("template/contact"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 63
        echo "
    ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("template/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "
";
        // line 66
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "settings_gotop", array())) {
            // line 67
            echo "    <a href=\"#back-top\" class=\"go-top\"><i class=\"fa fa-angle-up\"></i></a>
";
        }
        // line 69
        echo "
    <script src=\"";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/jquery.parallax.js", 3 => "assets/js/owl.carousel.min.js", 4 => "assets/js/smoothscroll.js", 5 => "assets/js/wow.min.js", 6 => "assets/js/custom.js", 7 => "@framework", 8 => "@framework.extras"));
        // line 79
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/martin-new-event/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 79,  170 => 70,  167 => 69,  163 => 67,  161 => 66,  158 => 65,  154 => 64,  151 => 63,  145 => 61,  143 => 60,  140 => 59,  134 => 57,  132 => 56,  129 => 55,  123 => 53,  121 => 52,  118 => 51,  112 => 49,  107 => 48,  105 => 47,  102 => 46,  96 => 44,  94 => 43,  91 => 42,  85 => 40,  83 => 39,  80 => 38,  74 => 36,  69 => 35,  64 => 34,  62 => 33,  59 => 32,  54 => 31,  50 => 30,  40 => 22,  38 => 15,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ this.page.title }}</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link href=\"{{ [
        'assets/css/bootstrap.min.css',
        'assets/css/animate.css',
        'assets/css/font-awesome.min.css',
        'assets/css/owl.theme.css',
        'assets/css/owl.carousel.css',
        'assets/css/style.css',
    ]|theme }}\" rel=\"stylesheet\">
</head>
<body data-spy=\"scroll\" data-offset=\"50\" data-target=\".navbar-collapse\">

    <div class=\"preloader\">
        <div class=\"sk-rotating-plane\"></div>
    </div>

    {% partial 'template/navbar' %}
    {% partial 'template/intro'  %}

{% if this.theme.settings_overview %}
    {% partial 'template/overview' %}
    {% partial 'template/detail'   %}
    {% partial 'template/video'    %}
{% endif %}

{% if this.theme.settings_speakers %}
    {% partial 'template/speakers' %}
{% endif %}

{% if this.theme.settings_program %}
    {% partial 'template/program'  %}
{% endif %}

{% if this.theme.settings_register %}
    {% partial 'template/register' %}
    {% partial 'template/faq'      %}
{% endif %}

{% if this.theme.settings_venue %}
    {% partial 'template/venue'    %}
{% endif %}

{% if this.theme.settings_sponsors %}
    {% partial 'template/sponsors' %}
{% endif %}

{% if this.theme.settings_contact %}
    {% partial 'template/contact' %}
{% endif %}

    {% partial 'template/footer' %}

{% if this.theme.settings_gotop %}
    <a href=\"#back-top\" class=\"go-top\"><i class=\"fa fa-angle-up\"></i></a>
{% endif %}

    <script src=\"{{ [
        'assets/js/jquery.js',
        'assets/js/bootstrap.min.js',
        'assets/js/jquery.parallax.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/smoothscroll.js',
        'assets/js/wow.min.js',
        'assets/js/custom.js',
        '@framework',
        '@framework.extras']|theme }}\"></script>

</body>
</html>", "/var/www/html/themes/martin-new-event/layouts/default.htm", "");
    }
}
