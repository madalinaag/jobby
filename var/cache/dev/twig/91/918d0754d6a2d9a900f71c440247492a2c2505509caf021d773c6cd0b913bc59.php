<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_3f6399fe704d4cd26221413f9c1f86c8492bd7ecf6ad921d3f01956a2c160e0d extends Twig_Template
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
        $__internal_e35293984a530062f65d87c6c2cf7aca0872b5c3377b0828d60b2d0dd6e1bc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35293984a530062f65d87c6c2cf7aca0872b5c3377b0828d60b2d0dd6e1bc96->enter($__internal_e35293984a530062f65d87c6c2cf7aca0872b5c3377b0828d60b2d0dd6e1bc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e35293984a530062f65d87c6c2cf7aca0872b5c3377b0828d60b2d0dd6e1bc96->leave($__internal_e35293984a530062f65d87c6c2cf7aca0872b5c3377b0828d60b2d0dd6e1bc96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
