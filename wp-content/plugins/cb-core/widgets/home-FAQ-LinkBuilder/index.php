<?php

namespace Elementor;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use ELementor\Repeater;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * CB Core Demo
 *
 * CB Core widget for Demo.
 *
 * @since 1.0.0
 */
class CB_Core_FAQLINK_Home extends Widget_Base
{

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'cb-faqink-home';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __('CB Home FAQ Linkbuilder', 'cb-core');
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'eicon-post-list';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['cb-cat'];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends()
	{
		return ['cb-core'];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls()
	{
		$this->start_controls_section(
			'section_select_layout',
			[
				'label' => __('Layout', 'cb-core'),
			]
		);
		$this->add_control(
			'layout',
			[
				'label' => __('Layout', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'layout-1' => __('Layout 1', 'cb-core'),
				],
				'default' => 'layout-1',
				'toggle' => true,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_select_banner_1',
			[
				'label' => __('Banner', 'cb-core'),
			]
		);

		$this->add_control(
			'banner_right_image',
			[
				'label' => __('Baner Left Image', 'cb-core'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'banner_subtitle_1',
			[
				'label' => __('Banner Subtitle', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Link Building Strategy', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your subtitle here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'banner_title_part_1',
			[
				'label' => __('Banner Title Part 1', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('Cutting Edge Link Building Strategy
				Our Link Building ', 'cb-core'),
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'banner_title_part_2',
			[
				'label' => __('Banner Title Part 2', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('Packages', 'cb-core'),
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'banner_title_part_3',
			[
				'label' => __('Banner Title Part 3', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('& Pricing', 'cb-core'),
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'banner_text_1',
			[
				'label' => __('Banner Text Part 1', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('Having quality backlinks from other websites is the #1 influencing Google ranking factor. You can have the fastest, most beautiful website in the World, but if nobody is linking to your website, then you\'ll struggle for search engine traffic.', 'cb-core'),
				'placeholder' => __('Type your text here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'banner_text_2',
			[
				'label' => __('Banner Text Part 2', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('Our link building services help manage that entire process with a focus on high quality link building that\'s been fine tuned over many years.', 'cb-core'),
				'placeholder' => __('Type your text here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$repeaterFeaturedIncluded = new Repeater();
		$repeaterFeaturedIncluded->add_control(
			'field_condition',
			[
				'label' => __('Field Condition', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'style-1' => __('Style 1', 'cb-core'),
				],
				'default' => 'style-1'
			]
		);

		$repeaterFeaturedIncluded->add_control(
			'service_title',
			[
				'label' => __('Service Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('We do things that no one else does', 'cb-core'),
				'label_block' => true,
				'condition' => [
					'field_condition' => ['style-1']
				],
				'placeholder' => __('Type your title here', 'cb-core'),
			]
		);


		$repeaterFeaturedIncluded->add_control(
			'service_text',
			[
				'label' => __('Service Description', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu fugiat.', 'cb-core'),
				'label_block' => true,
				'condition' => [
					'field_condition' => ['style-1']
				],
				'placeholder' => __('Type your description here', 'cb-core'),
			]
		);

		$this->add_control(
			'dynamic_service',
			[
				'label' => __('Service Lists', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeaterFeaturedIncluded->get_controls(),
				'title_field' => 'Dynamic Service List',
			]
		);


		$this->end_controls_section();


	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{

		$settings = $this->get_settings(); ?>

        <?php include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
	}
}

Plugin::instance()->widgets_manager->register(new CB_Core_FAQLINK_Home());
