<?php
class Template_Twig
{
    private static $twig;

    public static function twig() 
    {
        $templatedir = __DIR__.'templates';
        if (!isset(self::$twig)) 
        {
            $loader =  new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
            self::$twig = new \Twig\Environment($loader, [
                'cache' => dirname(__DIR__) . '/templates/cache_templates',
            ]);
        }
        return self::$twig;
    }
}
?>