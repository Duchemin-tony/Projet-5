<?php

/* @blog/admin/widget.twig */
class __TwigTemplate_8fe2655bde0f12ded744d2126a226411620ca7551973ed2e3d7af2d16697699e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"col-sm-4\">
  <div class=\"card\">
    <div class=\"card-block\">
      <h4 class=\"card-title\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</h4>
      <p class=\"card-text\">Article";
        // line 5
        if ((($context["count"] ?? null) > 1)) {
            echo "s";
        }
        echo "</p>
      <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.admin.index"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Gérer les articles</a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@blog/admin/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/admin/widget.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/admin/widget.twig");
    }
}
