<?php
/**
 * Admin Settings: Google Business Profile + SEO
 *
 * Settings > Google Business
 *
 * @package Alexander_Law
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

const ALEXANDER_LAW_OPT_GSC      = 'alexander_law_gsc_verification';
const ALEXANDER_LAW_OPT_GBP_URL  = 'alexander_law_gbp_public_url';
const ALEXANDER_LAW_OPT_OG_IMAGE = 'alexander_law_default_og_image';

function alexander_law_register_settings_page() {
    add_options_page(
        'Google Business & SEO',
        'Google Business',
        'manage_options',
        'alexander-law-gbp',
        'alexander_law_render_settings_page'
    );
}
add_action( 'admin_menu', 'alexander_law_register_settings_page' );

function alexander_law_register_settings() {
    register_setting( 'alexander_law_gbp_group', Alexander_Law_GBP::OPT_CLIENT_ID, 'sanitize_text_field' );
    register_setting( 'alexander_law_gbp_group', Alexander_Law_GBP::OPT_CLIENT_SECRET, 'sanitize_text_field' );
    register_setting( 'alexander_law_gbp_group', Alexander_Law_GBP::OPT_ACCOUNT, 'sanitize_text_field' );
    register_setting( 'alexander_law_gbp_group', Alexander_Law_GBP::OPT_LOCATION, 'sanitize_text_field' );
    register_setting( 'alexander_law_gbp_group', ALEXANDER_LAW_OPT_GSC, 'sanitize_text_field' );
    register_setting( 'alexander_law_gbp_group', ALEXANDER_LAW_OPT_GBP_URL, 'esc_url_raw' );
    register_setting( 'alexander_law_gbp_group', ALEXANDER_LAW_OPT_OG_IMAGE, 'esc_url_raw' );
}
add_action( 'admin_init', 'alexander_law_register_settings' );

function alexander_law_render_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // Handle action buttons.
    if ( isset( $_POST['alexander_law_action'] ) && check_admin_referer( 'alexander_law_gbp_action' ) ) {
        $action = sanitize_text_field( $_POST['alexander_law_action'] );

        if ( 'sync' === $action ) {
            $ok = Alexander_Law_GBP::sync();
            echo '<div class="notice notice-' . ( $ok ? 'success' : 'warning' ) . '"><p>' . ( $ok ? 'Synced reviews and posts.' : 'Sync completed with errors — see Last Error below.' ) . '</p></div>';
        } elseif ( 'disconnect' === $action ) {
            Alexander_Law_GBP::disconnect();
            echo '<div class="notice notice-success"><p>Disconnected from Google Business Profile.</p></div>';
        } elseif ( 'pick_location' === $action ) {
            update_option( Alexander_Law_GBP::OPT_ACCOUNT, sanitize_text_field( $_POST['gbp_account'] ?? '' ) );
            update_option( Alexander_Law_GBP::OPT_LOCATION, sanitize_text_field( $_POST['gbp_location'] ?? '' ) );
            echo '<div class="notice notice-success"><p>Location saved.</p></div>';
        }
    }

    if ( isset( $_GET['gbp'] ) ) {
        $messages = array(
            'connected' => array( 'success', 'Connected to Google. Now pick your location below.' ),
            'denied'    => array( 'error', 'Authorization denied.' ),
            'error'     => array( 'error', 'OAuth failed. Check Last Error below.' ),
        );
        $msg = $messages[ sanitize_text_field( $_GET['gbp'] ) ] ?? null;
        if ( $msg ) {
            echo '<div class="notice notice-' . esc_attr( $msg[0] ) . '"><p>' . esc_html( $msg[1] ) . '</p></div>';
        }
    }

    $configured = Alexander_Law_GBP::is_configured();
    $connected  = Alexander_Law_GBP::is_connected();
    $last_sync  = get_option( Alexander_Law_GBP::OPT_LAST_SYNC );
    $last_error = get_option( Alexander_Law_GBP::OPT_LAST_ERROR );
    ?>
    <div class="wrap">
        <h1>Google Business &amp; SEO</h1>

        <h2 class="title">1. OAuth Credentials</h2>
        <p>Create credentials in Google Cloud Console (see <code>README.md</code> in the theme). Use this redirect URI:</p>
        <p><code><?php echo esc_html( Alexander_Law_GBP::redirect_uri() ); ?></code></p>

        <form method="post" action="options.php">
            <?php settings_fields( 'alexander_law_gbp_group' ); ?>
            <table class="form-table">
                <tr>
                    <th><label for="<?php echo esc_attr( Alexander_Law_GBP::OPT_CLIENT_ID ); ?>">OAuth Client ID</label></th>
                    <td><input type="text" class="regular-text" id="<?php echo esc_attr( Alexander_Law_GBP::OPT_CLIENT_ID ); ?>" name="<?php echo esc_attr( Alexander_Law_GBP::OPT_CLIENT_ID ); ?>" value="<?php echo esc_attr( get_option( Alexander_Law_GBP::OPT_CLIENT_ID ) ); ?>" /></td>
                </tr>
                <tr>
                    <th><label for="<?php echo esc_attr( Alexander_Law_GBP::OPT_CLIENT_SECRET ); ?>">OAuth Client Secret</label></th>
                    <td><input type="password" class="regular-text" id="<?php echo esc_attr( Alexander_Law_GBP::OPT_CLIENT_SECRET ); ?>" name="<?php echo esc_attr( Alexander_Law_GBP::OPT_CLIENT_SECRET ); ?>" value="<?php echo esc_attr( get_option( Alexander_Law_GBP::OPT_CLIENT_SECRET ) ); ?>" /></td>
                </tr>
                <tr>
                    <th><label for="<?php echo esc_attr( ALEXANDER_LAW_OPT_GBP_URL ); ?>">Public GBP Profile URL</label></th>
                    <td>
                        <input type="url" class="regular-text" id="<?php echo esc_attr( ALEXANDER_LAW_OPT_GBP_URL ); ?>" name="<?php echo esc_attr( ALEXANDER_LAW_OPT_GBP_URL ); ?>" value="<?php echo esc_attr( get_option( ALEXANDER_LAW_OPT_GBP_URL ) ); ?>" placeholder="https://g.page/your-business" />
                        <p class="description">Used in schema <code>sameAs</code> and "View on Google" links.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="<?php echo esc_attr( ALEXANDER_LAW_OPT_GSC ); ?>">Google Search Console Verification</label></th>
                    <td>
                        <input type="text" class="regular-text" id="<?php echo esc_attr( ALEXANDER_LAW_OPT_GSC ); ?>" name="<?php echo esc_attr( ALEXANDER_LAW_OPT_GSC ); ?>" value="<?php echo esc_attr( get_option( ALEXANDER_LAW_OPT_GSC ) ); ?>" placeholder="content value from the meta tag" />
                        <p class="description">Paste just the <code>content="..."</code> value from the GSC meta tag.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="<?php echo esc_attr( ALEXANDER_LAW_OPT_OG_IMAGE ); ?>">Default OG Image URL</label></th>
                    <td><input type="url" class="regular-text" id="<?php echo esc_attr( ALEXANDER_LAW_OPT_OG_IMAGE ); ?>" name="<?php echo esc_attr( ALEXANDER_LAW_OPT_OG_IMAGE ); ?>" value="<?php echo esc_attr( get_option( ALEXANDER_LAW_OPT_OG_IMAGE ) ); ?>" /></td>
                </tr>
            </table>
            <?php submit_button( 'Save Settings' ); ?>
        </form>

        <hr />

        <h2 class="title">2. Connect to Google</h2>
        <?php if ( ! $configured ) : ?>
            <p><em>Save your OAuth Client ID and Secret above first.</em></p>
        <?php elseif ( ! $connected ) : ?>
            <p><a class="button button-primary" href="<?php echo esc_url( Alexander_Law_GBP::authorize_url() ); ?>">Connect Google Business Profile</a></p>
        <?php else : ?>
            <p>✓ Connected.</p>
            <form method="post" style="display:inline;">
                <?php wp_nonce_field( 'alexander_law_gbp_action' ); ?>
                <input type="hidden" name="alexander_law_action" value="disconnect" />
                <button type="submit" class="button">Disconnect</button>
            </form>
        <?php endif; ?>

        <?php if ( $connected ) : ?>
            <hr />
            <h2 class="title">3. Choose Location</h2>
            <?php
            $accounts = Alexander_Law_GBP::list_accounts();
            if ( is_wp_error( $accounts ) ) {
                echo '<div class="notice notice-error"><p>' . esc_html( $accounts->get_error_message() ) . '</p></div>';
            } else {
                $current_account  = get_option( Alexander_Law_GBP::OPT_ACCOUNT );
                $current_location = get_option( Alexander_Law_GBP::OPT_LOCATION );
                ?>
                <form method="post">
                    <?php wp_nonce_field( 'alexander_law_gbp_action' ); ?>
                    <input type="hidden" name="alexander_law_action" value="pick_location" />
                    <table class="form-table">
                        <?php foreach ( ( $accounts['accounts'] ?? array() ) as $account ) :
                            $locations = Alexander_Law_GBP::list_locations( $account['name'] );
                            ?>
                            <tr>
                                <th><?php echo esc_html( $account['accountName'] ?? $account['name'] ); ?></th>
                                <td>
                                    <?php if ( is_wp_error( $locations ) ) : ?>
                                        <em><?php echo esc_html( $locations->get_error_message() ); ?></em>
                                    <?php else : ?>
                                        <?php foreach ( ( $locations['locations'] ?? array() ) as $loc ) :
                                            $checked = ( $current_account === $account['name'] && $current_location === $loc['name'] ); ?>
                                            <label style="display:block; margin-bottom:4px;">
                                                <input type="radio" name="gbp_combo" value="<?php echo esc_attr( $account['name'] . '|' . $loc['name'] ); ?>" <?php checked( $checked ); ?> onchange="document.getElementById('gbp_account').value=this.value.split('|')[0];document.getElementById('gbp_location').value=this.value.split('|')[1];" />
                                                <strong><?php echo esc_html( $loc['title'] ?? $loc['name'] ); ?></strong>
                                                <?php if ( ! empty( $loc['storefrontAddress']['addressLines'] ) ) : ?>
                                                    — <?php echo esc_html( implode( ', ', $loc['storefrontAddress']['addressLines'] ) ); ?>
                                                <?php endif; ?>
                                            </label>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <input type="hidden" id="gbp_account" name="gbp_account" value="<?php echo esc_attr( $current_account ); ?>" />
                    <input type="hidden" id="gbp_location" name="gbp_location" value="<?php echo esc_attr( $current_location ); ?>" />
                    <?php submit_button( 'Save Location' ); ?>
                </form>

                <hr />
                <h2 class="title">4. Sync</h2>
                <form method="post" style="display:inline;">
                    <?php wp_nonce_field( 'alexander_law_gbp_action' ); ?>
                    <input type="hidden" name="alexander_law_action" value="sync" />
                    <button type="submit" class="button button-primary">Sync Reviews &amp; Posts Now</button>
                </form>
                <p>
                    <strong>Last sync:</strong> <?php echo $last_sync ? esc_html( date_i18n( 'M j, Y g:i a', $last_sync ) ) : '—'; ?><br />
                    <strong>Reviews stored:</strong> <?php echo count( Alexander_Law_GBP::get_reviews() ); ?>,
                    <strong>posts:</strong> <?php echo count( Alexander_Law_GBP::get_posts() ); ?>.
                </p>
                <?php if ( $last_error ) : ?>
                    <div class="notice notice-warning inline"><p><strong>Last error:</strong> <?php echo esc_html( $last_error ); ?></p></div>
                <?php endif; ?>
                <p>Hourly background sync is scheduled via WP-Cron. Use shortcodes <code>[gbp_reviews]</code> and <code>[gbp_posts]</code> anywhere.</p>
                <?php
            }
            ?>
        <?php endif; ?>
    </div>
    <?php
}
