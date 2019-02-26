<?php
return [
    // 购物车大数据推荐位
    // 状态为X的时候，不请求大数据服务，返回空，app购物车推荐
    'cart_recommend' => true,

    // 分类页面AB测试功能开关
    // rue_recommend-hot_category switch 开关(true|false)_order 排序（当前页面支持排序)_solution 页面属性（搜索上报数据）
    'category_abTest' => 'true_recommend_category',

    // GB 前端性能收集采样率
    // GB 前端性能收集采样率 1为100%
    'fe_performance_rate' => '0.0002',

    // GB 前端性能上报开关
    // GB 前端性能上报开关
    'fe_performance_switch' => true,

    // 流量限制（暂仅用在红包雨）
    // 不要轻易改动(100表示不做限流，20表示20%可以进入抽奖)，改动务必麻烦知会到PHPER：陈健
    'flow_limitation' => '100',

    // 左侧聚合
    // 状态为X的时候，聚合数量变少，聚合商品数隐藏（可能出现问题部分商品属性筛选丢失）
    'goodslist_aggNum' => true,

    // 搜索联想词
    // 状态为X的时候，不请求搜索，返回空（搜索框没有搜索提示）
    'goodslist_keyword' => true,
];
