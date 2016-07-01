<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		// $view = View::forge('welcome/index');

        $config = array(
            'pagination_url' => 'pager/index',
            'total_items'    => DB::count_records('users'),
            'per_page'       => 5,
            'uri_segment'    => 3,
            'num_links'      => 5,
            'template' => array(
                'wrapper_start'           => '<ul class="pager"> ',
                'wrapper_end'             => '</ul>',
                'page_start'              => '',
                'page_end'                => '',
                'previous_start'          => '<li class="prev">',
                'previous_end'            => '</li>',
                'previous_inactive_start' => '<li class="prev">',
                'previous_inactive_end'   => '</li>',
                'previous_mark'           => '<< ',
                'next_start'              => '<li class="next">',
                'next_end'                => '</li>',
                'next_inactive_start'     => '<li class=next">',
                'next_inactive_end'       => '</li>',
                'next_mark'               => ' >>',
                'active_start'            => '<li><em>',
                'active_end'              => '</em></li>',
                'regular_start'           => '<li>',
                'regular_end'             => '</li>'
            )
        );
        Pagination::set_config($config);

        $view->set_safe('pager', Pagination::create_links());

        $data = DB::select()->from('users')
                            ->limit(Pagination::$per_page)
                            ->offset(Pagination::$offset)
                            ->execute()
                            ->as_array();

        // return $view;
		return Response::forge(View::forge('welcome/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
