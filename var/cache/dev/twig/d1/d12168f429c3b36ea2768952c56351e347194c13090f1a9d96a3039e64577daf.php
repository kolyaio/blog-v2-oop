<?php

/* home/index.html.twig */
class __TwigTemplate_07e5c91cf37207258040b2b411224fe998bb4cd25c078669b30af5441bc29339 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "helpers/heading.html.twig");
        echo "
<div class=\"container-fluid the-welcome-block\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"text-heading\">
        <h1>Welcome to the new blog</h1>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid the-about-block\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"about-us\">
        <h2>About Blog</h2>
        <p>eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod</p>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid the-subscribe-block\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"h3-title\">
        <h3>Subscribe to our newletter</h3>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-7\">
      <form method=\"POST\" action=\"#\">
        <div class=\"form-group\">
          <label for=\"name\">Name:</label>
          <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Enter Name\">
        </div>
        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Enter Email\">
        </div>
        <input type=\"submit\" name=\"submit\" id=\"submitBtn\" value=\"Subscribe\" class=\"btn btn-info\">
      </form>
    </div>
  </div>
</div>
";
        // line 45
        echo twig_include($this->env, $context, "helpers/footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 45,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('helpers/heading.html.twig')}}
<div class=\"container-fluid the-welcome-block\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"text-heading\">
        <h1>Welcome to the new blog</h1>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid the-about-block\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"about-us\">
        <h2>About Blog</h2>
        <p>eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod</p>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid the-subscribe-block\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"h3-title\">
        <h3>Subscribe to our newletter</h3>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-7\">
      <form method=\"POST\" action=\"#\">
        <div class=\"form-group\">
          <label for=\"name\">Name:</label>
          <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Enter Name\">
        </div>
        <div class=\"form-group\">
          <label for=\"email\">Email:</label>
          <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Enter Email\">
        </div>
        <input type=\"submit\" name=\"submit\" id=\"submitBtn\" value=\"Subscribe\" class=\"btn btn-info\">
      </form>
    </div>
  </div>
</div>
{{ include('helpers/footer.html.twig')}}
", "home/index.html.twig", "/var/www/html/php_frameworks/symfony-test/templates/home/index.html.twig");
    }
}
