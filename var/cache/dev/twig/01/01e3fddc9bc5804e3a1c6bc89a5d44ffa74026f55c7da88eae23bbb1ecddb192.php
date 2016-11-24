<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0a3939d3f8d3470150cc25c71e15114c4829ff76091ceb4c32d9c2a9dcb4ae20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5c8f8df7cd6c2a6c11ec791559199b2db79806908dd11e0cf50fac0e0e3f9fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8f8df7cd6c2a6c11ec791559199b2db79806908dd11e0cf50fac0e0e3f9fe2->enter($__internal_5c8f8df7cd6c2a6c11ec791559199b2db79806908dd11e0cf50fac0e0e3f9fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c8f8df7cd6c2a6c11ec791559199b2db79806908dd11e0cf50fac0e0e3f9fe2->leave($__internal_5c8f8df7cd6c2a6c11ec791559199b2db79806908dd11e0cf50fac0e0e3f9fe2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_417cf8de072bb3ab04d172515a4292ce454a3795a429878985d8b7120fd88351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417cf8de072bb3ab04d172515a4292ce454a3795a429878985d8b7120fd88351->enter($__internal_417cf8de072bb3ab04d172515a4292ce454a3795a429878985d8b7120fd88351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_417cf8de072bb3ab04d172515a4292ce454a3795a429878985d8b7120fd88351->leave($__internal_417cf8de072bb3ab04d172515a4292ce454a3795a429878985d8b7120fd88351_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c6cfa11b27315711da8cf2236082923c472d264e83de28a97677d095efa3676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6cfa11b27315711da8cf2236082923c472d264e83de28a97677d095efa3676->enter($__internal_4c6cfa11b27315711da8cf2236082923c472d264e83de28a97677d095efa3676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c6cfa11b27315711da8cf2236082923c472d264e83de28a97677d095efa3676->leave($__internal_4c6cfa11b27315711da8cf2236082923c472d264e83de28a97677d095efa3676_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d245148aa770e4f274826ead2d43de21295b54ff9471041d5ae95c50aa2448ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d245148aa770e4f274826ead2d43de21295b54ff9471041d5ae95c50aa2448ef->enter($__internal_d245148aa770e4f274826ead2d43de21295b54ff9471041d5ae95c50aa2448ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d245148aa770e4f274826ead2d43de21295b54ff9471041d5ae95c50aa2448ef->leave($__internal_d245148aa770e4f274826ead2d43de21295b54ff9471041d5ae95c50aa2448ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
