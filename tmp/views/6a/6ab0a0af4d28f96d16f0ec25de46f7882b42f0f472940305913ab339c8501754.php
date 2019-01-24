<?php

/* @blog/admin/posts/edit.twig */
class __TwigTemplate_a4f7c0f99dea92c00bc748dbff87c43cdfb3fac3b5d0569c665c200f91a9091c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@admin/layout.twig", "@blog/admin/posts/edit.twig", 1);
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
  <h1>Editer l'article ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", []), "html", null, true);
        echo "</h1>

  <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor((($context["routePrefix"] ?? null) . ".edit"), ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 10
        $this->loadTemplate((($context["viewPath"] ?? null) . "/form.twig"), "@blog/admin/posts/edit.twig", 10)->display($context);
        // line 11
        echo "    <button class=\"btn btn-primary\" type=\"submit\">Editer</button>
  </form>

";
    }

    public function getTemplateName()
    {
        return "@blog/admin/posts/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  54 => 10,  50 => 9,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/admin/posts/edit.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/admin/posts/edit.twig");
    }
}
