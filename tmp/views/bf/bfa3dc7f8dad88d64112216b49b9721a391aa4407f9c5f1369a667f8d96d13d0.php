<?php

/* layout.twig */
class __TwigTemplate_d48b5671df29ed7403171821f96f48ff22040d6825c4238c2485ac3698a5338b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\"
          integrity=\"sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi\" crossorigin=\"anonymous\">
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
</head>
<body>

<nav class=\"navbar navbar-fixed-top navbar-dark bg-inverse\">
    <a class=\"navbar-brand\" href=\"#\">Un Billet Simple Pour l'Alaska</a>
    <ul class=\"nav navbar-nav\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.index"), "html", null, true);
        echo "\">Blog</a>
        </li>
    </ul>
</nav>

<div class=\"container\">

  ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
</div><!-- /.container -->

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js\"
        integrity=\"sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.locales.min.js\"></script>
<script>
    timeago().render(document.querySelectorAll('.timeago'), 'fr')
</script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo "Mon site ";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  76 => 4,  60 => 27,  58 => 26,  48 => 19,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.twig", "/Users/tonyduchemin/Sites/Projet4/views/layout.twig");
    }
}
