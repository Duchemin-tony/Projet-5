<?php

/* @blog/admin/posts/form.twig */
class __TwigTemplate_71ae1a781024fbd6c2dc76ea32f9e4c1230b29359d2c815c8421d52ffe6856a7 extends Twig_Template
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
        echo $this->extensions['Framework\Twig\CsrfExtension']->csrfInput();
        echo "
<div class=\"row\">
  <div class=\"col-md-4\">
    ";
        // line 4
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "name", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", []), "Titre de l'article");
        echo "
  </div>
  <div class=\"col-md-4\">
    ";
        // line 7
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "category_id", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category_id", []), "Catégorie", ["options" => ($context["categories"] ?? null)]);
        echo "
  </div>
  <div class=\"col-md-4\">
    ";
        // line 10
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "slug", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", []), "Lien");
        echo "
  </div>
</div>
";
        // line 13
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "content", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", []), "content", ["type" => "textarea"]);
        echo "
";
        // line 14
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "created_at", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "created_at", []), "Date de création", ["class" => "datepicker"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@blog/admin/posts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  47 => 13,  41 => 10,  35 => 7,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@blog/admin/posts/form.twig", "/Users/tonyduchemin/Sites/Projet4/src/Blog/views/admin/posts/form.twig");
    }
}
