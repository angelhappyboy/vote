<?php

defined('THINK_PATH') or exit();

class CheckAgentBehavior extends Behavior
{
    /**
     * 执行行为 run方法是Behavior唯一的接口
     * @access public
     * @param mixed $params 行为参数
     * @return void
     */
    public function run(&$params)
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);

        $isWX = strpos($agent, 'micromessenger');

        if (! $isWX) {
            header('location:/tpl/Errors/401.html');
        }
    }
}