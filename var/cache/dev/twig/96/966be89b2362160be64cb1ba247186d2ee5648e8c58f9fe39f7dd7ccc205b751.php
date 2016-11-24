<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b084a840cd2156641e04f8e0fe48e6b05042aa4dd23eba8d3c23517a2315b0b9 extends Twig_Template
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
        $__internal_bfb10988697b086f8d0bd6dc3e4a30f3aef9fc13605347bfa4d286df04e33dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb10988697b086f8d0bd6dc3e4a30f3aef9fc13605347bfa4d286df04e33dc7->enter($__internal_bfb10988697b086f8d0bd6dc3e4a30f3aef9fc13605347bfa4d286df04e33dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bfb10988697b086f8d0bd6dc3e4a30f3aef9fc13605347bfa4d286df04e33dc7->leave($__internal_bfb10988697b086f8d0bd6dc3e4a30f3aef9fc13605347bfa4d286df04e33dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
