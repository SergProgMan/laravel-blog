<?php

/* /application/themes/mytheme/partials/site/footer.htm */
class __TwigTemplate_9b1f592b04e6c82adf042d4ae7806a2024ba4bcb9b372402dc81b03686f24cd0 extends Twig_Template
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
        echo "<p class=\"text-center\">Copyright &copy; 2019 MyTheme Services</p>";
    }

    public function getTemplateName()
    {
        return "/application/themes/mytheme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"text-center\">Copyright &copy; 2019 MyTheme Services</p>", "/application/themes/mytheme/partials/site/footer.htm", "");
    }
}
