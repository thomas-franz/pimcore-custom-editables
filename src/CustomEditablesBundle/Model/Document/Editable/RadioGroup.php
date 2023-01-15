<?php
declare(strict_types=1);

namespace CustomEditablesBundle\Model\Document\Editable;

use Pimcore\Model\Document\Editable;
use Pimcore\Model\Document\Editable\EditmodeDataInterface;

/**
 * @method \Pimcore\Model\Document\Editable\Dao getDao()
 */
class RadioGroup extends Editable implements EditmodeDataInterface
{

    /**
     * Contains the current selected values
     *
     * @internal
     *
     * @var array
     */
    protected $value = [];


    public function getType()
    {
        return 'radio_group';
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->value;
    }

    public function getValue()
    {
        return $this->getData();
    }

    /**
     * {@inheritdoc}
     */
    public function frontend()
    {
        return implode(' ', array_values($this->value));
    }

    /**
     * {@inheritdoc}
     */
    public function getDataEditmode()
        /** : mixed */
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataFromResource($data)
    {
        if ($data = \Pimcore\Tool\Serialize::unserialize($data)) {
            $this->setDataFromEditmode($data);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataFromEditmode($data)
    {
        if (empty($data)) {
            $this->value = [];
        } elseif (is_string($data)) {
            $this->value = explode(',', $data);
        } elseif (is_array($data)) {
            $this->value = $data;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        return empty($this->value);
    }

}