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
        $__internal_594ee37da1cd15eab797007b1defdace040e174b76eb7c4749b68758dc9da468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594ee37da1cd15eab797007b1defdace040e174b76eb7c4749b68758dc9da468->enter($__internal_594ee37da1cd15eab797007b1defdace040e174b76eb7c4749b68758dc9da468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594ee37da1cd15eab797007b1defdace040e174b76eb7c4749b68758dc9da468->leave($__internal_594ee37da1cd15eab797007b1defdace040e174b76eb7c4749b68758dc9da468_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffcaf56de1a1fcdaef13cbe4b7d49171c0702721278c1d510c33768074b098df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcaf56de1a1fcdaef13cbe4b7d49171c0702721278c1d510c33768074b098df->enter($__internal_ffcaf56de1a1fcdaef13cbe4b7d49171c0702721278c1d510c33768074b098df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffcaf56de1a1fcdaef13cbe4b7d49171c0702721278c1d510c33768074b098df->leave($__internal_ffcaf56de1a1fcdaef13cbe4b7d49171c0702721278c1d510c33768074b098df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bf21054e72ed98fdf58ca1171a1c5c5838e75c03d1b5d69f3148af76801430d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf21054e72ed98fdf58ca1171a1c5c5838e75c03d1b5d69f3148af76801430d->enter($__internal_4bf21054e72ed98fdf58ca1171a1c5c5838e75c03d1b5d69f3148af76801430d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4bf21054e72ed98fdf58ca1171a1c5c5838e75c03d1b5d69f3148af76801430d->leave($__internal_4bf21054e72ed98fdf58ca1171a1c5c5838e75c03d1b5d69f3148af76801430d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1abe07a4704a231995ad6db2383118cec15d6078c9b877761d361be3ed55ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1abe07a4704a231995ad6db2383118cec15d6078c9b877761d361be3ed55ee9->enter($__internal_b1abe07a4704a231995ad6db2383118cec15d6078c9b877761d361be3ed55ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b1abe07a4704a231995ad6db2383118cec15d6078c9b877761d361be3ed55ee9->leave($__internal_b1abe07a4704a231995ad6db2383118cec15d6078c9b877761d361be3ed55ee9_prof);

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
