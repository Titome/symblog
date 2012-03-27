<?php

/* ::base.html.twig */
class __TwigTemplate_6ba336defc52bf3b8a96b913f4eb94f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "            
        <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <section id=\"wrapper\">
        
            <header id=\"header\">
            
                <div class=\"top\">
                    
                    ";
        // line 30
        $this->displayBlock('navigation', $context, $blocks);
        // line 43
        echo "                    
                </div>
                
                <hgroup>
                    <h2>";
        // line 47
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>
                        ";
        // line 49
        $this->displayBlock('blog_tagline', $context, $blocks);
        // line 52
        echo "                    </h3>
                </hgroup>
                
            </header>
            
            <section class=\"main-col\">
            
                ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "                
            </section>
            
            <aside class=\"sidebar\">
                ";
        // line 64
        $this->displayBlock('sidebar', $context, $blocks);
        // line 65
        echo "            </aside>
            
            <div id=\"footer\">
            
                ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "                    
            </div>
            
        </section>
        
        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            
            ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_screen_1.css");
            // line 16
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "        ";
    }

    // line 30
    public function block_navigation($context, array $blocks = array())
    {
        // line 31
        echo "                        
                        <nav>
                            
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                            </ul>
                            
                        </nav>
                    
                    ";
    }

    // line 47
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">symblog</a>";
    }

    // line 49
    public function block_blog_tagline($context, array $blocks = array())
    {
        // line 50
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">creating a blog in Symfony2</a>
                        ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
    }

    // line 64
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
