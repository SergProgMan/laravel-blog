<?php

/* /application/themes/mytheme/partials/site/header.htm */
class __TwigTemplate_5523e46a59d4fcde43f8c70bd70212ffec094e3f281bebe0755b30829d5f6f67 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"nav navbar-nav\">        
          <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "nav-item active ";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
          <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "nav-item active";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a></li>
          <li class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "nav-item active";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
          <li class=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "nav-item active";
        }
        echo "\">
              <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>        
      </ul>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/application/themes/mytheme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  63 => 15,  59 => 14,  53 => 13,  49 => 12,  43 => 11,  39 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"nav navbar-nav\">        
          <li class=\"{% if this.page.id == 'home' %}nav-item active {% endif %}\">
              <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a></li>
          <li class=\"{% if this.page.id == 'about' %}nav-item active{% endif %}\">
              <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a></li>
          <li class=\"{% if this.page.id == 'blog' %}nav-item active{% endif %}\">
              <a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a></li>
          <li class=\"{% if this.page.id == 'contact' %}nav-item active{% endif %}\">
              <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a></li>        
      </ul>
    </div>
  </nav>", "/application/themes/mytheme/partials/site/header.htm", "");
    }
}
