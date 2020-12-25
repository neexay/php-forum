<?php
    class Renderer {
        private $templates_dir = '';
        private $root_template = 'basic.page';
        private $page_parts = array('header', 'footer', 'center', 'sidebar', 'meta');

        public function __construct() {}

        public function setTemplatesDir($dir) {
            $dir = ROOT . '/'. $dir;
            if(is_dir($dir)) {
                $this->templates_dir = $dir;
            } else {
                echo 'Templates dir does not exists! Exiting.';
                exit;
            }
        }

        public function setPageParts($parts) {
            if(is_array($parts)) {
                $this->page_parts = $parts;
            }
        }

        public function loadTemplate($template, $parts, $data = array()) {
            extract($parts);
            include $this->templates_dir . '/' . $template . '.php';
        }

        public function checkTemplateExists($template, $part) {
            $tpl = $this->templates_dir . '/' . $template . '.' . $part . '.php';

            if(file_exists($tpl)) return $tpl;

            return $this->templates_dir . '/' . 'basic.' . $part . '.php';
        }

        public function renderTemplate($tname, $data = array(), $replace_name = '') {
            $rtp = !empty($replace_name) ? $replace_name : $this->root_template;
            $parts = array();

            foreach($this->page_parts as $ppart) {
                $partname = 'part_' . $ppart;
                $parts[$partname] = $this->checkTemplateExists($tname, $ppart);
            }

            $this->loadTemplate($rtp, $parts, $data);
        }
    }

