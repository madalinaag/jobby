<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e342d44e033aa1e7eac310c96cf6e4151061adb720868b44ab8c4f5501b2b7cf extends Twig_Template
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
        $__internal_07497b30984ef1ea6f541093edd0cefb80cd6cb264e7f581e6e1ca475f3278e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07497b30984ef1ea6f541093edd0cefb80cd6cb264e7f581e6e1ca475f3278e2->enter($__internal_07497b30984ef1ea6f541093edd0cefb80cd6cb264e7f581e6e1ca475f3278e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_07497b30984ef1ea6f541093edd0cefb80cd6cb264e7f581e6e1ca475f3278e2->leave($__internal_07497b30984ef1ea6f541093edd0cefb80cd6cb264e7f581e6e1ca475f3278e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
