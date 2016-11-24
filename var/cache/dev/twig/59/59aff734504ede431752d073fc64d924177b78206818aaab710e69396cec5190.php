<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e9fe299cc09fe95db395cf90b0fdb0c29b4c54dcc20a47a233c42af948f37ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55cc802734f70e7a594b8c1aba4586870a6ea9f1fa36ed5591acbc1704cef54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cc802734f70e7a594b8c1aba4586870a6ea9f1fa36ed5591acbc1704cef54f->enter($__internal_55cc802734f70e7a594b8c1aba4586870a6ea9f1fa36ed5591acbc1704cef54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_55cc802734f70e7a594b8c1aba4586870a6ea9f1fa36ed5591acbc1704cef54f->leave($__internal_55cc802734f70e7a594b8c1aba4586870a6ea9f1fa36ed5591acbc1704cef54f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5206033f33a9ebd2fda0bd26542007e25cb66fca191a89b67efc6c4724c2482f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5206033f33a9ebd2fda0bd26542007e25cb66fca191a89b67efc6c4724c2482f->enter($__internal_5206033f33a9ebd2fda0bd26542007e25cb66fca191a89b67efc6c4724c2482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5206033f33a9ebd2fda0bd26542007e25cb66fca191a89b67efc6c4724c2482f->leave($__internal_5206033f33a9ebd2fda0bd26542007e25cb66fca191a89b67efc6c4724c2482f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
