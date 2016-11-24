<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_51d417ec79d49cf92ea87ec0c3c1f573dd6a41d100e6df4944ad02a57e2e8578 extends Twig_Template
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
        $__internal_2d1a705b82b6477f524f04170be6b58032d0048ccc107147a324a39b1c348a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1a705b82b6477f524f04170be6b58032d0048ccc107147a324a39b1c348a84->enter($__internal_2d1a705b82b6477f524f04170be6b58032d0048ccc107147a324a39b1c348a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2d1a705b82b6477f524f04170be6b58032d0048ccc107147a324a39b1c348a84->leave($__internal_2d1a705b82b6477f524f04170be6b58032d0048ccc107147a324a39b1c348a84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
