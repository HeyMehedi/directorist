<div id="atbdp-themes-tab" class="ext-wrapper et-contents__tab-item atbdp-tab__content">
    <h4><?php esc_html_e( 'Active Theme', 'directorist' )?></h4>
    <div class="theme-card-wrapper">
        <div class="theme-card">
            <figure>
                <?php 
                if ( ! empty( $args['current_active_theme_info']['thumbnail'] ) ): ?>
                <img src="<?php echo esc_url( $args['current_active_theme_info']['thumbnail'] ); ?>" alt="">
                <?php endif;?>

                <figcaption>
                    <div class="theme-title">
                        <h5><?php echo esc_html( $args['current_active_theme_info']['name'] ); ?></h5>
                        <span class="theme-version">v<?php echo esc_html( $args['current_active_theme_info']['version'] ); ?></span>
                    </div>
                    <div class="templatiq-action">
                        <a href="<?php echo esc_url( $args['current_active_theme_info']['customizer_link'] ); ?>" target="_blank" class="templatiq-action-btn btn-customize"><?php esc_html_e( 'Customize', 'directorist' )?></a>
                    </div>
                </figcaption>
            </figure>

            <?php if ( $args['current_active_theme_info']['has_update'] ): ?>
            <div class="theme-card__footer">
                <p class="theme-update theme-update--available"><?php esc_html_e( 'Update available', 'directorist' )?> <!-- <a hre="#" class="whats-new" data-target="whats-new-modal">What's new?</a> --></p>
                <a href="#" class="theme-update-btn" data-target="<?php echo esc_attr( $args['current_active_theme_info']['stylesheet'] ); ?>"><?php echo $args['is_beta'] ? 'Update Beta' : 'Update'; ?></a>
            </div>
            <?php endif;?>

            <div class="at-modal atm-fade" id="whats-new-modal">
                <div class="at-modal-content at-modal-lg">
                    <div class="atm-contents-inner">
                        <a href="" class="at-modal-close"><span aria-hidden="true">×</span></a>
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="whats-new-modal-label">Version: <span>6.5.3</span></h3>
                                </div>
                                <div class="modal-body">
                                    <div class="update-list update-list--new">
                                        <span class="update-badge update-badge--new">New</span>
                                        <ul class="update-list-items">
                                            <li>Add – Option to set custom redirection after login</li>
                                            <li>Add – Option to set custom redirection after login</li>
                                            <li>Add – Option to set custom redirection after login</li>
                                            <li>Add – Option to set custom redirection after login</li>
                                            <li>Add – Option to set custom redirection after login</li>
                                        </ul>
                                    </div><!-- ends: .update-list -->
                                    <div class="update-list update-list--fixed">
                                        <span class="update-badge update-badge--fixd">Fixed</span>
                                        <ul class="update-list-items">
                                            <li>Fixed – Option to set custom redirection after login</li>
                                            <li>Fixed – Option to set custom redirection after login</li>
                                            <li>Fixed – Option to set custom redirection after login</li>
                                        </ul>
                                    </div><!-- ends: .update-list -->
                                    <div class="update-list update-list--improved">
                                        <span class="update-badge update-badge--improved">Improved</span>
                                        <ul class="update-list-items">
                                            <li>Improved – Option to set custom redirection after login</li>
                                            <li>Improved – Option to set custom redirection after login</li>
                                            <li>Improved – Option to set custom redirection after login</li>
                                        </ul>
                                    </div><!-- ends: .update-list -->
                                    <div class="update-list update-list--removed">
                                        <span class="update-badge update-badge--removed">Removed</span>
                                        <ul class="update-list-items">
                                            <li>Removed – Option to set custom redirection after login</li>
                                            <li>Removed – Option to set custom redirection after login</li>
                                            <li>Removed – Option to set custom redirection after login</li>
                                        </ul>
                                    </div><!-- ends: .update-list -->
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><?php echo $args['is_beta'] ? 'Update Beta' : 'Update'; ?></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ( ! empty( $args['themes_available_in_subscriptions'] ) ): ?>
    <div class="available-themes-wrapper">
        <h4><?php esc_html_e( 'Available in your subscription', 'directorist' )?></h4>
        <div class="available-themes">
            <?php error_log( ' ddddd: ' . print_r($args['themes_available_in_subscriptions'] ,true) ); ?>
          
            <?php foreach ( $args['themes_available_in_subscriptions'] as $_theme_base => $template ): ?>
               
                <?php 
                    $template = directorist_get_templatiq_template( $_theme_base, $template );
                    if( ! $template ) continue;
                    $templatiq_status = directorist_is_templatiq_activated(); 
                ?>
               
                <div class="available-theme-card">
                    <figure>

                        <?php if ( ! empty( $template['thumbnail'] ) ): ?>
                            <img src="<?php echo esc_url( $template['thumbnail'] ); ?>" alt="<?php echo esc_html( $template['name'] ); ?>">
                        <?php endif;?>

                        <figcaption>
                            <h5><?php echo esc_html( $template['name'] ); ?></h5>

                            <div class="templatiq-action">

                                <?php if( $templatiq_status ): ?>

                                    <a href="<?php echo esc_url( $template['details_link'] ); ?>" class="templatiq-action-btn">
                                        <i class="la la-cloud-download-alt"></i> <?php echo __( 'Insert Full Site', 'directorist'); ?>
                                    </a>

                                <?php else:?>

                                    <a href="#"  data-type="plugin" data-key="templatiq" class="templatiq-action-btn file-install-btn">
                                        <i class="la la-download"></i> <?php echo __( 'Install', 'directorist'); ?>
                                    </a>

                                <?php endif;?>

                                <a href="<?php echo esc_url( $template['demo_link'] ); ?>" target="_blank" class="templatiq-action-btn template-preview-btn">
                                    <?php esc_html_e( 'Preview', 'directorist' )?>
                                </a>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endif;?>
</div>