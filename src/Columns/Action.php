<?php

namespace Administr\ListView\Columns;


class Action extends Column
{
    public function __construct($name, $label, array $options = [])
    {
        $options['isGlobal'] = false;
        $options['icon'] = 'fa fa-file-o';
        parent::__construct($name, $label, $options);
    }

    public function setGlobal()
    {
        $this->options['isGlobal'] = true;
    }

    public function isGlobal()
    {
        return (bool)$this->options['isGlobal'];
    }

    public function setUrl($url)
    {
        $this->options['url'] = $url;
    }
}