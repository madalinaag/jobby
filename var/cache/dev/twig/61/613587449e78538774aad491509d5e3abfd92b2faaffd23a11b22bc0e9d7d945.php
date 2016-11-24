<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_29eed1f88370aa96f27f022287806db359cfa4c496494a452f49afe7c5c69d0f extends Twig_Template
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
        $__internal_6ea14b68baa16b1d93ffb19a8c4c93e9ffc4432cf34459fdb905933427ddbe68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea14b68baa16b1d93ffb19a8c4c93e9ffc4432cf34459fdb905933427ddbe68->enter($__internal_6ea14b68baa16b1d93ffb19a8c4c93e9ffc4432cf34459fdb905933427ddbe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6ea14b68baa16b1d93ffb19a8c4c93e9ffc4432cf34459fdb905933427ddbe68->leave($__internal_6ea14b68baa16b1d93ffb19a8c4c93e9ffc4432cf34459fdb905933427ddbe68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
