<?php

/* ::base.html.twig */
class __TwigTemplate_503775897664e36473d1195e22c868e222ec530b30ff0e6889a14f2bd6bd7b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c89a352b9b0dd3388782e3448bc2659d722a70b5e0152278a8697000690ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c89a352b9b0dd3388782e3448bc2659d722a70b5e0152278a8697000690ce8->enter($__internal_99c89a352b9b0dd3388782e3448bc2659d722a70b5e0152278a8697000690ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_99c89a352b9b0dd3388782e3448bc2659d722a70b5e0152278a8697000690ce8->leave($__internal_99c89a352b9b0dd3388782e3448bc2659d722a70b5e0152278a8697000690ce8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8b146205f8c071a8122a617c2c6dbe87d1075a223158c56d7cbc9250f49aee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b146205f8c071a8122a617c2c6dbe87d1075a223158c56d7cbc9250f49aee4->enter($__internal_e8b146205f8c071a8122a617c2c6dbe87d1075a223158c56d7cbc9250f49aee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8b146205f8c071a8122a617c2c6dbe87d1075a223158c56d7cbc9250f49aee4->leave($__internal_e8b146205f8c071a8122a617c2c6dbe87d1075a223158c56d7cbc9250f49aee4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43a814502d11ef2539b3de26c6d41a83ba77fa1004339b9126714a2aba71276b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a814502d11ef2539b3de26c6d41a83ba77fa1004339b9126714a2aba71276b->enter($__internal_43a814502d11ef2539b3de26c6d41a83ba77fa1004339b9126714a2aba71276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_43a814502d11ef2539b3de26c6d41a83ba77fa1004339b9126714a2aba71276b->leave($__internal_43a814502d11ef2539b3de26c6d41a83ba77fa1004339b9126714a2aba71276b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2dd5d9d43ff90d16efb398138cad9072b445b0daf11016468bd14ef07f3be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2dd5d9d43ff90d16efb398138cad9072b445b0daf11016468bd14ef07f3be6->enter($__internal_0c2dd5d9d43ff90d16efb398138cad9072b445b0daf11016468bd14ef07f3be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c2dd5d9d43ff90d16efb398138cad9072b445b0daf11016468bd14ef07f3be6->leave($__internal_0c2dd5d9d43ff90d16efb398138cad9072b445b0daf11016468bd14ef07f3be6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33e0900eca8a5891c186748c9b64de45dc1aa33d85849e66ae0effafa2035910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e0900eca8a5891c186748c9b64de45dc1aa33d85849e66ae0effafa2035910->enter($__internal_33e0900eca8a5891c186748c9b64de45dc1aa33d85849e66ae0effafa2035910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_33e0900eca8a5891c186748c9b64de45dc1aa33d85849e66ae0effafa2035910->leave($__internal_33e0900eca8a5891c186748c9b64de45dc1aa33d85849e66ae0effafa2035910_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/jobby/app/Resources/views/base.html.twig");
    }
}
