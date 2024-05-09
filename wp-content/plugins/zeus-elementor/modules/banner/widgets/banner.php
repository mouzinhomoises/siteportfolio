<?php
namespace ZeusElementor\Modules\Banner\Widgets;

// Elementor Classes
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Utils;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Widget_Base;

class Banner extends Widget_Base {

	public function get_name() {
		return 'zeus-banner';
	}

	public function get_title() {
		return esc_html__( 'Banner', 'zeus-elementor' );
	}

	public function get_icon() {
		return 'zeus-icon zeus-picture2';
	}

	public function get_categories() {
		return [ 'zeus-elements' ];
	}

	public function get_keywords() {
		return [
			'banner',
			'image',
			'zeus',
		];
	}

	public function get_style_depends() {
		return [ 'zeus-banner' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_banner',
			[
				'label'         => esc_html__( 'Banner', 'zeus-elementor' ),
			]
		);

		$this->add_control(
			'effect',
			[
				'label'   => esc_html__( 'Animation Effect', 'zeus-elementor' ),
				'description'   => sprintf( __( 'You can see all animations on the <a href="%s" target="_blank">demonstration page</a>.', 'zeus-elementor' ), 'https://widgets.zeus-elementor.com/banner/' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'gaia',
				'options' => [
					'gaia'      => esc_html__( 'Gaia', 'zeus-elementor' ),
					'poseidon'  => esc_html__( 'Poseidon', 'zeus-elementor' ),
					'cronos'    => esc_html__( 'Cronos', 'zeus-elementor' ),
					'hades'     => esc_html__( 'Hades', 'zeus-elementor' ),
					'demeter'   => esc_html__( 'Demeter', 'zeus-elementor' ),
					'apollo'    => esc_html__( 'Apollo', 'zeus-elementor' ),
					'athena'    => esc_html__( 'Athena', 'zeus-elementor' ),
					'artemis'   => esc_html__( 'Artemis', 'zeus-elementor' ),
					'ares'      => esc_html__( 'Ares', 'zeus-elementor' ),
					'hermes'    => esc_html__( 'Hermes', 'zeus-elementor' ),
					'eros'      => esc_html__( 'Eros', 'zeus-elementor' ),
					'hera'      => esc_html__( 'Hera', 'zeus-elementor' ),
					'aphrodite' => esc_html__( 'Aphrodite', 'zeus-elementor' ),
					'zeus'      => esc_html__( 'Zeus', 'zeus-elementor' ),
				],
			]
		);

		$this->add_control(
			'image',
			[
				'label'         => esc_html__( 'Image', 'zeus-elementor' ),
				'type'          => Controls_Manager::MEDIA,
				'default'       => [
					'url' => Utils::get_placeholder_image_src(),
				],
				'dynamic'       => [ 'active' => true ],
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name'          => 'image',
				'label'         => esc_html__( 'Image Size', 'zeus-elementor' ),
				'default'       => 'large',
			]
		);

		$this->add_control(
			'title',
			[
				'label'         => esc_html__( 'Title', 'zeus-elementor' ),
				'default'       => esc_html__( 'This is the title', 'zeus-elementor' ),
				'type'          => Controls_Manager::TEXT,
				'label_block'   => true,
				'dynamic'       => [ 'active' => true ],
			]
		);

		$this->add_control(
			'description',
			[
				'label'         => esc_html__( 'Description', 'zeus-elementor' ),
				'default'       => esc_html__( 'Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel.', 'zeus-elementor' ),
				'type'          => Controls_Manager::TEXTAREA,
				'dynamic'       => [ 'active' => true ],
			]
		);

		$this->add_control(
			'link',
			[
				'label'         => esc_html__( 'Link', 'zeus-elementor' ),
				'type'          => Controls_Manager::URL,
				'placeholder'   => esc_html__( 'https://your-link.com', 'zeus-elementor' ),
				'dynamic'       => [ 'active' => true ],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label'         => esc_html__( 'General', 'zeus-elementor' ),
				'tab'           => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'tabs_banner_style' );

		$this->start_controls_tab(
			'tab_banner_normal',
			[
				'label'         => esc_html__( 'Normal', 'zeus-elementor' ),
			]
		);

		$this->add_control(
			'banner_normal_opacity',
			[
				'label'         => esc_html__( 'Opacity', 'zeus-elementor' ),
				'type'          => Controls_Manager::SLIDER,
				'range'         => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors'     => [
					'body {{WRAPPER}} .zeus-banner img' => 'opacity: {{SIZE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_banner_hover',
			[
				'label'         => esc_html__( 'Hover', 'zeus-elementor' ),
			]
		);

		$this->add_control(
			'banner_hover_opacity',
			[
				'label'         => esc_html__( 'Opacity', 'zeus-elementor' ),
				'type'          => Controls_Manager::SLIDER,
				'range'         => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors'     => [
					'body {{WRAPPER}} .zeus-banner:hover img' => 'opacity: {{SIZE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Background::get_type(),
			array(
				'name'          => 'banner_background',
				'selector'      => '{{WRAPPER}} .zeus-banner',
				'separator'     => 'before',
			)
		);

		$this->add_control(
			'banner_additional_color',
			[
				'label'         => esc_html__( 'Additional Color', 'zeus-elementor' ),
				'type'          => Controls_Manager::COLOR,
				'selectors'     => [
					'{{WRAPPER}} .zeus-banner.zeus-apolo .zeus-banner-text' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-bubba figcaption:before' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-bubba figcaption:after' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-chico figcaption:before' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-jazz figcaption:after' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-layla figcaption:before' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-layla figcaption:after' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-ming figcaption:before' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-marley .zeus-banner-title:after' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-romeo figcaption:before' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-romeo figcaption:after' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-roxy figcaption:before' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-ruby .zeus-banner-text' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .zeus-banner.zeus-sarah .zeus-banner-title:after' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'          => 'banner_border',
				'selector'      => '{{WRAPPER}} .zeus-banner',
			]
		);

		$this->add_responsive_control(
			'banner_padding',
			[
				'label'         => esc_html__( 'Padding', 'zeus-elementor' ),
				'type'          => Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%' ],
				'selectors'     => [
					'{{WRAPPER}} .zeus-banner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'banner_margin',
			[
				'label'         => esc_html__( 'Margin', 'zeus-elementor' ),
				'type'          => Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%' ],
				'selectors'     => [
					'{{WRAPPER}} .zeus-banner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'banner_border_radius',
			[
				'label'         => esc_html__( 'Border Radius', 'zeus-elementor' ),
				'type'          => Controls_Manager::DIMENSIONS,
				'size_units'    => [ 'px', '%' ],
				'selectors'     => [
					'{{WRAPPER}} .zeus-banner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'          => 'banner_box_shadow',
				'selector'      => '{{WRAPPER}} .zeus-banner',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_title_style',
			[
				'label'         => esc_html__( 'Banner Title', 'zeus-elementor' ),
				'tab'           => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'         => esc_html__( 'Color', 'zeus-elementor' ),
				'type'          => Controls_Manager::COLOR,
				'selectors'     => [
					'{{WRAPPER}} .zeus-banner .zeus-banner-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'          => 'title_typo',
				'selector'      => '{{WRAPPER}} .zeus-banner .zeus-banner-title',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_description_style',
			[
				'label'         => esc_html__( 'Banner Description', 'zeus-elementor' ),
				'tab'           => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'description_color',
			[
				'label'         => esc_html__( 'Color', 'zeus-elementor' ),
				'type'          => Controls_Manager::COLOR,
				'selectors'     => [
					'{{WRAPPER}} .zeus-banner .zeus-banner-text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'          => 'description_typo',
				'selector'      => '{{WRAPPER}} .zeus-banner .zeus-banner-text',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings       = $this->get_settings_for_display();
		$link           = $settings['link'];
		$effect         = $settings['effect'];

		$this->add_render_attribute( 'banner', 'class', 'zeus-banner' );
		if ( ! empty( $effect ) ) {
			$this->add_render_attribute( 'banner', 'class', 'zeus-' . $effect );
		}

		$this->add_render_attribute( 'content', 'class', 'zeus-banner-content' );
		$this->add_render_attribute( 'title', 'class', 'zeus-banner-title' );
		$this->add_render_attribute( 'description', 'class', 'zeus-banner-text' ); ?>

		<figure <?php $this->print_render_attribute_string( 'banner' ); ?>>
			<?php
			if ( ! empty( $link['url'] ) ) {
				$this->add_render_attribute( 'link', 'class', 'zeus-banner-link' );
				$this->add_link_attributes( 'link', $settings['link'] );
				?>
				<a <?php $this->print_render_attribute_string( 'link' ); ?>>
				<?php
			}
			?>
				<?php echo wp_kses_post( Group_Control_Image_Size::get_attachment_image_html( $settings ) ); ?>
				<figcaption>
					<div <?php $this->print_render_attribute_string( 'content' ); ?>>
						<h5 <?php $this->print_render_attribute_string( 'title' ); ?>><?php $this->print_unescaped_setting( 'title' ); ?></h5>
						<div <?php $this->print_render_attribute_string( 'description' ); ?>><?php $this->print_unescaped_setting( 'description' ); ?></div>
					</div>
				</figcaption>
			<?php if ( ! empty( $link['url'] ) ) : ?>
				</a>
			<?php endif; ?>
		</figure>
		<?php
	}

	protected function content_template() {
		?>
		<#
		view.addRenderAttribute( 'banner', 'class', 'zeus-banner' );

		if ( settings.effect ) {
			view.addRenderAttribute( 'banner', 'class', 'zeus-' + settings.effect );
		}

		view.addRenderAttribute( 'content', 'class', 'zeus-banner-content' );
		view.addRenderAttribute( 'title', 'class', 'zeus-banner-title' );
		view.addRenderAttribute( 'description', 'class', 'zeus-banner-text' );

		var image = {
			id: settings.image.id,
			url: settings.image.url,
			size: settings.image_size,
			dimension: settings.image_custom_dimension,
			model: view.getEditModel()
		};

		var imageUrl = elementor.imagesManager.getImageUrl( image );
		#>

		<figure {{{ view.getRenderAttributeString( 'banner' ) }}}>
			<# if ( settings.link ) { #>
				<a href="#" class="zeus-banner-link">
			<# } #>
				<img src="{{ imageUrl }}">
				<figcaption>
					<div {{{ view.getRenderAttributeString( 'content' ) }}}>
						<h5 {{{ view.getRenderAttributeString( 'title' ) }}}>{{{ settings.title }}}</h5>
						<div {{{ view.getRenderAttributeString( 'description' ) }}}>{{{ settings.description }}}</div>
					</div>
				</figcaption>
			<# if ( settings.link ) { #>
				</a>
			<# } #>
		</figure>
		<?php
	}
}
