<?php

namespace Home\Controller;

use function PHPSTORM_META\type;
use Think\Controller;
use Think\Model;
use Think\Page;
use Think\Upload;
use Org\Util\regexTool;

class PregController extends Controller {
    public function index() {

        $pattern = '/[0-9]/';
        $subject = 'fasdfadf96qwrqet+5fasfqjo4646fqfa+644fdasf$m2jl;49fdsa464/*46fda666fdas6ffwrhfkuj,h;klhp;o,hg6666fadfaf';
        $m1 = $m2 = array();

        /*
         * preg_match()
         * preg_match_all()
         * 返回数组类型不同
         */
        preg_match($pattern, $subject, $m1);     //返回一位数组 匹配到第一个就返回
        preg_match_all($pattern, $subject, $m2); //返回二维数组

        /*
         * preg_replace(); str_replace父集
         * preg_filter();  只保留发生替换后的值
         *返回值不同
         * */
        $pattern = array('/[0123]/', '/[456]/', '/[789]/');
        $subject = array(
            'fasdfadf96qwrqet+5fasfqj',
            'a+644fdasf$m2jl;49fd',
            'sa464/*46fda666fdas6ffwrhfkuj,h;',
            'klhp;o',
            ',hgfa'
        );
        $replacement = array('我', '爱', '火箭');
        $str1 = preg_replace($pattern, $replacement, $subject);
        $str2 = preg_filter($pattern, $replacement, $subject);
        //        show($str1);
        //        show('<hr>');
        //        show($str2);
        /*Array
            (
                [0] => fasdfadf火箭爱qwrqet+爱fasfqj
                [1] => a+爱爱爱fdasf$m我jl;爱火箭fd
                [2] => sa爱爱爱/*爱爱fda爱爱爱fdas爱ffwrhfkuj,h;
                [3] => klhp;o
                [4] => ,hgfa
            )
            Array
            (
                [0] => fasdfadf火箭爱qwrqet+爱fasfqj
                [1] => a+爱爱爱fdasf$m我jl;爱火箭fd
                [2] => sa爱爱爱/*爱爱fda爱爱爱fdas爱ffwrhfkuj,h;
            )*/


        /*
         * pattern_gerp() preg_filter(); 阉割版 只匹配不替换
         * */
        $pattern = '/[0-9]/';
        $subject = array(
            'fasdfadf96qwrqet+5fasfqj',
            'a+644fdasf$m2jl;49fd',
            'sa464/*46fda66[]6fdas69*/-+()ffwrhfkuj,h;',
            'klhp;o',
            ',hgfa'
        );
        $arr = preg_grep($pattern, $subject);

        /*
         * preg_split 类似explode()
         * */
        $pattern = '/[0-9]/';
        $subject = 'fasde3[]3/-*3fa424df火箭543爱qwrqet+爱876fasfqj';
        $arr = preg_split($pattern, $subject);

        /*
         * preg_quote() 把正则表达式中运算符转义
        */
        $str = preg_quote($subject);
        show($str);
    }

    public function grammer() {
        //界定符 表达式的开始和结束位置 /[0-9]/ #[0-9]# {[0-9]}一般不用 https://regex101.com/工具
        //原子 最小单位 可见原子/不可见原子(空格 换行符\)
        /**
         *   原子筛选方式  | [] [^]
         *   原子的集合
         *   .    除换行符外任意字符
         *   \d   任意一个十进制数字
         *   \D   任意一个非十进制数字[^0-9]
         *   \s   一个不可见的原子
         *   \S   一个可见的原子
         *   \w   任意一个数字 字母或下划线[a-zA-Z0-9]
         *   \W   任意一个非数字 字母或下划线
         */
        //量词
        /**
         *  {n}     其前面的原子恰好出现n次
         *  {n,}    其前面的原子至少出现n次
         *  {n,m}   其前面的原子至少出现n次,最多出现m次
         *  *       匹配0次,一次或者多次
         *  +       匹配一次或者多次其之前的原子 {1,}
         *  ?       匹配0次或者一次之前的原子
         *
         **/
        //边界控制
        /**
         * ^ 匹配字符串开始的位置之前不能有任何其他字符
         * $ 匹配字符串结尾的位置
         *
         */
        //模式单元
        /**
         * () 匹配其中的整体为一个原子
         */
        '(d|D)uang';

        /**
         * 修正模式
         * 匹配过程指定匹配模式
         */

        /**
         * 贪婪模式,懒惰模式
         *
         */
        $pattern1 = '/imooc.+123/'; //默认贪婪模式
        $pattern = '/imooc.+123/U'; //懒惰模式
        $subject = 'I love imooc_123123123123123123123123123123';

        $matches = array();
        preg_match($pattern, $subject, $matches);
        show($matches);

        /**
         * 常见修正模式
         * U懒惰模式
         * i 忽略字母大小写
         * x 忽略空白
         * s 让元字符'.'匹配包括换行符以内的所有字符
         * e  配合函数preg_replace()使用,可以把匹配来的字符串当作正则表达式执行;
         *
         */

        $pattern = '/iMo  Oc.+123/Uixs';
        $pattern = '/imooc.123/s';
        $subject = 'I love imooc_123123123123123123123123123123';

        $matches = array();
        preg_match($pattern, $subject, $matches);
        show($matches);

    }

    public function practise() {
        /**
         * 非空
         * "原子出现的次数为一次到无穷多次"
         */
        $pattern = '/.+/';

        /**
         * 浮点数匹配
         * 数字连续出现一次或无穷大次 小数点后位数为两位
         */
        $pattern = '/\d+\.\d{2}$/';
        $subject = '20.20';

        $matches = array();
        preg_match($pattern, $subject, $matches);
        show($matches);

        /**
         * 手机号匹配
         * 11位数字
         * 首位为1
         */

        $pattern = '/1(3|4|5|7|8)\d{9}/';
        $subject = '13999999999';

        $matches = array();
        preg_match($pattern, $subject, $matches);
        show($matches);

        /**
         * email 地址匹配
         * @前 \w
         */
        $pattern = '/^\w+(\.\W+)*@(\.\w)+/';

        /**
         * url 地址匹配
         *
         */

        $pattern = '/^(https?://)?(\w+\.)+[a-zA-Z]+$/';

    }

    public function regexClass() {
        $regex = new regexTool();
        $regex->setFixMode('U');
        $res = $regex->isEmail('360@qq.com');
        show($res);
    }

    public function checkForm() {
        $regex = new regexTool();
        if (IS_POST) {
            dump($_POST['mobile']);
            //对表单提交过来的数据做一个验证
            if (!$regex->noEmpty($_POST['username'])) exit('用户名是必须填写的！');
            if (!$regex->isEmail($_POST['email'])) exit('email格式错误！');
            if (!$regex->isMobile($_POST['mobile'])) exit('手机号格式错误！');
        }
        $this->display();
    }


}