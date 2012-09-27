<?php

namespace Trig\SimpleShopBundle\Twig;

class TrigsExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            'slug' => new \Twig_Filter_Method($this, 'slug'),
            'unslug' => new \Twig_Filter_Method($this, 'unSlug'),
            'wordsCut' => new \Twig_Filter_Method($this, 'wordsCut', array(
                'pre_escape' => 'html',
                'is_safe' => array('html')
                    )),
             'count' => new \Twig_Filter_Function('count'),
             'price' => new \Twig_Filter_Method($this, 'price'),
            );
    }

    public function getName() {
        return "trigs_extension";
    }
    
    /**
     * Helper method for normalize price displaing
     * 
     * @param mixed $price
     * @return string
     */
    public function price($price){
        return strrev(implode(" ", str_split(strrev(preg_replace("/\s+/", "", $price)), 3)));
    }

    /**
     * Function cuts incoming text by wordsCount parameter
     * also if $readMore is specified - method adds link 
     * <a href="$readMore">readmore...</a>
     * to the end of cutted string
     * 
     * 
     * @param string $string
     * @param string $readMore - [optional] url to full content 
     * @param int $wordsCount
     */
    public function wordsCut($string, $readMore = "", $wordsCount = 30) {
        $words = preg_split('/[\s]+/', $string);

        if (count($words) > $wordsCount) {
            $sliced = array_slice($words, 0, $wordsCount);
            $result = implode(" ", $sliced);
            if ("" !== $readMore) {
                $result .= " <a href=\"$readMore\">read more...</a>";
            }
            return $result;
        } else {
            return $string;
        }
    }

    /**
     * Creates string with white spaces convertet to dashes
     * 
     * @param string $rawString
     * @return string
     */
    public function slug($rawString) {
        return str_replace(" ", "-", $rawString);
    }

    /**
     * Inversed @see self::slug
     * 
     * @param string $rawString
     * @return string
     */
    public function unSlug($rawString) {
        return str_replace("-", " ", $rawString);
    }

}

?>
