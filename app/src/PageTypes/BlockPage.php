<?php
    use DNADesign\Elemental\Models\BaseElement;

    class BlockPage extends Page
    {
        private static $db = [];

        private static $has_one = [];

        public function getNavigation()
        {
            $Links = BaseElement::get()->filter('LinkToNav', '1');
            return $Links;
        }
    }

