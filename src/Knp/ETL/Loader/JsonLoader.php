<?php

namespace Knp\ETL\Loader;

class JsonLoader extends FileLoader
{
    protected function write($data)
    {
        if ($this->file->getSize() > 0) {
            $data = ','.$data;
        }

        return parent::write($data);
    }
}