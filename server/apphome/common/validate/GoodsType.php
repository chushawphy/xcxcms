<?php
namespace app\common\validate;

use think\Validate;

class GoodsType extends Validate
{
    // 验证规则
    protected $rule = [
        ['id', 'require|number','ID必填|ID必须是数字'],
        ['reid', 'number','父级id必须是数字'],
        ['addtime', 'number','添加时间必须是数字'],
        ['name', 'require|max:30','栏目名称必填|栏目名称不能超过30个字符'],
        ['seotitle', 'max:150','seo标题不能超过150个字符'],
        ['keywords', 'max:60','关键词不能超过60个字符'],
        ['description', 'max:250','描述不能超过250个字符'],
        ['typedir', 'require|max:30','栏目别名必填|栏目别名不能超过30个字符'],
        ['templist', 'max:50','列表页模板不能超过50个字符'],
        ['temparticle', 'max:50','文章页模板不能超过50个字符'],
        ['litpic', 'max:100','缩略图不能超过100个字符'],
        ['seokeyword', 'max:60','相关关键词不能超过60个字符'],
        ['status', 'in:0,1','状态 0不显示 1显示'],
        ['listorder', 'number|between:1,9999','排序必须是数字|排序只能1-9999'],
        ['cover_img', 'max:100','封面不能超过100个字符'],
    ];
    
    protected $scene = [
        'add' => ['reid', 'addtime', 'name', 'seotitle', 'keywords', 'description', 'typedir', 'templist', 'temparticle', 'litpic', 'seokeyword', 'status', 'listorder', 'cover_img'],
        'del' => ['id'],
    ];
}