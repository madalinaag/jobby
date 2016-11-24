<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_dfcc3d2c216ab553066c820e0c6daaa920e979b113220d7b7ce44790f4807cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3a0f598ba711695c7f4b5b89672a4d2486638faaa1f70e50660886d69457e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a0f598ba711695c7f4b5b89672a4d2486638faaa1f70e50660886d69457e3e->enter($__internal_c3a0f598ba711695c7f4b5b89672a4d2486638faaa1f70e50660886d69457e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c3a0f598ba711695c7f4b5b89672a4d2486638faaa1f70e50660886d69457e3e->leave($__internal_c3a0f598ba711695c7f4b5b89672a4d2486638faaa1f70e50660886d69457e3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
