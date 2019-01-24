<?php

/* @blog/index.twig */
class __TwigTemplate_adb37481cebdb9cefa04bac45874b67b860c59a7ca38ccfc7a9b9a961c54d1eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@blog/index.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "  ";
        if (($context["category"] ?? null)) {
            // line 5
            echo "    Catégorie : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", []), "html", null, true);
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            // line 6
            echo "  ";
        } else {
            // line 7
            echo "    Blog";
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            // line 8
            echo "  ";
        }
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "
  ";
        // line 13
        if (($context["category"] ?? null)) {
            // line 14
            echo "    <h1>Catégorie : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", []), "html", null, true);
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            echo "</h1>
  ";
        } else {
            // line 16
            echo "    <h1>Bienvenue sur le blog";
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            echo "</h1>
  ";
        }
        // line 18
        echo "  <div class=\"row\">
    <div class=\"col-md-9\">

      <div class=\"row\">

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["posts"] ?? null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "          <div class=\"card-deck\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 26
                echo "              <div class=\"card\">
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["post"], "category_name", [])) {
                    // line 28
                    echo "                  <div class=\"card-header\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category_name", []), "html", null, true);
                    echo "</div>
                ";
                }
                // line 30
                echo "                <div class=\"card-block\">
                  <h4 class=\"card-title\">
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", []), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [])]), "html", null, true);
                echo "\">
                      ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", []), "html", null, true);
                echo "
                    </a>
                  </h4>
                  <p class=\"card-text\">
                    ";
                // line 37
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Framework\Twig\TextExtension']->excerpt(twig_get_attribute($this->env, $this->source, $context["post"], "content", [])), "html", null, true));
                echo "
                  </p>
                  <p class=\"text-muted\">";
                // line 39
                echo $this->extensions['Framework\Twig\TimeExtension']->ago(twig_get_attribute($this->env, $this->source, $context["post"], "created_at", []));
                echo "</p>
                </div>
                <div class=\"card-footer\">
                  <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", []), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    Voir l'article
                  </a>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </div>

      ";
        // line 52
        if (($context["category"] ?? null)) {
            // line 53
            echo "        ";
            echo $this->extensions['Framework\Twig\PagerFantaExtension']->paginate(($context["posts"] ?? null), "blog.category", ["slug" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "slug", [])]);
            echo "
      ";
        } else {
            // line 55
            echo "        ";
            echo $this->extensions['Framework\Twig\PagerFantaExtension']->paginate(($context["posts"] ?? null), "blog.index");
            echo "
      ";
        }
        // line 57
        echo "    </div>
    <div class=\"col-md-3\">
      <ul class=\"list-group\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 61
            echo "          <li class=\"list-group-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "id", []) == twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", []))) {
                echo "active";
            }
            echo "\">
            <a style=\"color:inherit;\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.category", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      </ul>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "@blog/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 65,  195 => 62,  188 => 61,  184 => 60,  179 => 57,  173 => 55,  167 => 53,  165 => 52,  161 => 50,  154 => 48,  142 => 42,  136 => 39,  131 => 37,  124 => 33,  120 => 32,  116 => 30,  110 => 28,  108 => 27,  105 => 26,  101 => 25,  98 => 24,  94 => 23,  87 => 18,  78 => 16,  68 => 14,  66 => 13,  63 => 12,  60 => 11,  55 => 8,  49 => 7,  46 => 6,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/index.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/index.twig");
    }
}
