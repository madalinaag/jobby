<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e7ba9dca33a977efcaae7a2a3cdb343829e7dda1e80990a33261d58a890211ac extends Twig_Template
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
        $__internal_5128a972f7c3cc291ae69938a34e543cd2bfe4a0a87ef371f3860cf413bd9c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5128a972f7c3cc291ae69938a34e543cd2bfe4a0a87ef371f3860cf413bd9c55->enter($__internal_5128a972f7c3cc291ae69938a34e543cd2bfe4a0a87ef371f3860cf413bd9c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5128a972f7c3cc291ae69938a34e543cd2bfe4a0a87ef371f3860cf413bd9c55->leave($__internal_5128a972f7c3cc291ae69938a34e543cd2bfe4a0a87ef371f3860cf413bd9c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
