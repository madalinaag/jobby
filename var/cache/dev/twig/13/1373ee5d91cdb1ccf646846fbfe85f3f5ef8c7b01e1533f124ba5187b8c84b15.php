<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_33fe67bac6614faf1106a4ebe7d1470fa3a8775a36bcba753d38da173f61c0f0 extends Twig_Template
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
        $__internal_986e8636b7cca7b5afe5fcacd9645a5c82f18b0712f33fe9dd10e2fdf5ab26d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986e8636b7cca7b5afe5fcacd9645a5c82f18b0712f33fe9dd10e2fdf5ab26d4->enter($__internal_986e8636b7cca7b5afe5fcacd9645a5c82f18b0712f33fe9dd10e2fdf5ab26d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_986e8636b7cca7b5afe5fcacd9645a5c82f18b0712f33fe9dd10e2fdf5ab26d4->leave($__internal_986e8636b7cca7b5afe5fcacd9645a5c82f18b0712f33fe9dd10e2fdf5ab26d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
