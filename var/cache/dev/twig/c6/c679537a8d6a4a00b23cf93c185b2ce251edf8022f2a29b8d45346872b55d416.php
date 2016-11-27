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
        $__internal_924c21ac1f494c8893464dc210de2c5a394fab4be418b049f92af2020506ccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924c21ac1f494c8893464dc210de2c5a394fab4be418b049f92af2020506ccb5->enter($__internal_924c21ac1f494c8893464dc210de2c5a394fab4be418b049f92af2020506ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

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
        echo "
";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
            // line 13
            echo "<div class=\"alert alert-warning fade in\" role=\"alert\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "</div>
";
        }
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 21
            echo "    <div class=\"alert alert-danger fade in\" role=\"alert\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </div>
";
        }
        // line 28
        echo "

";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_924c21ac1f494c8893464dc210de2c5a394fab4be418b049f92af2020506ccb5->leave($__internal_924c21ac1f494c8893464dc210de2c5a394fab4be418b049f92af2020506ccb5_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de6c2c723bb23f84c7cdfee30521881c63ba6ca6f33c1c31a5e39b8302eeef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6c2c723bb23f84c7cdfee30521881c63ba6ca6f33c1c31a5e39b8302eeef3f->enter($__internal_de6c2c723bb23f84c7cdfee30521881c63ba6ca6f33c1c31a5e39b8302eeef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de6c2c723bb23f84c7cdfee30521881c63ba6ca6f33c1c31a5e39b8302eeef3f->leave($__internal_de6c2c723bb23f84c7cdfee30521881c63ba6ca6f33c1c31a5e39b8302eeef3f_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_01e559ece7f2838210230f5a5a8ed6e2f37141f5a36028398d18822465ac2be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e559ece7f2838210230f5a5a8ed6e2f37141f5a36028398d18822465ac2be5->enter($__internal_01e559ece7f2838210230f5a5a8ed6e2f37141f5a36028398d18822465ac2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "<div id=\"divLogin\">
    <section id=\"content\" class=\"m-t-lg wrapper-md animated fadeInUp\">
        <div height=\"100\" width=\"100\">
        </div>
        <div class=\"container\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/jobby.png"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" />
            <br><br><br>
            <form name=\"login\" action=";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo ">
                <div class=\"row col-md-4 col-md-offset-4\">
                    <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"username\" required=\"required\" class=\"form-control no-border\">
                    <br>
                    <input type=\"password\" name=\"password\" id=\"password\"  required=\"required\" placeholder=\"password\" class=\"form-control no-border\">
                    <br/><br/><br/>
                    <button type=\"submit\" class=\"btn btn-lg btn-primary m-r center-block\"> Submit</button>
                </div>
                <div class=\"line line-dashed\"></div>
            </form>
        </div>
    </section>
</div>
";
        
        $__internal_01e559ece7f2838210230f5a5a8ed6e2f37141f5a36028398d18822465ac2be5->leave($__internal_01e559ece7f2838210230f5a5a8ed6e2f37141f5a36028398d18822465ac2be5_prof);

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
        return array (  132 => 38,  127 => 36,  120 => 31,  114 => 30,  104 => 9,  98 => 8,  91 => 30,  87 => 28,  83 => 26,  74 => 24,  70 => 23,  66 => 21,  64 => 20,  60 => 18,  51 => 16,  47 => 15,  43 => 13,  41 => 12,  38 => 11,  36 => 8,  29 => 4,  24 => 1,);
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

{% if app.session.flashBag.has('notice') %}
<div class=\"alert alert-warning fade in\" role=\"alert\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    {% for msg in app.session.flashBag.get('notice') %}
        {{ msg }}
    {% endfor %}
</div>
{% endif %}
{% if app.session.flashBag.has('error') %}
    <div class=\"alert alert-danger fade in\" role=\"alert\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {% for msg in app.session.flashBag.get('error') %}
            {{ msg }}
        {% endfor %}
    </div>
{% endif %}


{% block content %}
<div id=\"divLogin\">
    <section id=\"content\" class=\"m-t-lg wrapper-md animated fadeInUp\">
        <div height=\"100\" width=\"100\">
        </div>
        <div class=\"container\">
            <img src=\"{{ asset('bundles/app/images/jobby.png') }}\" class=\"img-responsive center-block\" />
            <br><br><br>
            <form name=\"login\" action={{ path('login') }}>
                <div class=\"row col-md-4 col-md-offset-4\">
                    <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"username\" required=\"required\" class=\"form-control no-border\">
                    <br>
                    <input type=\"password\" name=\"password\" id=\"password\"  required=\"required\" placeholder=\"password\" class=\"form-control no-border\">
                    <br/><br/><br/>
                    <button type=\"submit\" class=\"btn btn-lg btn-primary m-r center-block\"> Submit</button>
                </div>
                <div class=\"line line-dashed\"></div>
            </form>
        </div>
    </section>
</div>
{% endblock %}", "login.html.twig", "/var/www/html/jobby/app/Resources/views/login.html.twig");
    }
}
