<?php

namespace Exercicio6;

class Exercicio6
{
    protected $fieldOptions;
    protected $fieldName;

    /**
     * @return mixed
     */
    public function getFieldOptions()
    {
        return $this->fieldOptions;
    }

    /**
     * @param mixed $fieldOptions
     * @return Exercicio6
     */
    public function setFieldOptions($fieldOptions)
    {
        $this->fieldOptions = $fieldOptions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $fieldName
     * @return Exercicio6
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    private function prepareOptions($options)
    {
        foreach ($options as $option) {
            echo "<option value=\"$option\">" . $option . "</option>\n";
        }
    }

    public function renderSelectField($classes='')
    {
        echo "<select class=\"" . $classes . "\" name=\"" . $this->getFieldName() . "\">\n";
        $this->prepareOptions($this->getFieldOptions());
        echo "</select>";
    }

}
