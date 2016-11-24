<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0b9cd3020809b6ca11ba6085a74bf81067823b2daaa20795a2c0dc90671b2064 extends Twig_Template
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
        $__internal_036d7dfcec6fe3ca4670eff64554c0467b1e549078c49e8a02b3c143aa5fc713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036d7dfcec6fe3ca4670eff64554c0467b1e549078c49e8a02b3c143aa5fc713->enter($__internal_036d7dfcec6fe3ca4670eff64554c0467b1e549078c49e8a02b3c143aa5fc713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_036d7dfcec6fe3ca4670eff64554c0467b1e549078c49e8a02b3c143aa5fc713->leave($__internal_036d7dfcec6fe3ca4670eff64554c0467b1e549078c49e8a02b3c143aa5fc713_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
