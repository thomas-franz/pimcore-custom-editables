<?php
declare(strict_types=1);

namespace CustomEditablesBundle\Model\Document\Editable;

use Pimcore\Model\Document\Editable;

class SimpleOutput extends Editable
{
    protected $value;

    /**
     * Used to get data to js file (initialize method)
     */
    public function frontend()
    {
        return $this->getData();
    }

    public function getData()
    {
        return $this->value;
    }

    /**
     * Returns type, has to be the same as in js and yaml file
     */
    public function getType()
    {
        return 'simple_output';
    }

    /**
     * Used for getting data from editmode
     */
    public function setDataFromEditmode($data)
    {
        $this->value = $data;

        return $this;
    }

    /**
     * Used for getting data from database
     */
    public function setDataFromResource($data)
    {
        $this->value = $data;

        return $this;
    }

    public function isEmpty()
    {
        return empty($this->value);
    }
}