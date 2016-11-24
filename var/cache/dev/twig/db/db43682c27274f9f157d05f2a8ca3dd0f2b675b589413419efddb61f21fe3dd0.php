<?php

/* @WebProfiler/Icon/forward.svg */
class __TwigTemplate_3ce4a659bffaba590dc37adcd07c7d923650b3ebdcd7c532a56defd734b4d88a extends Twig_Template
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
        $__internal_4fe4a0881202b56252521d6952f675c618eb0218515d15527b4e4d726bd6d40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe4a0881202b56252521d6952f675c618eb0218515d15527b4e4d726bd6d40e->enter($__internal_4fe4a0881202b56252521d6952f675c618eb0218515d15527b4e4d726bd6d40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/forward.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
    <path style=\"fill:#aaa\" d=\"M23.61,11.07L17.07,4.35A1.2,1.2,0,0,0,15,5.28V9H1.4A1.82,1.82,0,0,0,0,10.82v2.61A1.55,
        1.55,0,0,0,1.4,15H15v3.72a1.2,1.2,0,0,0,2.07.93l6.63-6.72A1.32,1.32,0,0,0,23.61,11.07Z\"/>
</svg>
";
        
        $__internal_4fe4a0881202b56252521d6952f675c618eb0218515d15527b4e4d726bd6d40e->leave($__internal_4fe4a0881202b56252521d6952f675c618eb0218515d15527b4e4d726bd6d40e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/forward.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
    <path style=\"fill:#aaa\" d=\"M23.61,11.07L17.07,4.35A1.2,1.2,0,0,0,15,5.28V9H1.4A1.82,1.82,0,0,0,0,10.82v2.61A1.55,
        1.55,0,0,0,1.4,15H15v3.72a1.2,1.2,0,0,0,2.07.93l6.63-6.72A1.32,1.32,0,0,0,23.61,11.07Z\"/>
</svg>
", "@WebProfiler/Icon/forward.svg", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Icon/forward.svg");
    }
}
