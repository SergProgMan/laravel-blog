<?php

/* /application/themes/mytheme/layouts/fallback.htm */
class __TwigTemplate_ea58f23b3582f2ff70aeb2b6a33492ac4f9126b363b2915b826aa234818d2f2c extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/application/themes/mytheme/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/application/themes/mytheme/layouts/fallback.htm", "");
    }
}
