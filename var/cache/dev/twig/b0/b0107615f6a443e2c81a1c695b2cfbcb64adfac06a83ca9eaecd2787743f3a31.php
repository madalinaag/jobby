<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_74313620ca8ece2544395888933565dc77ec2acf9bdc5be12f4e7f4ed1c4fd16 extends Twig_Template
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
        $__internal_0739962d4b8fc540a4e077c1cc8949e2d64420d70b903dd9f5b68a47766980a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0739962d4b8fc540a4e077c1cc8949e2d64420d70b903dd9f5b68a47766980a9->enter($__internal_0739962d4b8fc540a4e077c1cc8949e2d64420d70b903dd9f5b68a47766980a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0739962d4b8fc540a4e077c1cc8949e2d64420d70b903dd9f5b68a47766980a9->leave($__internal_0739962d4b8fc540a4e077c1cc8949e2d64420d70b903dd9f5b68a47766980a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/jobby/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
