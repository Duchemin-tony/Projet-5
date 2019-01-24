<?php

/* @blog/admin/menu.twig */
class __TwigTemplate_2eba421d6935e2cd394df632b2cb901f3ca437df1f40156e6e4ce5408e6cda9b extends Twig_Template
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
        echo "<li class=\"nav-item\">
  <a class=\"nav-link ";
        // line 2
        echo (($this->extensions['Framework\Router\RouterTwigExtension']->isSubPath("blog.admin.index")) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.admin.index"), "html", null, true);
        echo "\">Articles</a>
</li>
<li class=\"nav-item\">
  <a class=\"nav-link ";
        // line 5
        echo (($this->extensions['Framework\Router\RouterTwigExtension']->isSubPath("blog.category.admin.index")) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.category.admin.index"), "html", null, true);
        echo "\">Catégories</a>
</li>";
    }

    public function getTemplateName()
    {
        return "@blog/admin/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/admin/menu.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/admin/menu.twig");
    }
}
