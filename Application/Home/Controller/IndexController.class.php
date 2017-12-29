<?php

namespace Home\Controller;

use function PHPSTORM_META\type;
use Think\Controller;
use Think\Model;
use Think\Page;
use Think\Upload;
use Org\Util\regexTool;

class IndexController extends Controller {
    public function index() {
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');
    }

    //导航条
    public function navigator() {
        $this->display();
    }

    //上传类
    public function upload() {
        $config = array(
            'maxSize' => 3145728,
            'rootPath' => './Uploads/',
            'savePath' => '',
            'saveName' => array('uniqid', ''),
            'exts' => array(
                'jpg',
                'gif',
                'png',
                'jpeg'
            ),
            'autoSub' => true,
            'subName' => array(
                'date',
                'Ymd'
            ),
        );
        $upload = new Upload($config);
        $upload->rootPath = 'E:/Upload/';
        if (IS_POST) {
            $info = $upload->upload();
            if (!$info) { //上传失败 非false->true
                $this->error($upload->getError());
            } else {
                foreach ($info as $file) {
                    $data = array(
                        'create_time' => date('Y-m-d h:i:s'),
                        'key' => $file['key'],
                        'save_name' => $file['savename'],
                        'save_path' => $file['savepath']
                    );
                    M('upload')->add($data);
                    echo $file['savepath'] . $file['savename'];
                }
            }

        }
        $this->display();
    }

    public function upload_one() {

        if (IS_POST) {
            $upload = new Upload(C('UPLOAD_CONFIG'));
            $upload->rootPath = 'E:/Upload/';
            $info = $upload->uploadOne($_FILES['once']);
            if (!$info) {
                $this->error($upload->getError());
            } else {
                echo $info['savepath'] . $info['savename'];

            }

        }
        $this->display('upload');
    }

    /**
     * @param $idm
     */
    public function ajax_serialize_upload() {
        dump($_POST);
    }

    //uplodify插件上传
    public function uploadify() {
        if (IS_POST) {
            $upload = new Upload(C('UPLOAD_CONFIG'));
            $upload->rootPath = 'E:/Upload/';
            $info = $upload->upload();
            if (!$info) { //上传失败 非false->true
                $this->error($upload->getError());
            } else {
                foreach ($info as $file) {
                    $data = array(
                        'create_time' => date('Y-m-d h:i:s'),
                        'key' => $file['key'],
                        'save_name' => $file['savename'],
                        'save_path' => $file['savepath']
                    );
                    M('upload')->add($data);
                    echo $file['savepath'] . $file['savename'];
                }
            }

        }
        $this->display();
    }

    public function page() {
        $upload = M('upload');
        $count = $upload->count();
        $Page = new Page($count, 10);
        $show = $Page->show();
        $pic_list = $upload->limit($Page->firstRow, $Page->listRows)->select();
        //        dump($pic_list);
        $this->assign('show', $show);
        $this->assign('pic_list', $pic_list);
        $this->display();
    }

    public function ajax_page() {
        $upload = M('upload');
        $pic_list = $upload->getField('id,save_name,save_path');
        $this->ajaxReturn($pic_list);
    }
}