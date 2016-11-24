<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e905e11c712527f28990f60fd7031d638996b579997f882687a5d4e1d81ce8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d266d0f0b49596f445b460695e87a70e1222a630023ccdffda89e0c20c243578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d266d0f0b49596f445b460695e87a70e1222a630023ccdffda89e0c20c243578->enter($__internal_d266d0f0b49596f445b460695e87a70e1222a630023ccdffda89e0c20c243578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d266d0f0b49596f445b460695e87a70e1222a630023ccdffda89e0c20c243578->leave($__internal_d266d0f0b49596f445b460695e87a70e1222a630023ccdffda89e0c20c243578_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c9860fa655bc73dc8c7d162f6a5c72d05f063ccb37e22fba986931238ad11f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9860fa655bc73dc8c7d162f6a5c72d05f063ccb37e22fba986931238ad11f1->enter($__internal_9c9860fa655bc73dc8c7d162f6a5c72d05f063ccb37e22fba986931238ad11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9c9860fa655bc73dc8c7d162f6a5c72d05f063ccb37e22fba986931238ad11f1->leave($__internal_9c9860fa655bc73dc8c7d162f6a5c72d05f063ccb37e22fba986931238ad11f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_238e7491d7f95f4009b4cf76c98d76447ea4e49d3193a2cc98cacf4ae3acfea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238e7491d7f95f4009b4cf76c98d76447ea4e49d3193a2cc98cacf4ae3acfea9->enter($__internal_238e7491d7f95f4009b4cf76c98d76447ea4e49d3193a2cc98cacf4ae3acfea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_238e7491d7f95f4009b4cf76c98d76447ea4e49d3193a2cc98cacf4ae3acfea9->leave($__internal_238e7491d7f95f4009b4cf76c98d76447ea4e49d3193a2cc98cacf4ae3acfea9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
