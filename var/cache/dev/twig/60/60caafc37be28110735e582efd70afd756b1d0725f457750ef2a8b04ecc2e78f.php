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
        $__internal_91e23c47c25b4a1915145f200e5ce23664d8fe4e165dd6b74882bfae184ffd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e23c47c25b4a1915145f200e5ce23664d8fe4e165dd6b74882bfae184ffd5d->enter($__internal_91e23c47c25b4a1915145f200e5ce23664d8fe4e165dd6b74882bfae184ffd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e23c47c25b4a1915145f200e5ce23664d8fe4e165dd6b74882bfae184ffd5d->leave($__internal_91e23c47c25b4a1915145f200e5ce23664d8fe4e165dd6b74882bfae184ffd5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbadfa31fbb33ffc227f551fc4092ff9e6bb1ae081a629a5e7f67a62370c8336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbadfa31fbb33ffc227f551fc4092ff9e6bb1ae081a629a5e7f67a62370c8336->enter($__internal_cbadfa31fbb33ffc227f551fc4092ff9e6bb1ae081a629a5e7f67a62370c8336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cbadfa31fbb33ffc227f551fc4092ff9e6bb1ae081a629a5e7f67a62370c8336->leave($__internal_cbadfa31fbb33ffc227f551fc4092ff9e6bb1ae081a629a5e7f67a62370c8336_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35ecaad2635f5bba4010872c4e8ad37453dc33d9d3235a946c2a1b322a38c470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ecaad2635f5bba4010872c4e8ad37453dc33d9d3235a946c2a1b322a38c470->enter($__internal_35ecaad2635f5bba4010872c4e8ad37453dc33d9d3235a946c2a1b322a38c470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35ecaad2635f5bba4010872c4e8ad37453dc33d9d3235a946c2a1b322a38c470->leave($__internal_35ecaad2635f5bba4010872c4e8ad37453dc33d9d3235a946c2a1b322a38c470_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f62345b39bb5563f1d7f1061f6dc602d88a5ac5ab505e83fea379147a64636f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62345b39bb5563f1d7f1061f6dc602d88a5ac5ab505e83fea379147a64636f0->enter($__internal_f62345b39bb5563f1d7f1061f6dc602d88a5ac5ab505e83fea379147a64636f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f62345b39bb5563f1d7f1061f6dc602d88a5ac5ab505e83fea379147a64636f0->leave($__internal_f62345b39bb5563f1d7f1061f6dc602d88a5ac5ab505e83fea379147a64636f0_prof);

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
