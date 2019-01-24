<?php

/* @admin/dashboard.twig */
class __TwigTemplate_1936a51bc6bd7121b018ec80399efc5d45c6c6354517013ba61f2b9c46d2a235 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@admin/layout.twig", "@admin/dashboard.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@admin/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
  <h1>Dashboard</h1>

  <div class=\"row\">
    ";
        // line 8
        echo ($context["widgets"] ?? null);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/dashboard.twig", "/Users/tonyduchemin/Sites/Projet4/src/Admin/views/dashboard.twig");
    }
}
