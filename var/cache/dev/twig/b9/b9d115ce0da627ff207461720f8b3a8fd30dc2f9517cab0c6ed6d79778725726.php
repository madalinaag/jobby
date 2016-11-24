<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_006314477293c5eab25e624b257948ab503da14c1a6f8d12a52e71ce2f97cf17 extends Twig_Template
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
        $__internal_8ece70e9ff777ede7f8985b41c140fd4cd5b71a9dca1c3ffa727663c73b047e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ece70e9ff777ede7f8985b41c140fd4cd5b71a9dca1c3ffa727663c73b047e0->enter($__internal_8ece70e9ff777ede7f8985b41c140fd4cd5b71a9dca1c3ffa727663c73b047e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8ece70e9ff777ede7f8985b41c140fd4cd5b71a9dca1c3ffa727663c73b047e0->leave($__internal_8ece70e9ff777ede7f8985b41c140fd4cd5b71a9dca1c3ffa727663c73b047e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
