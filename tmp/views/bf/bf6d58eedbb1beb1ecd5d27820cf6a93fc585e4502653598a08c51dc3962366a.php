<?php

/* @admin/layout.twig */
class __TwigTemplate_3d0e265436a95ab61b764362baf5277daaa2113bb11a7243c3b142fe2b6f8abc extends Twig_Template
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
          <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.2/flatpickr.css\">
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
</head>
<body>

<nav class=\"navbar navbar-fixed-top navbar-dark bg-inverse\">
    <a class=\"navbar-brand\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("admin"), "html", null, true);
        echo "\">Administration</a>
    <ul class=\"nav navbar-nav\">
        ";
        // line 19
        echo $this->extensions['App\Admin\AdminTwigExtension']->renderMenu();
        echo "
    </ul>
</nav>

<div class=\"container\">

    ";
        // line 25
        if ($this->extensions['Framework\Twig\FlashExtension']->getFlash("success")) {
            // line 26
            echo "        <div class=\"alert alert-success\">
          ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Framework\Twig\FlashExtension']->getFlash("success"), "html", null, true);
            echo "  
        </div>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ($this->extensions['Framework\Twig\FlashExtension']->getFlash("error")) {
            // line 32
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Framework\Twig\FlashExtension']->getFlash("error"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 36
        echo "
  ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
</div><!-- /.container -->

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js\"
        integrity=\"sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.2/flatpickr.js\"></script>
<script>
  flatpickr('.datepicker', {
    enableTime: true,
    altInput: true,
    altFormat: 'j F Y, H:i',
    dateFormat: 'Y-m-d H:i:S'
  })
</script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo "Mon site ";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@admin/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  110 => 4,  90 => 38,  88 => 37,  85 => 36,  79 => 33,  76 => 32,  74 => 31,  71 => 30,  65 => 27,  62 => 26,  60 => 25,  51 => 19,  46 => 17,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/layout.twig", "/Users/tonyduchemin/Sites/Projet4/src/Admin/views/layout.twig");
    }
}
