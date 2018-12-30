<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use DNADesign\Elemental\Models\BaseElement;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

        public function getNavigation()
        {
            $Links = BaseElement::get()->filter('LinkToNav', '1');
            return $Links;
        }
    }
}
