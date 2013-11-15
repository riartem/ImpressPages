<?php
/**
 * @package   ImpressPages
 */

namespace Ip {

    class Translator
    {

        /**
         * @var $translator \Zend\I18n\Translator\Translator
         */
        protected static $translator;

        public static function init($locale = 'en')
        {
            $translator = new \Zend\I18n\Translator\Translator();

            $translator->setLocale($locale);

            $translator->addTranslationFilePattern(
                'gettext',
                \Ip\Config::themeFile('languages/'),
                '%s.mo',
                'theme-' . \Ip\Config::theme()
            );

//
//            $translator->addTranslationFilePattern(
//                'phparray',
//                \Ip\Config::themeFile('languages/'),
//                '%s.php',
//                'theme-' . \Ip\Config::theme()
//            );

            static::$translator = $translator;
        }

        public static function addTranslationFilePattern($type, $directory, $pattern, $domain)
        {
            static::$translator->addTranslationFilePattern(
                $type,
                $directory,
                $pattern,
                $domain
            );
        }

        public static function translate($text, $domain)
        {
            return static::$translator->translate($text, $domain);
        }

        public static function translatePlural($singular, $plural, $number, $domain)
        {
            return static::$translator->translatePlural($singular, $plural, $number, $domain);
        }
    }
}