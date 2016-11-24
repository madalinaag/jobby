<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3265e55f74fded8fc12be22c0d34e3d4910b1d7e0bcaf1ba5e4cef3d6ca74c17 extends Twig_Template
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
        $__internal_311f0e8ee5f47287cbec14f2d541ba03aae09106e8a7f34df22091a26f63985a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311f0e8ee5f47287cbec14f2d541ba03aae09106e8a7f34df22091a26f63985a->enter($__internal_311f0e8ee5f47287cbec14f2d541ba03aae09106e8a7f34df22091a26f63985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_311f0e8ee5f47287cbec14f2d541ba03aae09106e8a7f34df22091a26f63985a->leave($__internal_311f0e8ee5f47287cbec14f2d541ba03aae09106e8a7f34df22091a26f63985a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
