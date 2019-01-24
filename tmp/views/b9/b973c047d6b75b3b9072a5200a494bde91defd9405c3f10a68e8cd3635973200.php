<?php

/* @blog/admin/posts/create.twig */
class __TwigTemplate_89953d87ca744c27f631a1aeabb3fc2fa73d3450f250c43392730d601e41629b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@admin/layout.twig", "@blog/admin/posts/create.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
    public function block_title($context, array $blocks = [])
    {
        echo "Editer l'article";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "
  <h1>Ajouter un article</h1>

  <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor((($context["routePrefix"] ?? null) . ".create")), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 10
        $this->loadTemplate((($context["viewPath"] ?? null) . "/form.twig"), "@blog/admin/posts/create.twig", 10)->display($context);
        // line 11
        echo "    <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
  </form>

";
    }

    public function getTemplateName()
    {
        return "@blog/admin/posts/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  51 => 10,  47 => 9,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/admin/posts/create.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/admin/posts/create.twig");
    }
}
