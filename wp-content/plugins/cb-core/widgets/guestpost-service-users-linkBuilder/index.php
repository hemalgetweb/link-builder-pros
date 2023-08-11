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
class CB_Core_GuestPostServiceUser_LB2 extends Widget_Base
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
		return 'cb-guestpostservicehere-home2';
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
		return __('CB Guest second PService User LinkBuilder', 'cb-core');
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
			'banner_background_image',
			[
				'label' => __('Background Image', 'cb-core'),
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
				'default' => __('', 'cb-core'),
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
				'default' => __('', 'cb-core'),
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
				'default' => __('', 'cb-core'),
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
				'default' => __('', 'cb-core'),
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
				'default' => __('Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam', 'cb-core'),
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
				'default' => __('est, qui dolorem ipsum quia dolor sit amet.', 'cb-core'),
				'placeholder' => __('Type your text here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'section_select_banner_2',
			[
				'label' => __('Searvice Feature Section', 'cb-core'),
			]
		);

		// Parent repeater (Outer Repeater)
		$repeaterService = new \Elementor\Repeater();
		// nestedfeaturestart here
		$nestedRepeater = new \Elementor\Repeater();
		$nestedRepeater->add_control(
			'feature_title',
			[
				'label' => __('Feature Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('', 'cb-core'),
			]
		);
		//nested feature end here
		$repeaterService->add_control(
			'service_title',
			[
				'label' => __('Service Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('', 'cb-core'),
			]
		);

		$repeaterService->add_control(
			'service_text',
			[
				'label' => __('Service Description', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __('Placing your content on relevant websites will help you reach your target audience, bring more loyal customers & boost your sales.', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('', 'cb-core'),
			]
		);
		$repeaterService->add_control(
			'service_icon',
			[
				'label' => __('Service Image', 'cb-core'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],

			]
		);

		$repeaterService->add_control(
			'button_1_link',
			[
				'label' => __('Button 1 Link', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __(''),
				'label_block' => true,
				'placeholder' => __('', 'cb-core'),
			]
		);

		$repeaterService->add_control(
			'button_2_link',
			[
				'label' => __('Button 2 Link', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __(''),
				'label_block' => true,
				'placeholder' => __('', 'cb-core'),
			]
		);

		$repeaterService->add_control(
			'service_text',
			[
				'label' => __('Service Description', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __('Placing your content on relevant websites will help you reach your target audience, bring more loyal customers & boost your sales.', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('', 'cb-core'),
			]
		);

		$repeaterService->add_control(
			'nested_service_chield',
			[
				'label' => __(' child Service Lists', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $nestedRepeater->get_controls(),
				'title_field' => 'Dynamic Service List',
			]
		);

		$this->add_control(
			'dynamic_service_parent',
			[
				'label' => __('Feature Service Sections', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeaterService->get_controls(),
				'title_field' => 'Service Section',
			]
		);

		// Nested repeater (Inner Repeater)







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

// Register the Custom Nested Repeater Widget
function register_custom_nested_repeater_widget() {
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Custom_Nested_Repeater_Widget() );
}
add_action( 'elementor/widgets/widgets_registered', 'register_custom_nested_repeater_widget' );

Plugin::instance()->widgets_manager->register(new CB_Core_GuestPostServiceUser_LB2());
