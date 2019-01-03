<?php

/* /application/themes/mytheme/pages/home.htm */
class __TwigTemplate_483e075f5d418dd2130e457ee002a3f67e328072355b105a5752354820f55919 extends Twig_Template
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
        echo "<h1>Welcome</h1>";
    }

    public function getTemplateName()
    {
        return "/application/themes/mytheme/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Welcome</h1>", "/application/themes/mytheme/pages/home.htm", "");
    }
}
