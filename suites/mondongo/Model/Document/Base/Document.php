<?php

namespace Model\Document\Base;

/**
 * Base class of Model\Document\Document document.
 */
abstract class Document extends \Mondongo\Document\Document
{


    protected $data = array(
        'fields' => array(
            'field0' => null,
            'field1' => null,
            'field2' => null,
            'field3' => null,
            'field4' => null,
            'field5' => null,
            'field6' => null,
            'field7' => null,
            'field8' => null,
            'field9' => null,
        ),
    );


    protected $fieldsModified = array(

    );

    /**
     * Returns the Mondongo of the document.
     *
     * @return Mondongo\Mondongo The Mondongo of the document.
     */
    public function getMondongo()
    {
        return \Mondongo\Container::getForDocumentClass('Model\Document\Document');
    }

    /**
     * Returns the repository of the document.
     *
     * @return Mondongo\Repository The repository of the document.
     */
    public function getRepository()
    {
        return $this->getMondongo()->getRepository('Model\Document\Document');
    }

    /**
     * Set the data in the document (hydrate).
     *
     * @return void
     */
    public function setDocumentData($data)
    {
        $this->id = $data['_id'];

        if (isset($data['field0'])) {
            $this->data['fields']['field0'] = (string) $data['field0'];
        }
        if (isset($data['field1'])) {
            $this->data['fields']['field1'] = (string) $data['field1'];
        }
        if (isset($data['field2'])) {
            $this->data['fields']['field2'] = (string) $data['field2'];
        }
        if (isset($data['field3'])) {
            $this->data['fields']['field3'] = (string) $data['field3'];
        }
        if (isset($data['field4'])) {
            $this->data['fields']['field4'] = (string) $data['field4'];
        }
        if (isset($data['field5'])) {
            $this->data['fields']['field5'] = (string) $data['field5'];
        }
        if (isset($data['field6'])) {
            $this->data['fields']['field6'] = (string) $data['field6'];
        }
        if (isset($data['field7'])) {
            $this->data['fields']['field7'] = (string) $data['field7'];
        }
        if (isset($data['field8'])) {
            $this->data['fields']['field8'] = (string) $data['field8'];
        }
        if (isset($data['field9'])) {
            $this->data['fields']['field9'] = (string) $data['field9'];
        }


        
    }

    /**
     * Convert an array of fields with data to Mongo values.
     *
     * @param array $fields An array of fields with data.
     *
     * @return array The fields with data in Mongo values.
     */
    public function fieldsToMongo($fields)
    {
        if (isset($fields['field0'])) {
            $fields['field0'] = (string) $fields['field0'];
        }
        if (isset($fields['field1'])) {
            $fields['field1'] = (string) $fields['field1'];
        }
        if (isset($fields['field2'])) {
            $fields['field2'] = (string) $fields['field2'];
        }
        if (isset($fields['field3'])) {
            $fields['field3'] = (string) $fields['field3'];
        }
        if (isset($fields['field4'])) {
            $fields['field4'] = (string) $fields['field4'];
        }
        if (isset($fields['field5'])) {
            $fields['field5'] = (string) $fields['field5'];
        }
        if (isset($fields['field6'])) {
            $fields['field6'] = (string) $fields['field6'];
        }
        if (isset($fields['field7'])) {
            $fields['field7'] = (string) $fields['field7'];
        }
        if (isset($fields['field8'])) {
            $fields['field8'] = (string) $fields['field8'];
        }
        if (isset($fields['field9'])) {
            $fields['field9'] = (string) $fields['field9'];
        }


        return $fields;
    }

    /**
     * Set the "field0" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField0($value)
    {
        if (!array_key_exists('field0', $this->fieldsModified)) {
            $this->fieldsModified['field0'] = $this->data['fields']['field0'];
        } elseif ($value === $this->fieldsModified['field0']) {
            unset($this->fieldsModified['field0']);
        }

        $this->data['fields']['field0'] = $value;
    }

    /**
     * Returns the "field0" field.
     *
     * @return mixed The field0 field.
     */
    public function getField0()
    {
        return $this->data['fields']['field0'];
    }

    /**
     * Set the "field1" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField1($value)
    {
        if (!array_key_exists('field1', $this->fieldsModified)) {
            $this->fieldsModified['field1'] = $this->data['fields']['field1'];
        } elseif ($value === $this->fieldsModified['field1']) {
            unset($this->fieldsModified['field1']);
        }

        $this->data['fields']['field1'] = $value;
    }

    /**
     * Returns the "field1" field.
     *
     * @return mixed The field1 field.
     */
    public function getField1()
    {
        return $this->data['fields']['field1'];
    }

    /**
     * Set the "field2" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField2($value)
    {
        if (!array_key_exists('field2', $this->fieldsModified)) {
            $this->fieldsModified['field2'] = $this->data['fields']['field2'];
        } elseif ($value === $this->fieldsModified['field2']) {
            unset($this->fieldsModified['field2']);
        }

        $this->data['fields']['field2'] = $value;
    }

    /**
     * Returns the "field2" field.
     *
     * @return mixed The field2 field.
     */
    public function getField2()
    {
        return $this->data['fields']['field2'];
    }

    /**
     * Set the "field3" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField3($value)
    {
        if (!array_key_exists('field3', $this->fieldsModified)) {
            $this->fieldsModified['field3'] = $this->data['fields']['field3'];
        } elseif ($value === $this->fieldsModified['field3']) {
            unset($this->fieldsModified['field3']);
        }

        $this->data['fields']['field3'] = $value;
    }

    /**
     * Returns the "field3" field.
     *
     * @return mixed The field3 field.
     */
    public function getField3()
    {
        return $this->data['fields']['field3'];
    }

    /**
     * Set the "field4" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField4($value)
    {
        if (!array_key_exists('field4', $this->fieldsModified)) {
            $this->fieldsModified['field4'] = $this->data['fields']['field4'];
        } elseif ($value === $this->fieldsModified['field4']) {
            unset($this->fieldsModified['field4']);
        }

        $this->data['fields']['field4'] = $value;
    }

    /**
     * Returns the "field4" field.
     *
     * @return mixed The field4 field.
     */
    public function getField4()
    {
        return $this->data['fields']['field4'];
    }

    /**
     * Set the "field5" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField5($value)
    {
        if (!array_key_exists('field5', $this->fieldsModified)) {
            $this->fieldsModified['field5'] = $this->data['fields']['field5'];
        } elseif ($value === $this->fieldsModified['field5']) {
            unset($this->fieldsModified['field5']);
        }

        $this->data['fields']['field5'] = $value;
    }

    /**
     * Returns the "field5" field.
     *
     * @return mixed The field5 field.
     */
    public function getField5()
    {
        return $this->data['fields']['field5'];
    }

    /**
     * Set the "field6" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField6($value)
    {
        if (!array_key_exists('field6', $this->fieldsModified)) {
            $this->fieldsModified['field6'] = $this->data['fields']['field6'];
        } elseif ($value === $this->fieldsModified['field6']) {
            unset($this->fieldsModified['field6']);
        }

        $this->data['fields']['field6'] = $value;
    }

    /**
     * Returns the "field6" field.
     *
     * @return mixed The field6 field.
     */
    public function getField6()
    {
        return $this->data['fields']['field6'];
    }

    /**
     * Set the "field7" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField7($value)
    {
        if (!array_key_exists('field7', $this->fieldsModified)) {
            $this->fieldsModified['field7'] = $this->data['fields']['field7'];
        } elseif ($value === $this->fieldsModified['field7']) {
            unset($this->fieldsModified['field7']);
        }

        $this->data['fields']['field7'] = $value;
    }

    /**
     * Returns the "field7" field.
     *
     * @return mixed The field7 field.
     */
    public function getField7()
    {
        return $this->data['fields']['field7'];
    }

    /**
     * Set the "field8" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField8($value)
    {
        if (!array_key_exists('field8', $this->fieldsModified)) {
            $this->fieldsModified['field8'] = $this->data['fields']['field8'];
        } elseif ($value === $this->fieldsModified['field8']) {
            unset($this->fieldsModified['field8']);
        }

        $this->data['fields']['field8'] = $value;
    }

    /**
     * Returns the "field8" field.
     *
     * @return mixed The field8 field.
     */
    public function getField8()
    {
        return $this->data['fields']['field8'];
    }

    /**
     * Set the "field9" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setField9($value)
    {
        if (!array_key_exists('field9', $this->fieldsModified)) {
            $this->fieldsModified['field9'] = $this->data['fields']['field9'];
        } elseif ($value === $this->fieldsModified['field9']) {
            unset($this->fieldsModified['field9']);
        }

        $this->data['fields']['field9'] = $value;
    }

    /**
     * Returns the "field9" field.
     *
     * @return mixed The field9 field.
     */
    public function getField9()
    {
        return $this->data['fields']['field9'];
    }


    public function preInsertExtensions()
    {

    }


    public function postInsertExtensions()
    {

    }


    public function preUpdateExtensions()
    {

    }


    public function postUpdateExtensions()
    {

    }


    public function preSaveExtensions()
    {

    }


    public function postSaveExtensions()
    {

    }


    public function preDeleteExtensions()
    {

    }


    public function postDeleteExtensions()
    {

    }
}