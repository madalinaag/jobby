<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0124ca3f2c231fddaa2b72e4276b14ea25d80bdb53c92a671c6ec59b7881c8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46d63c686dc769183b9d437d15ca02bda30b9b023fa1e3961912fb9e96ff911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46d63c686dc769183b9d437d15ca02bda30b9b023fa1e3961912fb9e96ff911->enter($__internal_f46d63c686dc769183b9d437d15ca02bda30b9b023fa1e3961912fb9e96ff911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46d63c686dc769183b9d437d15ca02bda30b9b023fa1e3961912fb9e96ff911->leave($__internal_f46d63c686dc769183b9d437d15ca02bda30b9b023fa1e3961912fb9e96ff911_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a94527201a87fe53d06b1664914dcbfcd839ac1426c573fd2f4474888f6c44c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94527201a87fe53d06b1664914dcbfcd839ac1426c573fd2f4474888f6c44c5->enter($__internal_a94527201a87fe53d06b1664914dcbfcd839ac1426c573fd2f4474888f6c44c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a94527201a87fe53d06b1664914dcbfcd839ac1426c573fd2f4474888f6c44c5->leave($__internal_a94527201a87fe53d06b1664914dcbfcd839ac1426c573fd2f4474888f6c44c5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56e5e9c35445dcf0024beeddc2f58cb086bc38c24bd7c9cd0e96d04084b1ca6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e5e9c35445dcf0024beeddc2f58cb086bc38c24bd7c9cd0e96d04084b1ca6b->enter($__internal_56e5e9c35445dcf0024beeddc2f58cb086bc38c24bd7c9cd0e96d04084b1ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56e5e9c35445dcf0024beeddc2f58cb086bc38c24bd7c9cd0e96d04084b1ca6b->leave($__internal_56e5e9c35445dcf0024beeddc2f58cb086bc38c24bd7c9cd0e96d04084b1ca6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88752198b5b2d9b0bdae6562a5cf11c9e014c8532e9fab264946582b6d967e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88752198b5b2d9b0bdae6562a5cf11c9e014c8532e9fab264946582b6d967e19->enter($__internal_88752198b5b2d9b0bdae6562a5cf11c9e014c8532e9fab264946582b6d967e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_88752198b5b2d9b0bdae6562a5cf11c9e014c8532e9fab264946582b6d967e19->leave($__internal_88752198b5b2d9b0bdae6562a5cf11c9e014c8532e9fab264946582b6d967e19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
