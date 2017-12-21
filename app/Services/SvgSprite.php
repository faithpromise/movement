<?php

namespace App\Services;

class SvgSprite {

    public static function make($directory, $prefix = '') {

        $directory .= '/*.svg';
        $symbols = [];

        foreach (array_merge(glob($directory)) as $path):

            // File parts
            $path_info = pathinfo($path);

            $content = file_get_contents($path);

            // Strip out the id if there is one
            $content = preg_replace('/ id="(.*?)"/is', '', $content);

            // Replace svg tag with symbol tag, adding the id attribute based on the file name
            $content = preg_replace('/<svg (.*)<\/svg>/is', '<symbol id="' . $prefix . $path_info['filename'] . '" $1</symbol>', $content);

            // Replace any unwanted attributes
            $content = preg_replace('/ data-name=".*?"/is', '', $content);
            $content = preg_replace('/ xmlns=".*?"/is', '', $content);

            // Replace fill attributes
            // https://tomhazledine.com/inline-svg-icons/
            $content = preg_replace( '/fill=("|\')(#)?([a-fA-F0-9]*)("|\')/i', '', $content );

            // Remove whitespace
            $content = preg_replace('~>\s+<~', '><', $content);

            array_push($symbols, $content);
        endforeach;

        return '<svg xmlns="http://www.w3.org/2000/svg" style="display:none;"><defs>' . implode('', $symbols) . '</defs></svg>';

    }

}