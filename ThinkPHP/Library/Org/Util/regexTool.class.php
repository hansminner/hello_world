<?php
/**
 * Created by PhpStorm.
 * User: 无双大吊
 * Date: 2017/12/18
 * Time: 11:35
 */

namespace Org\Util;


class regexTool {
    //定义一个私有成员，用来存放一些常用的正则表达式
    private $validate = array(
        'require' => '/.+/',
        'email' => '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',
        'url' => '/^http(s?):\/\/(?:[A-za-z0-9-]+\.)+[A-za-z]{2,4}(?:[\/\?#][\/=\?%\-&~`@[\]\':+!\.#\w]*)?$/',
        'currency' => '/^\d+(\.\d+)?$/',
        'number' => '/^\d+$/',
        'zip' => '/^\d{6}$/',
        'integer' => '/^[-\+]?\d+$/',
        'double' => '/^[-\+]?\d+(\.\d+)?$/',
        'english' => '/[A-Za-z]+$/',
        'qq' => '/^\d{5,11}$/',
        //        'mobile' => '/^1(3|4|5|6|7|8|9)\d{9}$/',
        'mobile' => '/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/',
    );

    //再定义一个私有成员，作用是定义它返回的结果，到底是让它返回是否匹配，还是把匹配到的结果全部返回到用户端。
    //也就是说当这个变量$returnMatchResult，这个成员属性为false的时候，只返回验证的结果是真还是假。如果值为true，返回去的是匹配到的结果的数组。
    private $returnMatchResult = false;
    //再定义一个成员变量用来存放修正模式，默认为空
    private $fixMode = null;
    //再定义2个成员变量，第1个是匹配的结果数组，
    private $matches = array();
    //第2个为验证的结果，验证成功返回true，验证失败返回false。
    private $isMatch = false;

    public function __construct($returnMatchResult = false, $fixMode = null) {
        $this->returnMatchResult = $returnMatchResult;
        $this->fixMode = $fixMode; //给私有成员赋值
    }

    private function regex($pattern, $subject) {
        if (array_key_exists(strtolower($pattern), $this->validate)) {
            $pattern = $this->validate[$pattern] . $this->fixMode;
        }
        $this->returnMatchResult ? preg_match_all($pattern, $subject, $this->matches) : $this->isMatch = preg_match($pattern, $subject) === 1;
        return $this->getRegexResult();
    }

    /**
     * @return array|bool
     * 为了区别返回两种格式创建的方法
     */
    private function getRegexResult() {
        if ($this->returnMatchResult) {
            return $this->matches;
        } else {
            return $this->isMatch;
        }
    }

    /**
     * @param null $bool
     * 切换返回的类型
     */
    public function toggleReturnType($bool = null) {
        if (empty($bool)) {
            $this->returnMatchResult = !$this->returnMatchResult;
        } else {
            $this->returnMatchResult = is_bool($bool) ? $bool : (bool)$bool;
        }
    }

    public function setFixMode($fixMode) {
        $this->fixMode = $fixMode;
    }

    public function noEmpty($str) {
        return $this->regex('require', $str);
    }

    public function isEmail($email) {
        return $this->regex('email', $email);
    }

    public function isMobile($mobile) {
        return $this->regex('mobile', $mobile);
    }

    public function check($pattern, $subject) {
        return $this->regex($pattern, $subject);
    }


}