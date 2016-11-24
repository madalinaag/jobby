<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_75ec0f2b086e194ebba1fd7d9c26cea15c71c4b9bbb4dce4d9a12d25675321da extends Twig_Template
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
        $__internal_bdaefcefb162bd5ce95ea7c0198ea74608f9ba615bff2de35b9f0d57c898d133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaefcefb162bd5ce95ea7c0198ea74608f9ba615bff2de35b9f0d57c898d133->enter($__internal_bdaefcefb162bd5ce95ea7c0198ea74608f9ba615bff2de35b9f0d57c898d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bdaefcefb162bd5ce95ea7c0198ea74608f9ba615bff2de35b9f0d57c898d133->leave($__internal_bdaefcefb162bd5ce95ea7c0198ea74608f9ba615bff2de35b9f0d57c898d133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
