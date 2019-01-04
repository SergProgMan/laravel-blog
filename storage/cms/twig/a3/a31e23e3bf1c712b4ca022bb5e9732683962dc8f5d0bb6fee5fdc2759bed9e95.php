<?php

/* /application/themes/mytheme/pages/contact.htm */
class __TwigTemplate_e00c6e538f0859a5e8660cd4566f361f04e452e6e32694de4351daa1638eea96 extends Twig_Template
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
        echo "<h1>Contact Us</h1>

<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>
    
</form>";
    }

    public function getTemplateName()
    {
        return "/application/themes/mytheme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>

<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Message</label>
        <textarea class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>
    
</form>", "/application/themes/mytheme/pages/contact.htm", "");
    }
}
