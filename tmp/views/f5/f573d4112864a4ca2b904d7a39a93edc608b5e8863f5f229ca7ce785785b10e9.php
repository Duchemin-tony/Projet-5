<?php

/* @blog/admin/categories/index.twig */
class __TwigTemplate_a1a5f627f88fc8213a84fd2a22e96a5d99223a59c5e33bfdea050146594d2e04 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@admin/layout.twig", "@blog/admin/categories/index.twig", 1);
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
        echo "Editer les catégories";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "
  <p class=\"text-right\">
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor((($context["routePrefix"] ?? null) . ".create")), "html", null, true);
        echo "\" class=\"btn btn-primary\">
      Ajouter une catégorie
    </a>
  </p>

  <table class=\"table table-striped\">
    <thead>
    <tr>
      <td>Titre</td>
      <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context["token_input"] = $this->extensions['Framework\Twig\CsrfExtension']->csrfInput();
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "    <tr>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor((($context["routePrefix"] ?? null) . ".edit"), ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editer</a>
        <form style=\"display: inline;\" action=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor((($context["routePrefix"] ?? null) . ".delete"), ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [])]), "html", null, true);
            echo "\" method=\"POST\" onsubmit=\"return confirm('êtes vous sûr ?')\">
          <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
          <button class=\"btn btn-danger\">Supprimer</button>
          ";
            // line 30
            echo ($context["token_input"] ?? null);
            echo "
        </form>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
  </table>

  ";
        // line 38
        echo $this->extensions['Framework\Twig\PagerFantaExtension']->paginate(($context["items"] ?? null), (($context["routePrefix"] ?? null) . ".index"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "@blog/admin/categories/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  98 => 35,  87 => 30,  81 => 27,  77 => 26,  72 => 24,  69 => 23,  64 => 22,  62 => 21,  46 => 8,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/admin/categories/index.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/admin/categories/index.twig");
    }
}
