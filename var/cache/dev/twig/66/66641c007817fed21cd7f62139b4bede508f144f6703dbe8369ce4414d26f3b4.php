<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_aa2520ae9478fd537ff09a0951c3310321808100da576bf014e05a27833ddf5f extends Twig_Template
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
        $__internal_3bbbcc764c3fba4ba4cee2a8a813ec8a644def32a1c951db59f467fc75685948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbbcc764c3fba4ba4cee2a8a813ec8a644def32a1c951db59f467fc75685948->enter($__internal_3bbbcc764c3fba4ba4cee2a8a813ec8a644def32a1c951db59f467fc75685948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3bbbcc764c3fba4ba4cee2a8a813ec8a644def32a1c951db59f467fc75685948->leave($__internal_3bbbcc764c3fba4ba4cee2a8a813ec8a644def32a1c951db59f467fc75685948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
