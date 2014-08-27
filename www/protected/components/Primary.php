<?php
/**
	 * Это клас для главных страниц
	 */

class Primary extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    
     public $content_sliader ='
        	<h1>Советская, 79а<br /> г. Новосибирск </h1>
        			<p class="lead">Сайт для собственников жилья.</p>
        			<p><a class="btn btn-success btn-lg tx-sp3" role="button" href="/signup" >РЕГИСТРАЦИЯ &raquo;</a></p>';
     public $content_css;
     public $param;
}