<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig */
class __TwigTemplate_d54aa91027454fcad76513d1c655997ec58138de5ecc4d080193bbd6c2c577c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"topbar-left col-sm-6 col-xs-6\">
        <div class=\"social-list\">
          ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 7)) {
            // line 8
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 9
        echo " 
          ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 10)) {
            // line 11
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 12
        echo " 
          ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 13)) {
            // line 14
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 15
        echo " 
          ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 16)) {
            // line 17
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 18
        echo " 
          ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 19)) {
            // line 20
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 21
        echo " 
          ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 22)) {
            // line 23
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 24
        echo " 
          ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 25)) {
            // line 26
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 27
        echo " 
          ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 28)) {
            // line 29
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 30
        echo " 
          ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 31)) {
            // line 32
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 33
        echo " 
          ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 34)) {
            // line 35
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 36
        echo "  
          ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 37)) {
            // line 38
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 39
        echo "  
        </div>
      </div>

      <div class=\"topbar-right col-sm-6 col-xs-6\">
        
        ";
        // line 45
        if ((($context["custom_account"] ?? null) == "")) {
            // line 46
            echo "          <ul class=\"gva_topbar_menu\">
            <!--<li><a href=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_link"] ?? null), 47, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a></li>
            <li><a href=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["register_link"] ?? null), 48, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register"));
            echo "</a></li>-->
            <li id=\"reciteme\"><a href=\"#\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility"));
            echo "</a></li>
          </ul>

        ";
        } else {
            // line 53
            echo "          <ul class=\"gva_topbar_menu login\">
            <li>";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["custom_account"] ?? null), 54, $this->source));
            echo "</li>
          </ul>  
        ";
        }
        // line 56
        echo "  
      </div>

    </div>
  </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 56,  200 => 54,  197 => 53,  190 => 49,  184 => 48,  178 => 47,  175 => 46,  173 => 45,  165 => 39,  159 => 38,  157 => 37,  154 => 36,  148 => 35,  146 => 34,  143 => 33,  137 => 32,  135 => 31,  132 => 30,  126 => 29,  124 => 28,  121 => 27,  115 => 26,  113 => 25,  110 => 24,  104 => 23,  102 => 22,  99 => 21,  93 => 20,  91 => 19,  88 => 18,  82 => 17,  80 => 16,  77 => 15,  71 => 14,  69 => 13,  66 => 12,  60 => 11,  58 => 10,  55 => 9,  49 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig", "/home/bestsols/public_html/dev1.bestsols.co.uk/themes/custom/gavias_edmix/templates/page/parts/topbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 8, "t" => 47, "raw" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
