<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4a86ec5aefba7d3020f2e1b4968329ce45fd400c6fe72d91f44e91d0090936c7 extends Twig_Template
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
        $__internal_aa123114d882aef9c2f572ba1b5d0718cd5c06b98efe5fdba3910979d7f91f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa123114d882aef9c2f572ba1b5d0718cd5c06b98efe5fdba3910979d7f91f47->enter($__internal_aa123114d882aef9c2f572ba1b5d0718cd5c06b98efe5fdba3910979d7f91f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_aa123114d882aef9c2f572ba1b5d0718cd5c06b98efe5fdba3910979d7f91f47->leave($__internal_aa123114d882aef9c2f572ba1b5d0718cd5c06b98efe5fdba3910979d7f91f47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
