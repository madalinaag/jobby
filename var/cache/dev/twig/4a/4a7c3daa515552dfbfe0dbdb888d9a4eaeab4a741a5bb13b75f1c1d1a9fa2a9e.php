<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2896073aaaa4a02c5d16f5a371c7d617a3f2f0d1ae572224e877c70e1b12aae0 extends Twig_Template
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
        $__internal_ad1d43324389f65e93777802bacf993d700d1dd60afa44d5a13de809c0d68b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d43324389f65e93777802bacf993d700d1dd60afa44d5a13de809c0d68b64->enter($__internal_ad1d43324389f65e93777802bacf993d700d1dd60afa44d5a13de809c0d68b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ad1d43324389f65e93777802bacf993d700d1dd60afa44d5a13de809c0d68b64->leave($__internal_ad1d43324389f65e93777802bacf993d700d1dd60afa44d5a13de809c0d68b64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
