<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70671ba5d827b5b26a93c515b7ffaa7d5728d73e9b15fb6ff6b5934407405ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8a10e6419f8f19f4dc021a74e04473ab1debd39d70a9882a92a298d7f357de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a10e6419f8f19f4dc021a74e04473ab1debd39d70a9882a92a298d7f357de3->enter($__internal_b8a10e6419f8f19f4dc021a74e04473ab1debd39d70a9882a92a298d7f357de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a10e6419f8f19f4dc021a74e04473ab1debd39d70a9882a92a298d7f357de3->leave($__internal_b8a10e6419f8f19f4dc021a74e04473ab1debd39d70a9882a92a298d7f357de3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3ac3fb6cb53179e71a7f6c066cd7fc7f911adf169c5859c585f8518cba43282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ac3fb6cb53179e71a7f6c066cd7fc7f911adf169c5859c585f8518cba43282->enter($__internal_f3ac3fb6cb53179e71a7f6c066cd7fc7f911adf169c5859c585f8518cba43282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3ac3fb6cb53179e71a7f6c066cd7fc7f911adf169c5859c585f8518cba43282->leave($__internal_f3ac3fb6cb53179e71a7f6c066cd7fc7f911adf169c5859c585f8518cba43282_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a427843878757f8fd1537cf751293b55b9f14fc4a2bf780a0442ace65e45108c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a427843878757f8fd1537cf751293b55b9f14fc4a2bf780a0442ace65e45108c->enter($__internal_a427843878757f8fd1537cf751293b55b9f14fc4a2bf780a0442ace65e45108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a427843878757f8fd1537cf751293b55b9f14fc4a2bf780a0442ace65e45108c->leave($__internal_a427843878757f8fd1537cf751293b55b9f14fc4a2bf780a0442ace65e45108c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac85bdb76e0ea40a7342ed980f084a970f95534251f00172978b46044317eefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac85bdb76e0ea40a7342ed980f084a970f95534251f00172978b46044317eefe->enter($__internal_ac85bdb76e0ea40a7342ed980f084a970f95534251f00172978b46044317eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac85bdb76e0ea40a7342ed980f084a970f95534251f00172978b46044317eefe->leave($__internal_ac85bdb76e0ea40a7342ed980f084a970f95534251f00172978b46044317eefe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
