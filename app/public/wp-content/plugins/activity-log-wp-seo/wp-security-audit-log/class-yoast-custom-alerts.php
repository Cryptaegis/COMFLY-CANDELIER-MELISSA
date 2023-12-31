<?php
/**
 * Custom Alerts for Yoast plugin.
 *
 * Class file for alert manager.
 *
 * @since   1.0.0
 *
 * @package wsal
 * @subpackage wsal-yoast-forms
 */

declare(strict_types=1);

namespace WSAL\Custom_Alerts;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( '\WSAL\Custom_Alerts\Yoast_Custom_Alerts' ) ) {
	/**
	 * Custom sensor for Yoast plugin.
	 *
	 * @since latest
	 */
	class Yoast_Custom_Alerts {

		/**
		 * Returns the structure of the alerts for extension.
		 *
		 * @return array
		 *
		 * @since latest
		 */
		public static function get_custom_alerts(): array {
			return array(
				esc_html__( 'Yoast SEO', 'activity-log-wp-seo' ) => array(
					esc_html__( 'Post Changes', 'activity-log-wp-seo' )    => array(
						array(
							8801,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed title of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>SEO title</strong> of the post %PostTitle% to %NewSEOTitle%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous title', 'activity-log-wp-seo' ) => '%OldSEOTitle%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8802,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the meta description of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Meta description</strong> of the post %PostTitle%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous description', 'activity-log-wp-seo' ) => '%old_desc%',
								esc_html__( 'New description', 'activity-log-wp-seo' ) => '%new_desc%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8803,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed setting to allow search engines to show post in search results of a post', 'activity-log-wp-seo' ),
							__( 'Changed the setting <strong>Allow seach engines to show post in search results</strong> for the post %PostTitle% to %NewStatus%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous setting', 'activity-log-wp-seo' ) => '%OldStatus%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8804,
							WSAL_INFORMATIONAL,
							esc_html__( 'User Enabled/Disabled the option for search engine to follow links of a post', 'activity-log-wp-seo' ),
							__( 'Changed the status of the setting <strong>Search engines to follow links in post</strong> in the post %PostTitle%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'enabled',
						),
						array(
							8805,
							WSAL_LOW,
							esc_html__( 'User set the Meta robots advanced setting of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Meta robots advanced</strong> setting for the post %PostTitle% to %NewStatus%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous setting', 'activity-log-wp-seo' ) => '%OldStatus%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8806,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the canonical URL of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Canonical URL</strong> of the post %PostTitle%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous URL', 'activity-log-wp-seo' ) => '%OldCanonicalUrl%',
								esc_html__( 'New URL', 'activity-log-wp-seo' ) => '%NewCanonicalUrl%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8807,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the focus keyword of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>focus keyword</strong> for the post %PostTitle% to %new_keywords%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous keyword', 'activity-log-wp-seo' ) => '%old_keywords%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8808,
							WSAL_INFORMATIONAL,
							esc_html__( 'User Enabled/Disabled the option Cornerston Content of a post', 'activity-log-wp-seo' ),
							__( 'Changed the setting <strong>Cornerstone content</strong> in the post %PostTitle%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'enabled',
						),
						array(
							8850,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed Breadcrumbs Title for a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Breadcrumbs Title</strong> for the post %PostTitle% to %new_breadcrumb%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous Breadcrumbs Title', 'activity-log-wp-seo' ) => '%old_breadcrumb%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8851,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed to the Schema settings of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Page type</strong> in the <strong>Schema</strong> settings to <strong>%new_type%</strong>', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous Page type', 'activity-log-wp-seo' ) => '%old_type%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
						array(
							8852,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed to the Schema settings of a post', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Article type</strong> in the <strong>Schema</strong> settings to <strong>%new_type%</strong>', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
								esc_html__( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
								esc_html__( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
								esc_html__( 'Previous Article type', 'activity-log-wp-seo' ) => '%old_type%',
							),
							array(
								esc_html__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%',
							),
							'yoast-seo-metabox',
							'modified',
						),
					),

					esc_html__( 'Website Changes', 'activity-log-wp-seo' ) => array(
						array(
							8809,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the Title Separator', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Title separator</strong> in the plugin settings to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous separator', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
						// 8810/8811 Are obsolete but remain for backwards compatibilty.
						array(
							8810,
							WSAL_MEDIUM,
							esc_html__( 'User changed the Homepage Title', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Knowledge Graph & Schema.org</strong> in the plugin settings to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous title', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
						array(
							8811,
							WSAL_MEDIUM,
							esc_html__( 'User changed the Homepage Meta description', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the homepage Meta description.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous description', 'activity-log-wp-seo' ) => '%old%',
								esc_html__( 'New description', 'activity-log-wp-seo' ) => '%new%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
						array(
							8812,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the Knowledge Graph & Schema.org', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Knowledge Graph & Schema.org</strong> in the plugin settings to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous setting', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
					),

					esc_html__( 'Plugin Settings Changes', 'activity-log-wp-seo' ) => array(
						array(
							8815,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled SEO analysis in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the <strong>SEO Analysis</strong> plugin feature.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8816,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled readability analysis in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Readability Analysis</strong> plugin feature.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8817,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled cornerstone content in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Cornerstone content</strong> plugin feature.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8818,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled the text link counter in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Text link counter</strong> plugin feature.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8819,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled XML sitemaps in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>XML sitemap</strong> plugin feature.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8820,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled an integration in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the status of the %type% integration.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),

						array(
							8821,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled the admin bar menu in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Admin bar menu</strong> plugin feature.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8822,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the Posts/Pages meta description template in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the %SEOPostType% Meta description template to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous template', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo-search-appearance',
							'modified',
						),
						array(
							8824,
							WSAL_LOW,
							esc_html__( 'User set the option to show the Yoast SEO Meta Box for Posts/Pages in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the option to show the <strong>Yoast SEO Meta Box</strong> for %SEOPostType%.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo-search-appearance',
							'enabled',
						),
						array(
							8825,
							WSAL_LOW,
							esc_html__( 'User Enabled/Disabled the advanced or schema settings for authors in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the setting <strong>Security: advanced or schema settings for authors</strong> in the plugin.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8826,
							WSAL_LOW,
							esc_html__( 'User Enabled/Disabled redirecting attachment URLs in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the setting <strong>Redirect attachment URLs</strong> in the <strong>Media</strong> search appearance settings.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),

						array(
							8827,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled Usage tracking in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the <strong>Usage tracking</strong> plugin setting.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8828,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled REST API: Head endpoint in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the <strong>REST API: Head endpoint</strong> plugin setting.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8829,
							WSAL_LOW,
							esc_html__( 'User Added/Removed a social profile in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							__( 'Changed the URL of an <strong>Organization social profile</strong>.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Social media profile', 'activity-log-wp-seo' ) => '%social_profile%',
								esc_html__( 'Old URL', 'activity-log-wp-seo' ) => '%old_url%',
								esc_html__( 'New URL', 'activity-log-wp-seo' ) => '%new_url%',
							),
							array(),
							'yoast-seo',
							'added',
						),

						// Multisite.
						array(
							8838,
							WSAL_HIGH,
							esc_html__( 'User changed who should have access to the setting on Network Level', 'activity-log-wp-seo' ),
							__( 'Changed the setting <strong>Who should have access to the Yoast SEO settings</strong> on a multisite network to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous setting', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8839,
							WSAL_LOW,
							esc_html__( 'New sites inherit their SEO options from site changed', 'activity-log-wp-seo' ),
							__( 'Changed the setting <strong>New sites in the network inherit their SEO settings from this site</strong> to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous setting', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo',
							'enabled',
						),
						array(
							8840,
							WSAL_MEDIUM,
							esc_html__( "Reset the site's SEO settings to default", 'activity-log-wp-seo' ),
							esc_html__( 'Reset the SEO settings of the site %old% to default.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Site ID', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo',
							'enabled',
						),

						// Network features enabled / disabled.
						array(
							8842,
							WSAL_HIGH,
							esc_html__( 'Disabled a plugin feature networkwide', 'activity-log-wp-seo' ),
							esc_html__( 'Disabled the plugin feature %feature_name% networkwide.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'disabled',
						),
						array(
							8843,
							WSAL_HIGH,
							esc_html__( 'Allowed site administrators to toggle a plugin feature on or off for their site', 'activity-log-wp-seo' ),
							esc_html__( 'Allowed site administrators to toggle the plugin feature %feature_name% on or off on their sites.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'enabled',
						),

						array(
							8813,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled the option Show Posts/Pages in Search Results in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the status of the content type setting to show %SEOPostType% in search results.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo-search-appearance',
							'enabled',
						),
						array(
							8814,
							WSAL_INFORMATIONAL,
							esc_html__( 'User changed the Posts/Pages title template in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the %SEOPostType% SEO title template in the plugin settings to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous template', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo-search-appearance',
							'modified',
						),

						array(
							8830,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled the taxonomies to show in search results setting in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the status of the taxonomies setting to show %SEOPostType% in search results.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo-search-appearance',
							'enabled',
						),
						array(
							8831,
							WSAL_LOW,
							esc_html__( 'User Modified the SEO title template for a taxonomy in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the SEO title template for the taxonomy %SEOPostType% to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous title', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo-search-appearance',
							'modified',
						),
						array(
							8832,
							WSAL_LOW,
							esc_html__( 'User Modified the Meta description template for a taxonomy in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the Meta description template for the taxonomy %SEOPostType% to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous description', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo-search-appearance',
							'modified',
						),
						array(
							8833,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled Author or Data archives in Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the status of the %archive_type% archives in the plugin settings.' ),
							array(),
							array(),
							'yoast-seo-search-appearance',
							'enabled',
						),
						array(
							8834,
							WSAL_MEDIUM,
							esc_html__( 'User Enabled/Disabled showing Author or Date archives in search results in Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the status of the setting to show the %archive_type% archives in the search results.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo-search-appearance',
							'enabled',
						),
						array(
							8835,
							WSAL_LOW,
							esc_html__( 'User Modified the SEO title template for Author or Date archives in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the SEO title template for the %archive_type% archives to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous title', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo-search-appearance',
							'modified',
						),
						array(
							8836,
							WSAL_LOW,
							esc_html__( 'User Modified the SEO Meta description for Author or Date archives in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the Meta description template for the %archive_type% archives to %new%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous description', 'activity-log-wp-seo' ) => '%old%',
							),
							array(),
							'yoast-seo-search-appearance',
							'modified',
						),
						array(
							8837,
							WSAL_LOW,
							esc_html__( 'User Enabled/Disabled the SEO meta box for a taxonomy', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the status of the setting to show SEO settings for the %SEOPostType% taxonomy.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo-search-appearance',
							'enabled',
						),
						array(
							8853,
							WSAL_MEDIUM,
							esc_html__( 'User the Default Page type in the Scheme settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Default Page type</strong> in the Schema settings for <strong>%SEOPostType%</strong> to <strong>%new_type%.</strong>', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous Default Page type', 'activity-log-wp-seo' ) => '%old_type%',
							),
							array(),
							'yoast-seo',
							'added',
						),
						array(
							8854,
							WSAL_MEDIUM,
							esc_html__( 'User the Default Article type in the Scheme settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Default Article type</strong> in the Schema settings for <strong>%SEOPostType%</strong> to <strong>%new_type%.</strong>', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous Default Article type', 'activity-log-wp-seo' ) => '%old_type%',
							),
							array(),
							'yoast-seo',
							'added',
						),
						array(
							8841,
							WSAL_MEDIUM,
							esc_html__( 'User Added/Removed/Modified a Webmaster Tools verification code for a search engine', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Webmaster Tools verification code</strong> for a search engine.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Search engine', 'activity-log-wp-seo' ) => '%search_engine_type%',
								esc_html__( 'Previous code', 'activity-log-wp-seo' ) => '%old%',
								esc_html__( 'New code', 'activity-log-wp-seo' )      => '%new%',
							),
							array(),
							'yoast-seo',
							'added',
						),
						array(
							8844,
							WSAL_MEDIUM,
							esc_html__( 'Changed the status of the setting Add Open Graph meta data in the Facebook settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the setting <strong>Add Open Graph meta data</strong> in the <strong>Facebook settings.</strong>', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'disabled',
						),
						array(
							8845,
							WSAL_MEDIUM,
							esc_html__( 'Changed the Default Image in the Facebook settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Default Image</strong> in the Facebook settings to <strong>%image_name%</strong>.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Image path', 'activity-log-wp-seo' )          => '%image_path%',
								esc_html__( 'Previous image', 'activity-log-wp-seo' )      => '%old_image%',
								esc_html__( 'Previous image path', 'activity-log-wp-seo' ) => '%old_path%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
						array(
							8846,
							WSAL_MEDIUM,
							esc_html__( 'Changed the status of the setting Add Twitter card meta data in the Twitter settings', 'activity-log-wp-seo' ),
							__( 'Changed the status of the setting <strong>Add Twitter card meta data</strong> in the <strong>Twitter settings.</strong>', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo',
							'disabled',
						),
						array(
							8847,
							WSAL_MEDIUM,
							esc_html__( 'Changed the Default card type to use in Twitter settings', 'activity-log-wp-seo' ),
							__( 'Changed the <strong>Default card type to use</strong> in Twitter settings to <strong>%new_setting%.</strong>', 'activity-log-wp-seo' ),
							array(
								__( 'Previous setting', 'activity-log-wp-seo' ) => '%old_setting%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
						array(
							8848,
							WSAL_MEDIUM,
							esc_html__( 'Changed the Pinterest confirmation meta tag in the Pinterest settings', 'activity-log-wp-seo' ),
							esc_html__( 'Changed the Pinterest confirmation meta tag in the Pinterest settings to %new_value%.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous value', 'activity-log-wp-seo' ) => '%old_value%',
							),
							array(),
							'yoast-seo',
							'modified',
						),
						array(
							8855,
							WSAL_MEDIUM,
							esc_html__( 'A new plain / regex redirect was added', 'activity-log-wp-seo' ),
							__( 'A <strong>%redirect_code%</strong> %redirect_type% redirect for the old URL <strong>%old_url%.</strong>', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'New URL', 'activity-log-wp-seo' ) => '%new_url%',
							),
							array(),
							'yoast-seo-redirects',
							'added',
						),
						array(
							8856,
							WSAL_MEDIUM,
							esc_html__( 'A plain / regex redirect was modified', 'activity-log-wp-seo' ),
							__( 'A <strong>%redirect_type%</strong> redirect was modified.', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Previous old URL', 'activity-log-wp-seo' ) => '%old_url%',
								esc_html__( 'New old URL', 'activity-log-wp-seo' ) => '%new_old_url%',
								esc_html__( 'Previous new URL', 'activity-log-wp-seo' ) => '%old_new_url%',
								esc_html__( 'New new URL', 'activity-log-wp-seo' ) => '%new_new_url%',
								esc_html__( 'Previous redirect type', 'activity-log-wp-seo' ) => '%old_redirect_code%',
								esc_html__( 'New redirect type', 'activity-log-wp-seo' ) => '%new_redirect_code%',
							),
							array(),
							'yoast-seo-redirects',
							'modified',
						),
						array(
							8857,
							WSAL_MEDIUM,
							esc_html__( 'A plain / regex redirect was deleted', 'activity-log-wp-seo' ),
							__( 'A <strong>%redirect_code%</strong> %redirect_type% redirect for the URL <strong>%old_url%</strong> was deleted.', 'activity-log-wp-seo' ),
							array(),
							array(),
							'yoast-seo-redirects',
							'deleted',
						),
						array(
							8858,
							WSAL_MEDIUM,
							esc_html__( 'The Redirect method was modified', 'activity-log-wp-seo' ),
							__( 'The <strong>Redirect method</strong> has been Changed to <strong>%new_method%.</strong>', 'activity-log-wp-seo' ),
							array(
								esc_html__( 'Old redirect method', 'activity-log-wp-seo' ) => '%old_method%',
							),
							array(),
							'yoast-seo-redirects',
							'modified',
						),
					),
				),
			);
		}
	}
}
