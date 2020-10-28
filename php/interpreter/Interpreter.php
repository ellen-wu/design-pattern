<?php

/**
 * 封装好的对具体解释器的调用类,非解释器模式必须的角色
 */
class Interpreter
{
    private $interpreter;
    private $content;
    
    public function __construct($expression){
        $this->content = $expression->getContent();

        if($this->content[0] == "Chinese"){
            $this->interpreter = new ChineseInterpreter();
        } else {
            $this->interpreter = new EnglishInterpreter();
        }
     }
    
    public function execute(){
        $this->interpreter->interpret($this->content);
    }
}
