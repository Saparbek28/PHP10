<?php

abstract class BaseTag
{
    private $name;
    private $attributes;
    private $isSelfClosing;
    private $body;

private const SELF_CLOSE=[
    'area','base','br','col','embed',
    'hr','img','input','link','meta',
    'param','source','command','track','wbt',
    'keygen','menuitem'
];
    function __construct(string $name, array $attributes = [])
    {
        $this->body = new Body();
        $this->isSelfClosing = false;
        $this->name = $name;
        $this->attributes = new Attributes($attributes);
        if(in_array($name,self::SELF_CLOSE)){
            $this->selfClosing();
        }
    }

    public function setAttributes($key, $value = null)
    {
        $this->attributes->setAttribute($key, $value);
    }


    protected function selfClosing()
    {
        $this->isSelfClosing = true;
    }

    public function prependBody($body)
    {
        $this->body->prependBody($body);

        return $this;
    }

    public function appendBody($body)
    {
        $this->body->appendBody($body);

        return $this;
    }

    public function __toString() : string
    {
        $result = "<$this->name ";

        $result .= $this->attributes;

        $result .=  $this->isSelfClosing ? " />" : ">$this->body</$this->name>";

        return $result;
    }
    public function appendTo(BaseTag $tag){
        $tag->appendBody($this);
        return $this;
    }
    public function prependTo(BaseTag $tag){
        $tag->prependBody($this);
        return $this;
    }
}