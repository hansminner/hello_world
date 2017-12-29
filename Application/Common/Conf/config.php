<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'first', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => 3306, // 端口
    //    'DB_PREFIX' => 'think_', // 数据库表前缀
    'DB_CHARSET' => 'utf8', // 字符集
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

    'UPLOAD_CONFIG' => array(
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
    )
);