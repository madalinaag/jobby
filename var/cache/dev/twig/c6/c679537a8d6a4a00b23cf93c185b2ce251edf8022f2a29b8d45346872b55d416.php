<?php

/* login.html.twig */
class __TwigTemplate_4f1d0738f30f80210b2bd4d79f8bcdab54c4de3bfc4964730bc052f9fb40e9be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dd40a05c3d14781edc3a7ec71aa36cd2bede0aaa6c742afd7cd09248d12e545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd40a05c3d14781edc3a7ec71aa36cd2bede0aaa6c742afd7cd09248d12e545->enter($__internal_7dd40a05c3d14781edc3a7ec71aa36cd2bede0aaa6c742afd7cd09248d12e545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body  >
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7dd40a05c3d14781edc3a7ec71aa36cd2bede0aaa6c742afd7cd09248d12e545->leave($__internal_7dd40a05c3d14781edc3a7ec71aa36cd2bede0aaa6c742afd7cd09248d12e545_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afa124fde44687a379977d5ab369a561039d8eeee6dca227606b0c3dde0c265f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa124fde44687a379977d5ab369a561039d8eeee6dca227606b0c3dde0c265f->enter($__internal_afa124fde44687a379977d5ab369a561039d8eeee6dca227606b0c3dde0c265f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_afa124fde44687a379977d5ab369a561039d8eeee6dca227606b0c3dde0c265f->leave($__internal_afa124fde44687a379977d5ab369a561039d8eeee6dca227606b0c3dde0c265f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f6ad2d72a4dcb4d2b04a19ca5ca02dc9575e281c6ec33a1fbec1e7e5643a40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6ad2d72a4dcb4d2b04a19ca5ca02dc9575e281c6ec33a1fbec1e7e5643a40c->enter($__internal_4f6ad2d72a4dcb4d2b04a19ca5ca02dc9575e281c6ec33a1fbec1e7e5643a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<div id=\"divLogin\">
    <section id=\"content\" class=\"m-t-lg wrapper-md animated fadeInUp\">
        <div height=\"100\" width=\"100\">
        </div>
        <div class=\"container\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/jobby.png"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />
            <br><br><br>
            <form method=\"post\" align=\"center\">
                <div class=\"row col-md-4 col-md-offset-4\">
                    <input type=\"text\" id=\"username\" placeholder=\"username\"
                           required=\"required\"
                           class=\"form-control no-border \">
                    <br>
                    <input type=\"password\" id=\"password\"  required=\"required\" placeholder=\"password\"
                           class=\"form-control no-border\">
                    <br/><br/><br/>
                    <button type=\"submit\" class=\"btn btn-lg btn-primary m-r\"> Submit</button>
                </div>
                <div class=\"line line-dashed\"></div>
            </form>
        </div>
    </section>
</div>
";
        
        $__internal_4f6ad2d72a4dcb4d2b04a19ca5ca02dc9575e281c6ec33a1fbec1e7e5643a40c->leave($__internal_4f6ad2d72a4dcb4d2b04a19ca5ca02dc9575e281c6ec33a1fbec1e7e5643a40c_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  67 => 12,  61 => 11,  51 => 9,  45 => 8,  38 => 11,  36 => 8,  29 => 4,  24 => 1,);
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body  >
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/main.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}
{% block content %}
<div id=\"divLogin\">
    <section id=\"content\" class=\"m-t-lg wrapper-md animated fadeInUp\">
        <div height=\"100\" width=\"100\">
        </div>
        <div class=\"container\">
            <img src=\"{{ asset('bundles/app/images/jobby.png') }}\" class=\"img-responsive center-block\" />
            <br><br><br>
            <form method=\"post\" align=\"center\">
                <div class=\"row col-md-4 col-md-offset-4\">
                    <input type=\"text\" id=\"username\" placeholder=\"username\"
                           required=\"required\"
                           class=\"form-control no-border \">
                    <br>
                    <input type=\"password\" id=\"password\"  required=\"required\" placeholder=\"password\"
                           class=\"form-control no-border\">
                    <br/><br/><br/>
                    <button type=\"submit\" class=\"btn btn-lg btn-primary m-r\"> Submit</button>
                </div>
                <div class=\"line line-dashed\"></div>
            </form>
        </div>
    </section>
</div>
{% endblock %}", "login.html.twig", "/var/www/html/jobby/app/Resources/views/login.html.twig");
    }
}
