<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03a92bb56e5cfebcc7dba996e56baa17a816d8cb58012adfd0acc729ac85a7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_cbbef3bfb731739c0310ebfc17925aa13867c02fd712585e3faee9cbb10634d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbef3bfb731739c0310ebfc17925aa13867c02fd712585e3faee9cbb10634d3->enter($__internal_cbbef3bfb731739c0310ebfc17925aa13867c02fd712585e3faee9cbb10634d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbef3bfb731739c0310ebfc17925aa13867c02fd712585e3faee9cbb10634d3->leave($__internal_cbbef3bfb731739c0310ebfc17925aa13867c02fd712585e3faee9cbb10634d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d92f4971fed0035961f90656fd5c4f7181b5fc6bae02392f82f32c7dbdeae5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d92f4971fed0035961f90656fd5c4f7181b5fc6bae02392f82f32c7dbdeae5e->enter($__internal_8d92f4971fed0035961f90656fd5c4f7181b5fc6bae02392f82f32c7dbdeae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d92f4971fed0035961f90656fd5c4f7181b5fc6bae02392f82f32c7dbdeae5e->leave($__internal_8d92f4971fed0035961f90656fd5c4f7181b5fc6bae02392f82f32c7dbdeae5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb19e2aee00c5a54d74ea60fb32b615677b46ebd8d79d24d0d5a356d15a491ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb19e2aee00c5a54d74ea60fb32b615677b46ebd8d79d24d0d5a356d15a491ee->enter($__internal_bb19e2aee00c5a54d74ea60fb32b615677b46ebd8d79d24d0d5a356d15a491ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb19e2aee00c5a54d74ea60fb32b615677b46ebd8d79d24d0d5a356d15a491ee->leave($__internal_bb19e2aee00c5a54d74ea60fb32b615677b46ebd8d79d24d0d5a356d15a491ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60c37b229029282fdc32f05bc3f67a47cf869e77120cad3d44f47180ed02d349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c37b229029282fdc32f05bc3f67a47cf869e77120cad3d44f47180ed02d349->enter($__internal_60c37b229029282fdc32f05bc3f67a47cf869e77120cad3d44f47180ed02d349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60c37b229029282fdc32f05bc3f67a47cf869e77120cad3d44f47180ed02d349->leave($__internal_60c37b229029282fdc32f05bc3f67a47cf869e77120cad3d44f47180ed02d349_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
