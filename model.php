<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/15 0015
 * Time: 下午 3:51
 */


//佣金规则结束原因
public static $distinRuleEndType=[
    '2'=>'合同到期',
    '3'=>'强行终止'
];


//提成方式（公司）
public static $commissionWay=[
    '1'=>'固定金额X套数',
    '2'=>'销售价格X比例',
    '3'=>'面积X单价'
];

//金额单位
public static $moneyType=[
    '1'=>'人民币',
    '2'=>'美元',
    '3'=>'日元',
    '4'=>'港币',
    '5'=>'英镑',
    '7'=>'欧元'
];

//佣金类型
public static $brokerageType=[
    '1'=>'成交佣金',
    '2'=>'到访佣金',
    '3'=>'推荐佣金'
];

//开盘方式
public static $openMod=[
    '1'=>'网上开盘',
    '2'=>'现场开盘',
    '3'=>'其他'
];

//客户状态
const LOSE_CONTROLLER=0;//失效
const WAIT_VERIFY=1;//待确认
const VERIFY_YES=2;//确认到访
const VALID_VISIT=3;//有效访问
const OFFER_TO_BUY=4;//认购
const MAKE_BRAGAIN=5;//成交
const ROW_NUMBER=6;//排号

public static $client_state=[
    '失效','待确认','确认到访','有效访问','已认购','已成交','转排号'
];

//身份
const BROKER = 0;//全民经纪人
const CHANNEL=1;//渠道
const MEDIUM=2;//中介
const DISTRIBUTION=3;//分销公司
const DEVELOPER=4;//开发商
const AGENCY=5;//代理公司
public static $identity=[
    '全民经纪人',
    '渠道',
    '中介',
    '分销公司',
    '开发商',
    '代理公司'
];


//证件类型
const ID_CARD=0;//身份证
public static $card_name = [
    '身份证'
];

//置业目的
public static $payPurpose=[
    '未选择','投资','自助','投资兼自助'
];

//付款方式
public static $payWay=[
    '未选择','一次性付款','公积金贷款','综合贷款','银行按揭贷款','分期付款'
];