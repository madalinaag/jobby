<?php

/* ::login.html.twig */
class __TwigTemplate_b5f5b7f442b8307f94c4c6e421df9c0f68f0ae6d30086de87170194a923effbc extends Twig_Template
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
        $__internal_849381b8475faeb56c7d0503b831fd42c642bc394ab7bbb6408250e810e1a473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849381b8475faeb56c7d0503b831fd42c642bc394ab7bbb6408250e810e1a473->enter($__internal_849381b8475faeb56c7d0503b831fd42c642bc394ab7bbb6408250e810e1a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

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
        
        $__internal_849381b8475faeb56c7d0503b831fd42c642bc394ab7bbb6408250e810e1a473->leave($__internal_849381b8475faeb56c7d0503b831fd42c642bc394ab7bbb6408250e810e1a473_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d46609938902fca9f1e1d81bb50175636a918fcab43a3e5becd0140e7aa57a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46609938902fca9f1e1d81bb50175636a918fcab43a3e5becd0140e7aa57a92->enter($__internal_d46609938902fca9f1e1d81bb50175636a918fcab43a3e5becd0140e7aa57a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d46609938902fca9f1e1d81bb50175636a918fcab43a3e5becd0140e7aa57a92->leave($__internal_d46609938902fca9f1e1d81bb50175636a918fcab43a3e5becd0140e7aa57a92_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4e9aa1853f5aeb2eaf397dae6579ccabbe914c22747213d04e79823a47c0395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e9aa1853f5aeb2eaf397dae6579ccabbe914c22747213d04e79823a47c0395->enter($__internal_b4e9aa1853f5aeb2eaf397dae6579ccabbe914c22747213d04e79823a47c0395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<div id=\"divLogin\">
    <section id=\"content\" class=\"m-t-lg wrapper-md animated fadeInUp\">
        <div height=\"100\" width=\"100\">
        </div>
        <div class=\"container\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo2.png"), "html", null, true);
        echo "\" height=\"100\" width=\"1150\" align=\"center\" />
            <br><br><br>
            <form method=\"post\" align=\"center\">
                <div class=\"row col-md-4 col-md-offset-4\">
                    <input type=\"text\" id=\"username\"
                           required=\"required\"
                           class=\"form-control no-border \">
                    <br>
                    <input type=\"password\" id=\"password\"  required=\"required\"
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
        
        $__internal_b4e9aa1853f5aeb2eaf397dae6579ccabbe914c22747213d04e79823a47c0395->leave($__internal_b4e9aa1853f5aeb2eaf397dae6579ccabbe914c22747213d04e79823a47c0395_prof);

    }

    public function getTemplateName()
    {
        return "::login.html.twig";
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
            <img src=\"{{ asset('bundles/app/images/logo2.png') }}\" height=\"100\" width=\"1150\" align=\"center\" />
            <br><br><br>
            <form method=\"post\" align=\"center\">
                <div class=\"row col-md-4 col-md-offset-4\">
                    <input type=\"text\" id=\"username\"
                           required=\"required\"
                           class=\"form-control no-border \">
                    <br>
                    <input type=\"password\" id=\"password\"  required=\"required\"
                           class=\"form-control no-border\">
                    <br/><br/><br/>
                    <button type=\"submit\" class=\"btn btn-lg btn-primary m-r\"> Submit</button>
                </div>
                <div class=\"line line-dashed\"></div>
            </form>
        </div>
    </section>
</div>
{% endblock %}", "::login.html.twig", "/var/www/html/jobby/app/Resources/views/login.html.twig");
    }
}
