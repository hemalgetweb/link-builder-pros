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
class CB_Core_Pricing_Home extends Widget_Base
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
		return 'cb-pricing-home';
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
		return __('CB Home Pricing LinkBuilder', 'cb-core');
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
			'banner_subtitle_1',
			[
				'label' => __('Banner Subtitle', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('PRICING', 'cb-core'),
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
				'label' => __('Title Part 1', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('Our Link Building ', 'cb-core'),
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'banner_title_part_2',
			[
				'label' => __('Title Part 2', 'cb-core'),
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
				'label' => __('Title Part 3', 'cb-core'),
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
			'banner_text',
			[
				'label' => __('Section Short Description', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __('Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
				est, qui dolorem ipsum quia dolor sit amet.', 'cb-core'),
				'placeholder' => __('Type your text here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->end_controls_section();


		//Package 1 section
		$this->start_controls_section(
			'section_package_1',
			[
				'label' => __('Package 1 Section', 'cb-core'),
			]
		);

		$this->add_control(
			'pkg_title_1',
			[
				'label' => __('Package Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('5K+ Traffic', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'pkg_desc_1',
			[
				'label' => __('Package Descrtiption', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Backlinks from 5K+ Organic Traffic Sites', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_price_1',
			[
				'label' => __('Package Price', 'cb-core'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => __('199', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_link_1',
			[
				'label' => __('Package Link', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('#', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'button_text_1',
			[
				'label' => __('Button Text', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Get Started', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Button name here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		$this->add_control(
			'feature_included',
			[
				'label' => __('Feature Including Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Included:', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		//Feature Included Repeater start ==========
		$repeaterFeaturedIncluded1 = new Repeater();
		$repeaterFeaturedIncluded1->add_control(
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

		$repeaterFeaturedIncluded1->add_control(
			'feature_included_title',
			[
				'label' => __('Feature Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Title', 'cb-core'),
				'label_block' => true,
				'condition' => [
					'field_condition' => ['style-1']
				],
				'placeholder' => __('Type your title here', 'cb-core'),
			]
		);

		$repeaterFeaturedIncluded1->add_control(
			'feature_included_icon',
			[
				'label' => __('Feature Icon', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => __('yes', 'cb-core'),
				'label_block' => true,
				'options' => [
					'yes' =>  __('Enable', 'cb-core'),
					'no' =>  __('Disable', 'cb-core'),
				],
				'placeholder' => __('', 'cb-core'),
			]
		);




		$this->add_control(
			'dynamic_feature_included_1',
			[
				'label' => __('Feature Lists', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeaterFeaturedIncluded1->get_controls(),
				'title_field' => '{{{ feature_included_title }}}',
			]
		);
		//feature repeater end
		$this->end_controls_section();

		//Package 2 section
		$this->start_controls_section(
			'section_package_2',
			[
				'label' => __('Package Section 2', 'cb-core'),
			]
		);

		$this->add_control(
			'pkg_title_2',
			[
				'label' => __('Package Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('10K+ Traffic', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'pkg_desc_2',
			[
				'label' => __('Package Descrtiption', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Backlinks from 10K+ Organic Traffic Sites', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_price_2',
			[
				'label' => __('Package Price', 'cb-core'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => __('279', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_link_2',
			[
				'label' => __('Package Link', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('#', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'button_text_2',
			[
				'label' => __('Button Text', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Get Started', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Button name here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		$this->add_control(
			'feature_included',
			[
				'label' => __('Feature Including Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Included:', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		//Feature Included Repeater start ==========
		$repeaterFeaturedIncluded2 = new Repeater();
		$repeaterFeaturedIncluded2->add_control(
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

		$repeaterFeaturedIncluded2->add_control(
			'feature_included_title',
			[
				'label' => __('Feature Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Title', 'cb-core'),
				'label_block' => true,
				'condition' => [
					'field_condition' => ['style-1']
				],
				'placeholder' => __('Type your title here', 'cb-core'),
			]
		);

		$repeaterFeaturedIncluded2->add_control(
			'feature_included_icon',
			[
				'label' => __('Feature Icon', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => __('yes', 'cb-core'),
				'label_block' => true,
				'options' => [
					'yes' =>  __('Enable', 'cb-core'),
					'no' =>  __('Disable', 'cb-core'),
				],
				'placeholder' => __('', 'cb-core'),
			]
		);




		$this->add_control(
			'dynamic_feature_included_2',
			[
				'label' => __('Feature Lists', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeaterFeaturedIncluded2->get_controls(),
				'title_field' => '{{{ feature_included_title }}}',
			]
		);
		//feature repeater end
		$this->end_controls_section();

		//Package 3 section
		$this->start_controls_section(
			'section_package_3',
			[
				'label' => __('Package Section 3', 'cb-core'),
			]
		);

		$this->add_control(
			'pkg_title_3',
			[
				'label' => __('Package Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('20K+ Traffic', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'pkg_desc_3',
			[
				'label' => __('Package Descrtiption', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Backlinks from 20K+ Organic Traffic Sites', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_price_3',
			[
				'label' => __('Package Price', 'cb-core'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => __('379', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_link_3',
			[
				'label' => __('Package Link', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('#', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'button_text_3',
			[
				'label' => __('Button Text', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Get Started', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Button name here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		$this->add_control(
			'feature_included',
			[
				'label' => __('Feature Including Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Included:', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		//Feature Included Repeater start ==========
		$repeaterFeaturedIncluded3 = new Repeater();
		$repeaterFeaturedIncluded3->add_control(
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

		$repeaterFeaturedIncluded3->add_control(
			'feature_included_title',
			[
				'label' => __('Feature Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Title', 'cb-core'),
				'label_block' => true,
				'condition' => [
					'field_condition' => ['style-1']
				],
				'placeholder' => __('Type your title here', 'cb-core'),
			]
		);

		$repeaterFeaturedIncluded3->add_control(
			'feature_included_icon',
			[
				'label' => __('Feature Icon', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => __('yes', 'cb-core'),
				'label_block' => true,
				'options' => [
					'yes' =>  __('Enable', 'cb-core'),
					'no' =>  __('Disable', 'cb-core'),
				],
				'placeholder' => __('', 'cb-core'),
			]
		);




		$this->add_control(
			'dynamic_feature_included_3',
			[
				'label' => __('Feature Lists', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeaterFeaturedIncluded3->get_controls(),
				'title_field' => '{{{ feature_included_title }}}',
			]
		);
		//feature repeater end
		$this->end_controls_section();

		//Package 4 section
		$this->start_controls_section(
			'section_package_4',
			[
				'label' => __('Package Section 4', 'cb-core'),
			]
		);

		$this->add_control(
			'pkg_title_4',
			[
				'label' => __('Package Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('30K+ Traffic', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);
		$this->add_control(
			'pkg_desc_4',
			[
				'label' => __('Package Descrtiption', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Backlinks from 30K+ Organic Traffic Sites', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_price_4',
			[
				'label' => __('Package Price', 'cb-core'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => __('497', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'pkg_link_4',
			[
				'label' => __('Button Link', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('#', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your description here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);

		$this->add_control(
			'button_text_4',
			[
				'label' => __('Button Text', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Get Started', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Button name here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		$this->add_control(
			'feature_included',
			[
				'label' => __('Feature Including Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Included:', 'cb-core'),
				'label_block' => true,
				'placeholder' => __('Type your title here', 'cb-core'),
				'condition' => [
					'layout' => ['layout-1']
				]
			]
		);


		//Feature Included Repeater start ==========
		$repeaterFeaturedIncluded4 = new Repeater();
		$repeaterFeaturedIncluded4->add_control(
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

		$repeaterFeaturedIncluded4->add_control(
			'feature_included_title',
			[
				'label' => __('Feature Title', 'cb-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Feature Title', 'cb-core'),
				'label_block' => true,
				'condition' => [
					'field_condition' => ['style-1']
				],
				'placeholder' => __('Type your title here', 'cb-core'),
			]
		);

		$repeaterFeaturedIncluded4->add_control(
			'feature_included_icon',
			[
				'label' => __('Feature Icon', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => __('yes', 'cb-core'),
				'label_block' => true,
				'options' => [
					'yes' =>  __('Enable', 'cb-core'),
					'no' =>  __('Disable', 'cb-core'),
				],
				'placeholder' => __('', 'cb-core'),
			]
		);




		$this->add_control(
			'dynamic_feature_included_4',
			[
				'label' => __('Feature Lists', 'cb-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeaterFeaturedIncluded4->get_controls(),
				'title_field' => '{{{ feature_included_title }}}',
			]
		);
		//feature repeater end

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

Plugin::instance()->widgets_manager->register(new CB_Core_Pricing_Home());
