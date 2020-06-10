<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 查看文章时给段落加上缩进
 *
 * @package AutoIndent
 * @author  cbb
 * @version 1.0
 * @link https://www.chenbb.top/archives/186/
 */
class AutoIndent_Plugin implements Typecho_Plugin_Interface
{

    public static function activate(){
		Typecho_Plugin::factory('Widget_Archive')->singleHandle = array('AutoIndent_Plugin', 'indent');
	}

    public static function deactivate(){}

    public static function config(Typecho_Widget_Helper_Form $form){}

    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    public static function render(){}
	
	/**
	 * 插件实现方法
	 *
	 */
	public static function indent(){
		$jqueryUrl = Helper::options()->pluginUrl . '/AutoIndent/res/jquery-3.4.1.min.js?version=9.12.0';
        echo '<script type="text/javascript" src="'. $jqueryUrl .'"></script>';
		$jsUrl = Helper::options()->pluginUrl . '/AutoIndent/res/Indent.js?version=9.12.0';
        echo '<script type="text/javascript" src="'. $jsUrl .'"></script>';
	}
}
