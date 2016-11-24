<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_52a1539fe86b17e00b262575ea9678db3c6852be02eb4ae1a8ee75490825ef5b extends Twig_Template
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
        $__internal_84108a1d212bcf4f789a893f773cbfa34aa191cb8cdfec3ce71dad0d4b1b3caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84108a1d212bcf4f789a893f773cbfa34aa191cb8cdfec3ce71dad0d4b1b3caa->enter($__internal_84108a1d212bcf4f789a893f773cbfa34aa191cb8cdfec3ce71dad0d4b1b3caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_84108a1d212bcf4f789a893f773cbfa34aa191cb8cdfec3ce71dad0d4b1b3caa->leave($__internal_84108a1d212bcf4f789a893f773cbfa34aa191cb8cdfec3ce71dad0d4b1b3caa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
